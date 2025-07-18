<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Méthode non autorisée']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['event_type'], $data['conversation_id'], $data['link'])) {
    echo json_encode(['success' => false, 'error' => 'Données manquantes']);
    exit;
}

$eventType = filter_var($data['event_type'], FILTER_SANITIZE_STRING);
$conversationId = filter_var($data['conversation_id'], FILTER_SANITIZE_STRING);
$link = filter_var($data['link'], FILTER_SANITIZE_URL);
$messageId = isset($data['message_id']) ? filter_var($data['message_id'], FILTER_SANITIZE_STRING) : '';

if (!in_array($eventType, ['link_detected', 'link_clicked'])) {
    echo json_encode(['success' => false, 'error' => 'Type d\'événement invalide']);
    exit;
}

$logEntry = [
    'timestamp' => date('Y-m-d H:i:s'),
    'event_type' => $eventType,
    'conversation_id' => $conversationId,
    'message_id' => $messageId,
    'link' => $link,
    'ip' => $_SERVER['REMOTE_ADDR'],
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];

$logFile = __DIR__ . '/../logs/links_log.json';
$logDir = dirname($logFile);

if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}

$logs = [];
if (file_exists($logFile)) {
    $fileContent = file_get_contents($logFile);
    if (!empty($fileContent)) {
        $logs = json_decode($fileContent, true) ?: [];
    }
}

$logs[] = $logEntry;

if (file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Échec de l\'écriture du journal']);
}
?>
