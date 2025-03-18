<?php
$servername = "localhost";
$username = "hospital_user";
$password = "password";
$dbname = "hospital_db";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
