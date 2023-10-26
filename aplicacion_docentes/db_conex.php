<?php
$host = 'localhost';
$db   = 'asignaturas2_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>
