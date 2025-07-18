<?php
require 'db-config.php';
require 'phone-utils.php';
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = trim($input['userMessage'] ?? '');
$sessionId = trim($input['sessionId'] ?? '');

if (empty($userMessage)) {
    echo json_encode(['success' => false, 'error' => 'Le message utilisateur est vide.']);
    exit;
}

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Détection des numéros
    $detectedPhones = [];
    if (preg_match_all('/\b(?:\+221|00221|221)?(7[0-8][0-9]{7})\b/', $userMessage, $matches)) {
        $detectedPhones = array_map(function($num) {
            return '221' . $num;
        }, $matches[1]);
        
        if (!empty($detectedPhones)) {
            $stmt = $pdo->prepare("INSERT IGNORE INTO phone_numbers (session_id, phone_number) VALUES (?, ?)");
            foreach ($detectedPhones as $phone) {
                $stmt->execute([$sessionId, $phone]);
            }
        }
    }

    // Gestion de la session
    $stmt = $pdo->prepare("SELECT id FROM session WHERE session_id = ?");
    $stmt->execute([$sessionId]);
    
    if ($stmt->rowCount() === 0) {
        $stmt = $pdo->prepare("INSERT INTO session (session_id) VALUES (?)");
        $stmt->execute([$sessionId]);
        $sessionIdInt = $pdo->lastInsertId();
    } else {
        $sessionIdInt = $stmt->fetch()['id'];
    }

    // Enregistrement du message utilisateur
    $stmt = $pdo->prepare("INSERT INTO messages (message_id, sender, content) VALUES (?, 'user', ?)");
    $stmt->execute([$sessionIdInt, $userMessage]);

    // Préparation de l'historique pour l'API
    $stmt = $pdo->prepare("SELECT sender, content FROM messages WHERE message_id = ? ORDER BY sent_at ASC");
    $stmt->execute([$sessionIdInt]);
    $history = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $messagesForAPI = array_map(function($msg) {
        return [
            'role' => $msg['sender'] === 'user' ? 'user' : 'assistant',
            'content' => $msg['content']
        ];
    }, $history);

    // Configuration Mistral
    $apiKey = '7aV9xjUEL1QgGVS7BeyIKyhODYY52pxL';
    $agentId = 'ag:bd26b0a0:20250221:absa:016ffcde';

    // Appel à l'API Mistral
    $response = callMistralAPI($apiKey, $agentId, $messagesForAPI);
    
    if ($response['success']) {
        $stmt = $pdo->prepare("INSERT INTO messages (message_id, sender, content) VALUES (?, 'assistant', ?)");
        $stmt->execute([$sessionIdInt, $response['message']]);
        
        echo json_encode([
            'success' => true,
            'response' => $response['message']
        ]);
    } else {
        throw new Exception($response['error']);
    }

} catch (Exception $e) {
    error_log("ERREUR COMPLETE: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'error' => 'Erreur de connexion au serveur',
        'debug_info' => 'Vérifiez les logs serveur' // À désactiver en production
    ]);
}

function callMistralAPI($apiKey, $agentId, $messages) {
    $ch = curl_init('https://api.mistral.ai/v1/agents/completions');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $apiKey
        ],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode([
            'agent_id' => $agentId,
            'messages' => $messages
        ]),
        CURLOPT_TIMEOUT => 30
    ]);

    $response = curl_exec($ch);
    
    if ($response === false) {
        return ['success' => false, 'error' => 'Erreur cURL: ' . curl_error($ch)];
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($httpCode !== 200) {
        return ['success' => false, 'error' => "Code HTTP $httpCode"];
    }

    if (!isset($data['choices'][0]['message']['content'])) {
        return ['success' => false, 'error' => 'Format de réponse invalide'];
    }

    return ['success' => true, 'message' => $data['choices'][0]['message']['content']];
}