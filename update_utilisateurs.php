<?php
session_start();
include 'basedonnees_connection.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Récupérer les données soumises
$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Mettre à jour les informations de l'utilisateur
if (!empty($password)) {
    // Hacher le mot de passe si fourni
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE utilisateurs SET nom_utilisateur = ?, email = ?, mot_de_passe = ? WHERE id = ?");
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("sssi", $username, $email, $hashed_password, $user_id);
} else {
    $stmt = $conn->prepare("UPDATE utilisateurs SET nom_utilisateur = ?, email = ? WHERE id = ?");
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("ssi", $username, $email, $user_id);
}

if ($stmt->execute()) {
    echo "Profil mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du profil: " . $stmt->error;
}

$stmt->close();
$conn->close();
header("Location: KanimyTuto_utilisateurs.php");
exit();
?>

