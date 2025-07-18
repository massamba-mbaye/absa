<?php
require 'db-config.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$sessionId = $data['sessionId'] ?? '';
$sender = $data['sender'] ?? '';
$content = $data['content'] ?? '';

if (!in_array($sender, ['user', 'assistant', 'system'])) {
    echo json_encode(['success' => false, 'error' => 'Rôle invalide']);
    exit;
}

$content = trim($content);
if (empty($content)) {
    echo json_encode(['success' => false, 'error' => 'Message vide']);
    exit;
}

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    $stmt = $pdo->prepare("INSERT IGNORE INTO session (session_id) VALUES (?)");
    $stmt->execute([$sessionId]);

    $stmt = $pdo->prepare("SELECT id FROM session WHERE session_id = ?");
    $stmt->execute([$sessionId]);
    $session = $stmt->fetch();

    if (!$session) {
        throw new Exception("Session introuvable");
    }

    if ($sender === 'user' && strlen($content) > 5) {
        $preview = substr($content, 0, 50);
        $stmt = $pdo->prepare("UPDATE session SET last_preview = ? WHERE id = ?");
        $stmt->execute([$preview, $session['id']]);
    }

    $stmt = $pdo->prepare("INSERT INTO messages (message_id, sender, content) VALUES (?, ?, ?)");
    $stmt->execute([$session['id'], $sender, $content]);

    echo json_encode(['success' => true]);

} catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['success' => false, 'error' => 'Erreur interne']);
}
?>