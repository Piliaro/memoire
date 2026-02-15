<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'sukuli');
define('DB_USER', 'root');
define('DB_PASS', '');

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
