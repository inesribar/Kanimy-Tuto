<?php
session_start();
include 'basedonnees_connection.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}

// Récupérer l'ID de l'utilisateur connecté
$user_id = $_SESSION['user_id'];

// Requête pour récupérer les conseils de l'utilisateur
$stmt_user = $conn->prepare("SELECT titre, contenu, date_submis FROM conseils WHERE user_id = ? ORDER BY date_submis DESC");
if (!$stmt_user) {
    die("Erreur de préparation de la requête: " . $conn->error);
}
$stmt_user->bind_param("i", $user_id);
$stmt_user->execute();
$result_user = $stmt_user->get_result();

// Requête pour récupérer tous les conseils du site
$stmt_all = $conn->prepare("SELECT titre, contenu, date_submis FROM conseils ORDER BY date_submis DESC");
if (!$stmt_all) {
    die("Erreur de préparation de la requête: " . $conn->error);
}
$stmt_all->execute();
$result_all = $stmt_all->get_result();

// Traiter les résultats et afficher les conseils




// Fermer les requêtes et la connexion à la base de données
$stmt_user->close();
$stmt_all->close();
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="3.2" content="width=device-width">
	<title>page de conseils</title>
	<link href="style.css" rel="stylesheet" type="text/css" />




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
	

	<div class="titre">
 <h1>Page de conseils</h1>
	</div>

	

 <?php 
while ($row_all = $result_all->fetch_assoc()) {
    // Afficher tous les conseils soumis sur le site ?>
    <div class="catalogue_accueil">
    <?php echo "<h3>" . htmlspecialchars($row_all['titre']) . "</h3>";
    echo "<p>" . htmlspecialchars($row_all['contenu']) . "</p>";
    echo "<p>Date de soumission: " . $row_all['date_submis'] . "</p>";?>

    <button>Lire la suite</button>
    </div><br><br>
<?php } ?>

	

	<div class="catalogue_accueil">
	<img src="rentree.jpg" >
 <h4>Bien préparer sa rentrée</h4> 
		<p>Comment préprer sa rentrée dans les meilleurs conditions on vous montre dans cette article</p>
<a href="Conseil2.php">
	<button>Lire la suite</button>
</a>
		
	 </div>
	 <br><br>
	<div class="catalogue_accueil">
		<img src="cheveux.jpg">
		<h4>Pousse de cheveux</h4>
		<p>Comment faire pousser les cheveux le plus rapidement grace aux huiles essentielles</p>
		<a href="Conseil1.php">
			<button>Lire la suite</button>
		</a>


		 </div>

<br><br>
		<div class="catalogue_accueil">
				<img src="Smoothie.jpg" >
			<h4>Recette de Smoothie aux Fruits Frais en 5 étapes</h4> 
			<i>Cuisine, Recette, Santé</i> 
				<p>Besoin d'un coup de fraîcheur pour démarrer votre journée en beauté ou pour vous désaltérer lors des journées chaudes ? Les smoothies aux fruits sont là pour vous ! Dans ce tutoriel, je vous dévoile une recette simple, gorgée de saveurs et de vitamines, pour concocter le smoothie aux fruits frais parfait.</p>
		<a href="Conseil6.php">
				<button>Lire la suite</button>
		</a>
		</div>
<br><br>
		<div class="catalogue_accueil">
				<img src="Gratitude.png" >
			<h4>Cultivez la gratitude au quotidien</h4> 
			<i>Bien-être, Santé</i> 
				<p>Découvrez comment cultiver un esprit positif et un bien-être général grâce à la pratique de la gratitude. En prenant simplement le temps de reconnaître et d'apprécier les éléments positifs de votre vie, vous ouvrirez la porte à une plus grande satisfaction et à un bonheur durable.</p>   		
		<a href="Conseil7.php">
				<button>Lire la suite</button>
		</a>
		</div>
	<br><br>
		<div class="catalogue_accueil">
				<img src="Terrarium.jpg" >
			<h4>Comment créer un terrarium en 6 étapes simples</h4> 
			<i>Jardinage, Bien-être</i> 
				<p>Envie d'apporter une touche de nature à votre intérieur tout en créant un petit écosystème enchanteur ? Les terrariums sont la solution parfaite ! Dans ce tutoriel, je vous dévoile comment créer votre propre oasis de verdure en verre. Suivez-moi dans cette aventure verdoyante !</p>   		  
		<a href="Conseil6.php">
				<button>Lire la suite</button>
		</a>
		</div> 
		<br><br>
		<div class="catalogue_accueil">
				<img src="Illustration_Numérique.jpg" >
			<h4>Créer une Illustration Numérique de Paysage en 5 Étapes</h4> 
			<i>Art, Numérique</i> 
				<p>Dans ce tutoriel, nous allons apprendre à créer une illustration numérique de paysage en utilisant le logiciel de dessin numérique Adobe Photoshop. Ce tutoriel est adapté aux débutants et aux personnes ayant une expérience limitée en illustration numérique.</p>   		  
		<a href="Conseil3.php">
				<button>Lire la suite</button>
		</a>
		</div> 

<br><br>
		<div class="catalogue_accueil">
				<img src="Etagères.jpg" >
			<h4>Comment Fabriquer une Étagère Murale Flottante en Bois</h4> 
			<i>Bricolage, Art</i> 
				<p>Dans ce tutoriel, nous allons vous guider pas à pas dans la création d'une étagère murale flottante en bois. Conçue pour être à la fois élégante et pratique, cette étagère est parfaite pour exposer vos livres, cadres photo et autres décorations. Même si vous êtes débutant en bricolage, vous pouvez facilement réaliser ce projet avec des compétences de base en menuiserie.</p>   		  
		<a href="Conseil5.php">
				<button>Lire la suite</button>
		</a>
		</div> 
		<br> <br>
	</section>
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
