<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kanimy Tuto</title>
	<!-- Lien vers la feuille de style externe -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Préconnexion aux polices Google pour une meilleure performance -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- Inclure la police Google Montserrat -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
	<!-- Section d'en-tête contenant la barre de navigation et le titre -->
	<header class="navbar">
		<img src="title.png" class="logo" width="150px" height="100px">
	
	<!-- Menu de navigation principal -->
	<nav>
		<ul>
			<li><a href="KanimyTuto_accueil.php">Accueil</a></li>
			<li><a href="#about">À propos de nous</a></li>
			<li><a href="#contact">Nous contacter</a></li>
			<li><a href="Page_conseil.php">Liste de conseils</a></li>
		</ul>
	</nav>

	<!-- Menu de navigation secondaire pour les actions utilisateur -->
	<nav class="align-right"> 
		<a href="KanimyTuto_inscription.php" class="rounded-box">S'inscrire</a>
		<a href="KanimyTuto_connection.php" class="rounded-box">Se connecter</a>
	</nav></br>

	<!-- Formulaire de recherche -->
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

<!-- Contenu principal -->
<div class="content">
	<section id="home">
		<h2 class="styled-heading">Accueil</h2>
		
		<!-- Texte de bienvenue -->
		<div class="welcome-text">
			<h2>Bienvenue sur Kanimy Tuto !</h2>
			<p>
				Nous sommes ravis de vous accueillir sur notre site dédié aux conseils. Ici, vous trouverez une multitude de conseils, astuces et tutoriels pour prendre soin de vous et améliorer votre quotidien. Que vous cherchiez des solutions pour faire pousser vos cheveux, des astuces de beauté naturelle ou des guides pour une vie plus saine, vous êtes au bon endroit.
			</p>
			<p>
				Explorez nos articles, regardez nos vidéos et n'hésitez pas à nous contacter si vous avez des questions ou des suggestions. Inscrivez-vous pour recevoir nos dernières mises à jour et rejoignez notre communauté pour partager vos expériences et découvrir encore plus de conseils exclusifs.
			</p>
			<p>
				Nous vous souhaitons une agréable visite et espérons que vous trouverez tout ce dont vous avez besoin pour vous sentir bien dans votre peau. Bienvenue chez Kanimy Tuto !
			</p>
		</div>
		
		<br><br>
		<h3 class="styled-heading">Astuces tendances du moment</h3>

		<br><br>
		<!-- Catalogue des conseils tendances du moment -->
		<div class="catalogue_accueil">
  			<img src="Smoothie.jpg" alt="Image de Smoothie">
			<h4>Recette de Smoothie aux Fruits Frais en 5 étapes</h4> 
			<i>Cuisine, Recette, Santé</i> 
    		<p>Besoin d'un coup de fraîcheur pour démarrer votre journée en beauté ou pour vous désaltérer lors des journées chaudes ? Les smoothies aux fruits sont là pour vous ! Dans ce tutoriel, je vous dévoile une recette simple, gorgée de saveurs et de vitamines, pour concocter le smoothie aux fruits frais parfait.</p>
			<a href="Conseil6.php">
  				<button>Lire la suite</button>
			</a>
		</div>
		<br><br>
		<div class="catalogue_accueil">
  			<img src="Gratitude.png" alt="Image de gratitude">
			<h4>Cultivez la gratitude au quotidien</h4> 
			<i>Bien-être, Santé</i> 
    		<p>Découvrez comment cultiver un esprit positif et un bien-être général grâce à la pratique de la gratitude. En prenant simplement le temps de reconnaître et d'apprécier les éléments positifs de votre vie, vous ouvrirez la porte à une plus grande satisfaction et à un bonheur durable.</p>   		
			<a href="Conseil7.php">
  				<button>Lire la suite</button>
  			</a>
  		</div>
	</section>
	<br> <br>
  			
  	<!-- Section "À propos de nous" -->
	<section id="about">
		<h2 class="styled-heading">À propos de nous</h2>
		<p>Notre plateforme, Kanimy Tuto, est bien plus qu'une simple source d'informations. C'est un espace de partage où les utilisateurs peuvent non seulement découvrir une multitude de conseils pratiques dans divers domaines, mais aussi contribuer en partageant leurs propres astuces et connaissances. Que ce soit en proposant une nouvelle recette de smoothie, en partageant des conseils pour cultiver la gratitude ou en dévoilant une technique de bricolage ingénieuse, chaque utilisateur a l'opportunité d'enrichir la communauté par ses connaissances et son expérience. Venez découvrir, apprendre et partager sur Kanimy Tuto, où l'entraide et la créativité sont au cœur de notre philosophie.
		L'équipe fondatrice de Kanimy Tuto, Kanto A, Inès R et Myriam Saadi, vous souhaite la bienvenue !
		</p>
	</section>

	<!-- Section "Nous contacter" -->
	<section id="contact">
		<h2 class="styled-heading">Nous contacter</h2>
		<p>Vous souhaitez nous informer d'un problème sur la plateforme ? Contactez-nous par mail à <a href="mailto:KanimyTuto@gmail.com">KanimyTuto@gmail.com</a></p>
	</section>
</div>

<!-- Pied de page -->
<footer class="center-align">
	&copy; 2024 Kanimy Tuto 
</footer>

</body>
</html>
