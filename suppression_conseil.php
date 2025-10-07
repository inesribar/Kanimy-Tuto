<?php
session_start();
include 'basedonnees_connection.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Vérifiez si un ID de conseil est fourni
if (!isset($_GET['id'])) {
    echo "Erreur : aucun ID de conseil fourni.";
    exit();
}

$conseil_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Supprimer le conseil
$stmt = $conn->prepare("DELETE FROM conseils WHERE id = ? AND user_id = ?");
if (!$stmt) {
    die("Erreur de préparation de la requête : " . $conn->error);
}
$stmt->bind_param("ii", $conseil_id, $user_id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        // Redirection après la suppression réussie
        header("Location: KanimyTuto_utilisateurs.php");
        exit();
    } else {
        echo "Erreur : aucun conseil trouvé avec cet ID pour cet utilisateur.";
    }
} else {
    echo "Erreur lors de la suppression du conseil : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
