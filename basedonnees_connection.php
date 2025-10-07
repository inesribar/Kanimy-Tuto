<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanimy_tuto";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
} else {
    echo "Connexion réussie"; // Ajoutez ceci pour vérifier la connexion
}
?>
