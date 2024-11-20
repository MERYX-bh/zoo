<?php
// database.php

// Informations de connexion
$host = '127.0.0.1';        // Hôte de la base de données
$db   = 'arcadia_zoo';      // Nom de la base de données
$user = 'root';             // Nom d'utilisateur MySQL (par défaut : root)
$pass = '';                 // Mot de passe MySQL (par défaut : vide dans XAMPP)
$charset = 'utf8mb4';

// Options de PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Connexion à la base de données
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie à la base de données!";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
