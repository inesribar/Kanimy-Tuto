<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette de Smoothie pour le Bien-être</title>
    <link rel="stylesheet" type="text/css" href="KanimyTuto_accueil.css">
</head>
<	<header class="navbar">
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
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un conseil">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
    </div>
</header>

<body>
    <div class="titre">
        <h1>Créer un terrarium en 6 étapes simples</h1>
    </div>
   
    <header>
        <div class="center-content">
            <span>Publié le 29/05/2024 à 9h12 par Jades</span>
            <div class="catalogue_accueil img">
                <img src="terrarium.jpg" alt="Terrarium">
            </div>
        </div>
    </header>

    <article class="article">
        <h1>Créez votre propre oasis de verdure</h1>
        <p>Envie d'apporter une touche de nature à votre intérieur tout en créant un petit écosystème enchanteur ? Les terrariums sont la solution parfaite ! Dans ce tutoriel, je vous dévoile comment créer votre propre oasis de verdure en verre. Suivez-moi dans cette aventure verdoyante !</p>
        <div class="center-content">
            <br><br>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <br><br>

        <h2>Les étapes pour créer votre terrarium</h2>
        <ul>
            <li><strong>Choix du contenant</strong>: Optez pour un récipient en verre transparent avec ou sans couvercle, selon les types de plantes que vous souhaitez cultiver.</li>
            <li><strong>Préparation du fond</strong>: Commencez par une couche de pierres ou de graviers pour le drainage, puis ajoutez du charbon actif pour garder l'eau fraîche et sans odeur.</li>
            <li><strong>Ajout du substrat</strong>: Utilisez un terreau spécial pour terrariums ou un mélange léger adapté à vos plantes.</li>
            <li><strong>Plantation</strong>: Sélectionnez des plantes adaptées à l'environnement de votre terrarium. Plantez-les délicatement en prenant soin de leurs racines.</li>
            <li><strong>Décoration</strong>: Ajoutez des éléments décoratifs comme des pierres, des figurines, ou des écorces pour personnaliser votre terrarium.</li>
            <li><strong>Entretien</strong>: Arrosez modérément, selon les besoins de vos plantes, et placez le terrarium dans un endroit bien éclairé mais sans soleil direct.</li>
        </ul>

        <h2>Conseils supplémentaires pour un terrarium réussi</h2>
        <p>Choisir les bonnes plantes est crucial : privilégiez des espèces qui prospèrent dans des environnements humides et à faible luminosité. Les fougères, les mousses et certaines orchidées sont des choix idéaux.</p>

        <h3>Maintenance régulière</h3>
        <p>Inspectez votre terrarium régulièrement pour vous assurer qu'il n'y a pas de moisissure ou de surhumidité et ajustez l'arrosage en conséquence.</p>

        <h2>Pourquoi créer un terrarium ?</h2>
        <p>Les terrariums ne requièrent pas seulement peu d'entretien, ils sont aussi un moyen fantastique de purifier l'air et de rajouter un élément décoratif vivant à votre espace intérieur.</p>
    </article>
</div>
<br><br>
</body>

  		  <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire6.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments6.json';
            if (file_exists($comments_file)) {
                $comments_json = file_get_contents($comments_file);
                $comments = json_decode($comments_json, true);

                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        echo "<div class='comment'><p class='comment-author'>" . htmlspecialchars($comment['username']) . "</p><p>" . htmlspecialchars($comment['comment']) . "</p><p class='comment-date'>" . $comment['created_at'] . "</p></div>";
                    }
                } else {
                    echo "<p>Aucun commentaire pour le moment.</p>";
                }
            } else {
                echo "<p>Aucun commentaire pour le moment.</p>";
            }
            ?>
        </div>
        
    
    <section id="about">
        <h2>A propos de nous</h2>
        <p>Sur Kanimy Tuto, découvrez une multitude de conseils pour améliorer votre quotidien. Nos recettes, tutoriels et astuces sont là pour vous inspirer et enrichir votre vie. Participez et partagez vos propres expériences!</p>
    </section>
    <section id="contact">
        <h2>Nous contacter</h2>
        <p>Pour toute question ou suggestion, n'hésitez pas à nous écrire à KanimyTuto@gmail.com</p>
    </section>
    <footer class="center-align">
        &copy; 2024 Kanimy Tuto
    </footer>
</body>
</html>
