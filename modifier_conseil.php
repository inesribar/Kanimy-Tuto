<?php
session_start();
include 'basedonnees_connection.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Récupérer l'ID du conseil à modifier
if (isset($_GET['conseil_id'])) {
    $conseil_id = $_GET['conseil_id'];

    // Récupérer les informations du conseil
    $stmt = $conn->prepare("SELECT titre, categories, contenu, image_data FROM conseils WHERE conseil_id = ? AND user_id = ?");
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("ii", $conseil_id, $_SESSION['user_id']);
    $stmt->execute();
    $stmt->bind_result($titre, $categories, $contenu, $image_data);
    $stmt->fetch();
    $stmt->close();
} else {
    header("Location: KanimyTuto_utilisateurs.php");
    header("Location: Page_conseil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Conseil</title>
    <link rel="stylesheet" type="text/css" href="KanimyTuto_formulaire.css">
</head>
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
<body>
    <div class="content">
        <h1>Modifier Conseil</h1>
        <!-- Formulaire pour modifier un conseil -->
        <form action="update_conseil.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="conseil_id" value="<?php echo htmlspecialchars($conseil_id); ?>">
            <div class="profile-info">
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" value="<?php echo htmlspecialchars($titre); ?>" required>
            </div>
            <div class="profile-info">
                <label for="categories">Categories:</label>
                <input type="text" id="categories" name="categories" value="<?php echo htmlspecialchars($categories);?>" required>
            </div>
            <div class="profile-info">
                <label for="contenu">Contenu:</label>
                <textarea id="contenu" name="contenu" required><?php echo htmlspecialchars($contenu); ?></textarea>
            </div>
            <div class="profile-info">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>
            <button class="submit-btn">Enregistrer</button>
        </form>
    </div>
</body>
</html>
