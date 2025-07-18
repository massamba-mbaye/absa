<?php
$host = 'polarisaas488.mysql.db:3306';
$dbname = 'polarisaas488';
$username = 'polarisaas488';
$password = 'd5mu5ny9kjCE';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
?>