<?php
require 'db-config.php';
header('Content-Type: application/json');

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Version ultra-simplifiée et testée
    $query = "
        SELECT 
            s.session_id as id,
            s.created_at,
            (
                SELECT m.content 
                FROM messages m 
                WHERE m.message_id = s.id 
                AND m.sender = 'user'
                LIMIT 1
            ) as preview,
            COUNT(m.id) as message_count
        FROM session s
        LEFT JOIN messages m ON m.message_id = s.id
        GROUP BY s.id
        ORDER BY s.created_at DESC
        LIMIT 50
    ";
    
    $stmt = $pdo->query($query);
    $conversations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Debug: Vérifiez les données brutes
    error_log("Données brutes SQL: " . print_r($conversations, true));
    
    $result = array_map(function($conv) {
        return [
            'id' => $conv['id'],
            'created_at' => $conv['created_at'],
            'preview' => $conv['preview'] ? substr(strip_tags($conv['preview']), 0, 50) : 'Nouvelle conversation',
            'message_count' => $conv['message_count']
        ];
    }, $conversations);
    
    echo json_encode($result);
    
} catch (PDOException $e) {
    error_log("Erreur get-conversations: " . $e->getMessage());
    echo json_encode(['error' => 'Erreur de chargement des conversations']);
}