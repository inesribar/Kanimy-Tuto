<?php
session_start();
include 'basedonnees_connection.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Récupérer les informations de l'utilisateur
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT nom_utilisateur, email FROM utilisateurs WHERE id = ?");
if (!$stmt) {
    die("Erreur de préparation de la requête: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($nom_utilisateur, $email);
$stmt->fetch();
$stmt->close();



// Comptage du nombre de conseils créés par l'utilisateur
$stmt_count = $conn->prepare("SELECT COUNT(*) FROM conseils WHERE user_id = ?");
if (!$stmt_count) {
    die("Erreur de préparation de la requête: " . $conn->error);
}
$stmt_count->bind_param("i", $user_id);
$stmt_count->execute();
$stmt_count->bind_result($conseil_count);
$stmt_count->fetch();
$stmt_count->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="navbar">
        <img src="title.png" class="logo" width="150px" height="100px">
    

    <nav>
        <ul>
            <li><a href="KanimyTuto_accueil.php">Accueil</a></li>
            <li><a href="KanimyTuto_accueil.php">A propos de nous</a></li>
            <li><a href="KanimyTuto_accueil.php">Nous contacter</a></li>
            <li><a href="Page_conseil.php">Liste de conseils</a></li>
        </ul>
    </nav>

    <nav class="align-right"> 
        <a href="KanimyTuto_inscription.php" class="rounded-box">S'inscrire</a>
        <a href="KanimyTuto_connection.php" class="rounded-box">Se connecter</a>
    </nav></br>

     <div class="search-container">
        <form action="/search" method="GET">
            <input type="search" name="query" placeholder="Rechercher..." required> 
            <button type="submit" class="rounded-box">Rechercher</button>
        </form>
    </div>
  <!-- Script PHP pour gérer les demandes de recherche -->
    <?php
        // Vérifie si le paramètre 's' est défini et non vide
        if (isset($_GET['s']) && !empty(trim($_GET['s']))) {
            // Lire le contenu du fichier JSON
            $jsonContent = file_get_contents('keywords.json');
            if ($jsonContent === false) {
                die("Erreur lors de la lecture du fichier JSON.");
            }

            // Décoder les données JSON
            $jsonData = json_decode($jsonContent, true);
            if ($jsonData === null && json_last_error() !== JSON_ERROR_NONE) {
                die("Erreur de décodage JSON : " . json_last_error_msg());
            }

            // Traitement de la recherche
            $recherche = strtolower(trim(htmlspecialchars($_GET['s'])));
            $recherche = str_replace(' ', '-', $recherche);

            // Vérifie si la recherche correspond à une clé dans les données JSON
            if (array_key_exists($recherche, $jsonData)) {
                include($jsonData[$recherche]);
            } else {
                echo "<p>Aucun article correspondant à votre recherche n'a été trouvé.</p>";
            }
        } else {
            // Si la recherche est vide, ne rien faire
        }
    ?>
    </header>
    <div class="content">
        <h1>Profil Utilisateur</h1>
        <div class="container">
        <h2>Mes informations personnelles</h2>
        <form action="update_utilisateurs.php" method="POST" class="container">
            <div class="profile-info">
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($nom_utilisateur); ?>" required>
            </div>
            <div class="profile-info">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="profile-info">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password">
            </div>
            <button class="submit-btn">Enregistrer</button>
            </div>
        </form>
        <div class="container">
        <h2>Mes conseils</h2>
        <!-- Lien pour soumettre un nouveau conseil -->
        <a href="KanimyTuto_soumission_conseil.php">Créer un nouveau conseil</a></br>
        <!-- Affichage des conseils déjà soumis par l'utilisateur -->
        <?php

        include 'basedonnees_connection.php';

        // Récupérer l'ID de l'utilisateur connecté
        $user_id = $_SESSION['user_id'];

        // Requête pour récupérer les conseils de l'utilisateur
        $stmt_user = $conn->prepare("SELECT titre, categories, contenu, image_data, date_submis FROM conseils WHERE user_id = ? ORDER BY date_submis DESC");
        if (!$stmt_user) {
            die("Erreur de préparation de la requête: " . $conn->error);
        }
        $stmt_user->bind_param("i", $user_id);
        $stmt_user->execute();
        $result_user = $stmt_user->get_result();


        // Traiter les résultats et afficher les conseils

        while ($row_user = $result_user->fetch_assoc()) {
            // Afficher les conseils spécifiques à l'utilisateur
            echo "<h3>" . htmlspecialchars($row_user['titre']) . "</h3>";
            echo "<i>" . htmlspecialchars($row_user['categories']) . "</i>";
            echo "<div>" . htmlspecialchars($row_user['contenu']) . "</div>";
            echo "<p>Date de soumission: " . $row_user['date_submis'] . "</p>";


        // Vérifier si un chemin d'accès à une image existe
        if (!empty($row_user['image_data'])) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row_user['image_data']) . '" alt="Image du conseil">';
        }
            //Liens pour modifier ou supprimer le conseil
            echo '<a href="modifier_conseil.php?id=' . $row_user['id'] . '">Modifier le conseil</a>';
            echo '<a href="suppression_conseil.php?id=' . $row_user['id'] . '">Supprimer le conseil</a>';
        }


        // Fermer les requêtes et la connexion à la base de données
        $stmt_user->close();
        $conn->close();
        ?>

        </div>
        <div class="container">
        <h2>Ma contribution</h2>
        <p>Nombre de conseils créés : <?php echo $conseil_count; ?></p>
        </div>
    </div>
</body>
</html>

