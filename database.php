<?php
$host = '127.0.0.1';
$dbname = 'blog_it';
$username = 'root';
$password = 'root';
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo'connexion reussie';
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}