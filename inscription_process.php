<?php
// Inclure la connexion à la base de données
include 'basedonnees_connection.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST['username'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['password'];

    // Hacher le mot de passe
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom_utilisateur, $email, $mot_de_passe_hache);

    // Exécuter la déclaration
    if ($stmt->execute()) {
        echo "Nouvel enregistrement créé avec succès";
        // Rediriger vers la page de connexion ou une autre page
        header("Location: KanimyTuto_connection.php");
    } else {
        echo "Erreur: " . $stmt->error;
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
} else {
    echo "Méthode de requête invalide.";
}
?>
