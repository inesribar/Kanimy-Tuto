<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tutoriel DIY - Comment Fabriquer une Étagère Murale Flottante en Bois</title>
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
				<h1>Tutoriel DIY - Comment Fabriquer une Étagère Murale Flottante en Bois</h1>
              <div class="center-content">
       <span>Publié le 29/05/2024 à 9h par elise</span>
            <div class="catalogue_accueil img">
                    <img src="Etagères.jpg" alt="Etagères">
            </div>
        </div>

		</header>

		<main>
				<section>

						<p>
								Dans ce tutoriel, nous allons apprendre à fabriquer une étagère murale flottante en bois. Cette étagère élégante et fonctionnelle est parfaite pour afficher des livres, des cadres photo ou d'autres décorations dans n'importe quelle pièce de votre maison. Ce projet de bricolage est adapté aux débutants et ne nécessite que des compétences de base en menuiserie.
						</p>
				</section>

				<section>
						<h2>Matériel requis</h2>
						<ul>
								<li>Planche de bois (dimensions selon la taille de votre étagère souhaitée)</li>
								<li>Equerre métallique</li>
								<li>Vis à bois</li>
								<li>Perceuse électrique</li>
								<li>Niveau à bulle</li>
								<li>Crayon</li>
								<li>Ruban à mesurer</li>
								<li>Papier de verre</li>
								<li>Teinture ou peinture (facultatif)</li>
								<li>Pinceau ou chiffon (pour appliquer la teinture ou la peinture)</li>
						</ul>
			<div class="center-content">
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iX1MYaAFoQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>


				</section>

				<section>
						<h2>Étape 1 : Préparation du Matériel</h2>
						<ol>
								<li>Mesurez et marquez les dimensions souhaitées pour votre étagère sur la planche de bois à l'aide d'un ruban à mesurer et d'un crayon.</li>
								<li>Utilisez une scie pour couper la planche de bois aux dimensions désirées.</li>
								<li>Utilisez du papier de verre pour lisser les bords et la surface de la planche de bois.</li>
						</ol>
				
				
				</section>

				<section>
						<h2>Étape 2 : Fixation de l’Équerre Métallique</h2>
						<ol>
								<li>Placez l'équerre métallique à l'arrière de la planche de bois, alignée avec le bord inférieur de celle-ci.</li>
								<li>Utilisez un niveau à bulle pour vous assurer que l'équerre est parfaitement droite.</li>
								<li>Marquez les emplacements des trous de vis de l'équerre sur la planche de bois.</li>
								<li>Percez des trous pilotes à chaque marque à l'aide d'une perceuse électrique.</li>
						</ol>
			
				</section>

				<section>
						<h2>Étape 3 : Fixation de l’Étagère au Mur</h2>
						<ol>
								<li>Placez la planche de bois sur le mur à l'endroit où vous souhaitez installer l'étagère.</li>
								<li>Utilisez un niveau à bulle pour vous assurer que la planche est parfaitement horizontale.</li>
								<li>Marquez les emplacements des trous de vis sur le mur à travers les trous de l'équerre.</li>
								<li>Percez des trous dans le mur aux emplacements marqués.</li>
						</ol>
					
				</section>

				<section>
						<h2>Étape 4 : Fixation de l’Étagère au Mur </h2>
						<ol>
								<li>Placez la planche de bois contre le mur et fixez-la en vissant les vis à bois à travers les trous de l'équerre et dans le mur à l'aide d'une perceuse électrique.</li>
								<li>Assurez-vous que l'étagère est solidement fixée au mur et qu'elle est bien droite.</li>
						</ol>

			
								Votre navigateur ne supporte pas la balise vidéo.
						</video>
				</section>

				<section>
						<h2>Étape 5 : Finition </h2>
						<ol>
								<li>Si vous le souhaitez, vous pouvez appliquer une teinture ou une peinture à la planche de bois pour lui donner un aspect personnalisé.</li>
								<li>Laissez sécher la teinture ou la peinture selon les instructions du fabricant avant d'utiliser l'étagère.</li>
						</ol>
					
				</section>

				<section>
						<h2>Félicitations  </h2>
						<p>
							Vous avez maintenant fabriqué votre propre étagère murale flottante en bois. Cette étagère ajoutera une touche de style et d'utilité à n'importe quelle pièce de votre maison, et vous pouvez être fier(e) de l'avoir réalisée vous-même grâce à ce tutoriel de bricolage.
						</p>
				</section>
		</main>
		  <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire5.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments5.json';
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
