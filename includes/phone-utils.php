<?php
function detectSenegalPhone($text) {
    // Version améliorée de la détection
    if (preg_match_all('/(?:\+|00|221)?(7[0-8][0-9]{7})\b/', $text, $matches)) {
        return array_map(function($num) {
            return '221' . $num; // Standardisation
        }, $matches[1]);
    }
    return [];
}

function savePhonesToDB($pdo, $sessionId, $phones) {
    $stmt = $pdo->prepare("
        INSERT INTO phone_numbers (session_id, phone_number) 
        VALUES (:session_id, :phone)
        ON DUPLICATE KEY UPDATE detected_at = CURRENT_TIMESTAMP
    ");
    
    foreach ($phones as $phone) {
        $stmt->execute([
            ':session_id' => $sessionId,
            ':phone' => $phone
        ]);
    }
}