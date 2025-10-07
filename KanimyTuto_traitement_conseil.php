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
$titre = $_POST['titre'];
$categories = $_POST['categories'];
$contenu = $_POST['contenu'];


// Vérifier si une image a été téléchargée
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    // Chemin temporaire de l'image téléchargée
    $imageTmpPath = $_FILES['image']['tmp_name'];

    // Lire le contenu de l'image
    $imageData = file_get_contents($imageTmpPath);
} else {
    // Aucune image n'a été téléchargée
    $imageData = null; as
}

// Préparation et exécution de la requête d'insertion
$stmt = $conn->prepare("INSERT INTO conseils (user_id, titre, categories, contenu, image_data, date_submis) VALUES (?, ?, ?, ?, ?, NOW())");
if (!$stmt) {
    die("Erreur de préparation de la requête: " . $conn->error);
}

$stmt->bind_param("isssb", $user_id, $titre, $categories, $contenu, $imageData);

if ($stmt->execute()) {
    // Conseil inséré avec succès
    echo "Conseil soumis avec succès!";
} else {
    // Erreur lors de l'insertion du conseil
    echo "Erreur lors de la soumission du conseil: " . $stmt->error;
}

// Fermeture de la requête et de la connexion à la base de données
$stmt->close();
$conn->close();

// Redirection vers une page de confirmation
header("Location: KanimyTuto_soumission_conseil_confirmation.php");
exit();
?>

