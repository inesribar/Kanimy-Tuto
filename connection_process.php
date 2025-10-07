<?php
session_start();
include 'basedonnees_connection.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = $_POST['username'];
    $password = $_POST['password'];

    // Préparer et exécuter la requête
    $stmt = $conn->prepare("SELECT id, nom_utilisateur, email, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = ? OR email = ?");
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $stmt->store_result();
    
    // Vérifier si l'utilisateur existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nom_utilisateur, $email, $hashed_password);
        $stmt->fetch();

        // Vérifier le mot de passe
        if (password_verify($password, $hashed_password)) {
            // Mot de passe correct, démarrer une session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $nom_utilisateur;
            header("Location: KanimyTuto_utilisateurs.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Nom d'utilisateur ou email incorrect.";
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
} else {
    echo "Méthode de requête invalide.";
}
?>
