<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Créer une Application de Liste de Tâches avec Flutter</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
	<nav class="align-right"> 
		<a href="#signup" class="rounded-box">S'inscrire</a>
		<a href="#login" class="rounded-box">Se connecter</a>
	</nav></br>

	 <div class="search-container">
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un conseil" value="<?php echo isset($_GET['s']) ? htmlspecialchars($_GET['s']) : ''; ?>">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
	</div>
    </header>

        <?php
        if (isset($_GET['s']) && !empty(trim($_GET['s']))) {
            $jsonContent = file_get_contents('keywords.json');
            if ($jsonContent === false) {
                die("Erreur lors de la lecture du fichier JSON.");
            }

            $jsonData = json_decode($jsonContent, true);
            if ($jsonData === null && json_last_error() !== JSON_ERROR_NONE) {
                die("Erreur de décodage JSON : " . json_last_error_msg());
            }

            $recherche = strtolower(trim(htmlspecialchars($_GET['s'])));
            $recherche = str_replace(' ', '-', $recherche);

            if (array_key_exists($recherche, $jsonData)) {
                include($jsonData[$recherche]);
            } else {
                echo "<p>Aucun article correspondant à votre recherche n'a été trouvé.</p>";
            }
        } else {
            
        }
        ?>
<body>
		<header>
				<h1>Créer une Application de Liste de Tâches avec Flutter</h1>
				
		</header>
		
		      <h1>Recette de Smoothie pour le Bien-être</h1>
              <div class="center-content">

            <div class="catalogue_accueil img">
                    <img src="flutter.jpg" alt="Smoothie">
            </div>
        </div>
<br><br>

		<main>
				<section>
						<h2>Introduction</h2>
						<p>
								Dans ce tutoriel, nous allons apprendre à créer une application de liste de tâches simple en utilisant le framework Flutter. Cette application vous permettra d'ajouter, de supprimer et de marquer des tâches comme terminées ou non. Ce tutoriel est destiné aux débutants en Flutter.
						</p>
				</section>

				<section>
						<h2>Matériel requis</h2>
						<ul>
								<li>Un ordinateur avec Flutter installé et configuré.</li>
								<li>Un éditeur de code tel que Visual Studio Code ou Android Studio.</li>
								<li>Un émulateur Android ou un appareil Android connecté pour tester l'application.</li>
						</ul>
				</section>

				<section>
						<h2>Étape 1 : Configuration de l'Environnement Flutter</h2>
						<ol>
								<li>Installez Flutter en suivant les instructions sur le <a href="https://flutter.dev/docs/get-started/install" target="_blank">site officiel de Flutter</a>.</li>
								<li>Configurez votre éditeur de code pour qu'il reconnaisse Flutter et Dart.</li>
						</ol>
				</section>

				<section>
						<h2>Étape 2 : Création d'un Nouveau Projet Flutter</h2>
						<ol>
								<li>Ouvrez votre terminal et exécutez la commande <code>flutter create nom_de_votre_projet</code> pour créer un nouveau projet Flutter.</li>
								<li>Accédez au répertoire de votre projet et ouvrez-le dans votre éditeur de code.</li>
						</ol>
				</section>

				<section>
						<h2>Étape 3 : Conception de l'Interface Utilisateur</h2>
						<p>
								Définissez la structure de l'interface utilisateur de votre application en utilisant des widgets Flutter tels que <code>Scaffold</code>, <code>AppBar</code>, <code>ListView</code>, <code>TextField</code>, <code>Checkbox</code>, etc.
						</p>
						<p>
								Utilisez le langage de description d'interface utilisateur Flutter (Dart) pour définir la disposition et le style de vos widgets.
						</p>
				</section>

				<section>
						<h2>Étape 4 : Gestion de l'État de l'Application</h2>
						<ol>
								<li>Créez une classe de modèle pour représenter une tâche avec des propriétés telles que le nom de la tâche et son état (terminé ou non).</li>
								<li>Utilisez le gestionnaire d'état intégré de Flutter (par exemple, <code>setState</code>) pour mettre à jour l'interface utilisateur en réponse aux actions de l'utilisateur, telles que l'ajout ou la suppression d'une tâche.</li>
						</ol>
				</section>

				<section>
						<h2>Étape 5 : Tests et Déploiement</h2>
						<ol>
								<li>Testez votre application en exécutant l'émulateur Android ou en connectant un appareil Android.</li>
								<li>Utilisez des outils de débogage pour détecter et résoudre les éventuels problèmes.</li>
								<li>Une fois que votre application fonctionne correctement, vous pouvez la déployer sur le Google Play Store en suivant les instructions fournies par Flutter pour la publication d'applications.</li>
						</ol>
				</section>

				<section>
						<h2>Conclusion</h2>
						<p>
								Félicitations ! Vous avez maintenant créé une application de liste de tâches simple avec Flutter. Ce tutoriel vous a donné un aperçu de la création d'applications mobiles avec Flutter et vous a fourni les bases pour explorer davantage ce puissant framework de développement multiplateforme.
						</p>
				</section>
		</main>
		
		<div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire4.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments4.json';
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
		<p>Notre plateforme, Kanimy Tuto, est bien plus qu'une simple source d'informations. C'est un espace de partage où les utilisateurs peuvent non seulement découvrir une multitude de conseils pratiques dans divers domaines, mais aussi contribuer en partageant leurs propres astuces et connaissances. Que ce soit en proposant une nouvelle recette de smoothie, en partageant des conseils pour cultiver la gratitude ou en dévoilant une technique de bricolage ingénieuse, chaque utilisateur a l'opportunité d'enrichir la communauté par ses connaissances et son expérience. Venez découvrir, apprendre et partager sur Kanimy Tuto, où l'entraide et la créativité sont au cœur de notre philosophie.
		L'équipe fondatrice de Kanimy Tuto, Kanto A, Inès R et Myriam Saadi, vous souhaite la bienvenue !
		</p>
	</section>

	<section id="contact">
		<h2>Nous contacter</h2>
		<p>Vous souhaitez nous informer d'un problème sur la plateforme ? Contactez nous par mail au <a href="mailto:">KanimyTuto@gmail.com</a></p>
	</section>
</div>

	<footer class="center-align">
		&copy; 2024 Kanimy Tuto 
	</footer>

</body>
</html>
