<?php
$host = 'localhost';
$dbname = 'punto_venta';
$username = 'root';
$password = '';
$charset = 'utf8mb4';
$port = '3306';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port";
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
