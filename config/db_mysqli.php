<?php

/**
 * CONNEXION À LA BASE DE DONNÉES - MySQLi
 * ========================================
 * Ce fichier est COMPLET - Ne pas modifier
 * 
 * Utilisation: require_once 'db_mysqli.php';
 * La variable $conn contient la connexion
 */

$host = 'db';
$username = 'root';
$password = 'root';
$database = 'shop_db';



// Connexion MySQLi (Procédural)
$conn = mysqli_connect($host, $username, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion: " . mysqli_connect_error());
}







// // Connexion MySQLi (Orienté Objet)
// $conn = new mysqli($host, $username, $password, $database);

// // Vérification de la connexion
// if ($conn->connect_error) {
//     die("Échec de la connexion: " . $conn->connect_error);
// }




