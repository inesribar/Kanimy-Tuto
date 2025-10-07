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
			<button type="submit" class="rounded-box">Rerchercher</button>
		</form>
	</div>
	</header>
<body>
	
    <div class="titre">
        <h1>Préparer la rentrée des classes</h1>
    </div>
   
        
        <header>
              <div class="center-content">
       <span>Publié le 29/05/2024 à 9h12 par Jades</span>
            <div class="catalogue_accueil img">
                    <img src="rentree.jpg" alt="Rentree">
            </div>
        </div>
        </header>
 

        <article class="article">
            <h1>Optimisez votre rentrée avec organisation et planification</h1>
            <p>La rentrée scolaire peut être une période stressante, mais une bonne préparation peut grandement faciliter la transition. De l'achat des fournitures à la planification de votre emploi du temps, chaque détail compte.</p>
                       <div class="center-content">
<br><br>
       <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Wap-mNSzQZs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
<br><br>

            <h2>Les essentiels de la rentrée</h2>
            <ul>
                <li><strong>Fournitures scolaires</strong>: Liste complète des fournitures nécessaires classée par matière.</li>
                <li><strong>Organisation du temps</strong>: Conseils pour gérer efficacement votre emploi du temps et vos loisirs.</li>
                <li><strong>Préparation mentale</strong>: Techniques pour aborder la rentrée avec sérénité et confiance.</li>
            </ul>

            <h2>Stratégies d'organisation</h2>
            <p>Utilisez des agendas et des applications de planification pour rester organisé tout au long de l'année scolaire. La clé est de commencer tôt et de maintenir une routine stable.</p>

            <h3>Planification de votre semaine</h3>
            <p>Définissez des objectifs hebdomadaires et assurez-vous de réserver du temps pour les révisions et les activités parascolaires.</p>

            <h2>Conseils pour les parents</h2>
            <p>Impliquez-vous dans la préparation de la rentrée de vos enfants en discutant de leurs attentes et en visitant l'école en avance.</p>
        </article>
    </div>
<br><br>

<div class="comment-section">
        <h1>Ajouter un commentaire</h1>
        <form action="Conseil2.php" method="POST"> <!-- Modifiez ici l'action -->
            <label for="username">Nom:</label>
            <input type="text" id="username" name="username" required>

            <label for="comment">Commentaire:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <button type="submit" name="submit">Soumettre</button>
        </form>

        <?php
        // Configuration de la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kanimy_tuto";

        // Créer la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("La connexion a échoué: " . $conn->connect_error);
        }

        if (isset($_POST['submit'])) {
            $user = $conn->real_escape_string($_POST['username']);
            $comment = $conn->real_escape_string($_POST['comment']);

            // Préparer la requête SQL pour éviter les injections SQL
            $stmt = $conn->prepare("INSERT INTO commentaires (username, comment) VALUES (?, ?)");
            $stmt->bind_param("ss", $user, $comment);

            // Exécuter la requête
            if ($stmt->execute()) {
                echo "<p>Commentaire ajouté avec succès!</p>";
            } else {
                echo "Erreur lors de l'ajout du commentaire: " . $stmt->error;
            }

            $stmt->close();
        }

        // Récupérer et afficher les commentaires
        $result = $conn->query("SELECT username, comment, created_at FROM commentaires ORDER BY created_at DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='comment'><strong>" . htmlspecialchars($row['username']) . "</strong> (" . $row['created_at'] . ") dit :<br>" . htmlspecialchars($row['comment']) . "</div>";
            }
        } else {
            echo "<p>Aucun commentaire pour le moment.</p>";
        }

        $conn->close();
        ?>
    </div>

</body>

</html>
