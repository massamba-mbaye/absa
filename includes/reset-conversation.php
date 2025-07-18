<?php
session_start();
header('Content-Type: application/json');

session_regenerate_id(true);
$_SESSION['conversation_id'] = uniqid('conv_', true);
$_SESSION['conversation'] = [];

echo json_encode(['success' => true]);
?>