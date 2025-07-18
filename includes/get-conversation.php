<?php
require 'db-config.php';
header('Content-Type: application/json');

$conversationId = $_GET['id'] ?? '';

if (!preg_match('/^conv_[a-zA-Z0-9\-_]+$/', $conversationId)) {
    echo json_encode(['error' => 'Identifiant de conversation invalide']);
    exit;
}

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    $stmt = $pdo->prepare("SELECT id FROM session WHERE session_id = ?");
    $stmt->execute([$conversationId]);
    $session = $stmt->fetch();

    if (!$session) {
        echo json_encode(['error' => 'Conversation non trouvée']);
        exit;
    }

    $stmt = $pdo->prepare("SELECT sender, content, sent_at FROM messages WHERE message_id = ? ORDER BY sent_at ASC");
    $stmt->execute([$session['id']]);

    echo json_encode(['messages' => $stmt->fetchAll()]);

} catch (PDOException $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Erreur interne']);
}
?>