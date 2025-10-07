<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre un Conseil</title>
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
    </header>

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
    <div class="content">
        <h1>Soumettre un Conseil</h1>
        <!-- Formulaire de soumission d'un conseil -->
        <form action="KanimyTuto_traitement_conseil.php" method="POST" class="container">
            <div class="profile-info">
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            <div class="profile-info">
                <label for="categories">Catégories:</label>
                <input type="text" id="categories" name="categories" required>
            </div>
            <div class="profile-info">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="profile-info">
                <label for="contenu">Contenu:</label>
                <textarea id="contenu" name="contenu" rows="50" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Soumettre</button>
        </form>
    </div>
</body>
</html>
