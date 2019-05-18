<?php
$dsn = 'mysql:dbname=spawn_db;host=localhost:3307;charset=UTF8';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}