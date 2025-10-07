<?php
session_start();
include 'basedonnees_connection.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Récupérer les données soumises
$conseil_id = $_SESSION['conseil_id'];
$user_id = $_SESSION['user_id'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

// Vérifier si une image a été téléchargée
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    // Chemin temporaire de l'image téléchargée
    $imageTmpPath = $_FILES['image']['tmp_name'];

    // Lire le contenu de l'image
    $imageData = file_get_contents($imageTmpPath);
} else {
    // Aucune image n'a été téléchargée
    $imageData = null; // Utilisez une valeur par défaut ou traitez l'erreur selon votre cas
}

// Mettre à jour les informations du conseil
if ($imageData !== null) {
    $stmt = $conn->prepare("UPDATE conseils SET titre = ?, contenu = ?, image = ? WHERE conseil_id = ? AND user_id = ?");
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("sssi", $titre, $contenu, $imageData, $conseil_id, $user_id);
} else {
    $stmt = $conn->prepare("UPDATE conseils SET titre = ?, contenu = ? WHERE conseil_id = ? AND user_id = ?");
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("ssi", $titre, $contenu, $conseil_id, $user_id);
}

if ($stmt->execute()) {
    echo "Conseil mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du conseil: " . $stmt->error;
}

$stmt->close();
$conn->close();
header("Location: KanimyTuto_utilisateurs.php");
exit();
?>
