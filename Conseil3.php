<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Créer une Illustration Numérique de Paysage en 5 Étapes</title>
		<link rel="stylesheet" href="style.css">
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
			<button type="submit" class="rounded-box">Rerchercher</button>
		</form>
	</div>
	</header>

<body>
		<article>
				<header>
						<h1>Créer une Illustration Numérique de Paysage en 5 Étapes</h1>
						
				</header>
				       <header>
              <div class="center-content">
       <span>Publié le 29/05/2024 à 9h12 par Jades</span>
            <div class="catalogue_accueil img">
                    <img src="Illustration_Numérique.jpg" alt="illustration">
            </div>
        </div>
        </header>

	
				<section>
						<h2>Introduction</h2>
						<p>Dans ce tutoriel, nous allons apprendre à créer une illustration numérique de paysage en utilisant le logiciel de dessin numérique Adobe Photoshop. Ce tutoriel est adapté aux débutants et aux personnes ayant une expérience limitée en illustration numérique.</p>
				</section>
				<section>
						<h2>Matériel requis</h2>
						<ul>
								<li>Un ordinateur avec Adobe Photoshop installé.</li>
								<li>Une tablette graphique (facultative, mais recommandée pour une expérience plus fluide).</li>
						</ul>
				</section>
				<section>
						<h2>Étape 1 : Planification du Paysage</h2>
						<p>Ouvrez Adobe Photoshop sur votre ordinateur.</p>
						<p>Créez un nouveau document en allant dans Fichier > Nouveau. Choisissez les dimensions de votre toile en fonction de la taille finale souhaitée pour votre illustration.</p>
						<p>Déterminez le type de paysage que vous souhaitez créer : montagnes, forêts, océan, etc.</p>
				</section>
				<section>
						<h2>Étape 2 : Esquisse</h2>
						<p>Créez un nouveau calque dans votre document.</p>
						<p>Utilisez l'outil Pinceau (B) avec une opacité réduite pour esquisser grossièrement les éléments principaux de votre paysage.</p>
						<p>Concentrez-vous sur les formes et les proportions générales, sans vous soucier des détails.</p>
				</section>
				<section>
						<h2>Étape 3 : Définition des Éléments</h2>
						<p>Créez des calques distincts pour chaque élément de votre paysage (ciel, montagnes, arbres, etc.).</p>
						<p>Utilisez des brosses de différentes tailles et opacités pour définir les contours et les détails de chaque élément.</p>
						<p>Ajoutez des nuances de couleur pour donner de la profondeur à votre illustration.</p>
				</section>
				<section>
						<h2>Étape 4 : Coloration</h2>
						<p>Créez un nouveau calque en dessous de vos calques d'esquisse et de détail.</p>
						<p>Utilisez l'outil Pot de peinture (G) pour remplir les zones principales de votre paysage avec des couleurs de base.</p>
						<p>Utilisez des calques de réglage (comme Teinte/Saturation ou Courbes) pour ajuster les couleurs et les contrastes selon vos préférences.</p>
				</section>
				<section>
						<h2>Étape 5 : Finitions et Détails</h2>
						<p>Ajoutez des détails supplémentaires tels que des reflets, des ombres et des textures pour rendre votre paysage plus réaliste.</p>
						<p>Utilisez des calques de surbrillance et d'ombre pour accentuer les zones de lumière et de contraste.</p>
						<p>Prenez le temps de peaufiner les détails jusqu'à ce que vous soyez satisfait du résultat final.</p>
				</section>
				
				
				<footer>
						<p>Félicitations ! Vous avez maintenant créé une illustration numérique de paysage en suivant ce tutoriel. N'hésitez pas à expérimenter avec différentes techniques et styles pour développer davantage vos compétences en illustration numérique.</p>
				</footer>
			
		</article>
		
		
		  <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire3.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments3.json';
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
