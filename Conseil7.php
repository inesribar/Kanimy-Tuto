<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultivez la gratitude au quotidien</title>
    <link rel="stylesheet" type="text/css" href="KanimyTuto_accueil.css">
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
            <input type="search" name="s" placeholder="Rechercher un conseil">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
    </div>
</header>
<body>
   
    		<header>
				<h1>Cultiver la gratitude</h1>
              <div class="center-content">
       <span>Publié le 29/05/2024 à 9h par jean</span>
            <div class="catalogue_accueil img">
                    <img src="Gratitude.png" alt="gratitude">
            </div>
        </div>

    <main>
        <section>
            <h2>Bien-être, Santé</h2>
            <p>
                Découvrez comment cultiver un esprit positif et un bien-être général grâce à la pratique de la gratitude. En prenant simplement le temps de reconnaître et d'apprécier les éléments positifs de votre vie, vous ouvrirez la porte à une plus grande satisfaction et à un bonheur durable.
            </p>
        </section>
        <section>
            <h2>Pourquoi la gratitude est-elle importante ?</h2>
            <p>
                La gratitude ne se limite pas à dire merci. C'est une approche profonde de la vie qui encourage la reconnaissance active des bonnes choses qui nous arrivent, qu'elles soient grandes ou petites. Des études montrent que tenir un journal de gratitude peut augmenter votre bonheur de 10% !
            </p>
        </section>
        <section>
            <h2>Comment pratiquer la gratitude au quotidien ?</h2>
            	
                     <div class="center-content">
           <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/l6n7uxhNFew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

        </div>
        <br><br>

            <ul>
                <li>Commencez chaque journée en notant trois choses pour lesquelles vous êtes reconnaissant.</li>
                <li>Réfléchissez à votre journée chaque soir et reconnaissez un bon moment ou une personne qui a fait une différence.</li>
                <li>Exprimez ouvertement votre gratitude aux autres, que ce soit par un simple merci, une note, ou un geste gentil.</li>
                <li>Utilisez des rappels visuels qui encouragent la gratitude, comme des citations inspirantes ou des images autour de votre espace de vie ou de travail.</li>
            </ul>
        </section>
    </main>
    <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire7.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <!-- Les commentaires seront insérés ici par PHP -->
        </div>
    </div>
    <section id="about">
        <h2>A propos de nous</h2>
        <p>Sur Kanimy Tuto, nous nous engageons à offrir des ressources qui inspirent et enrichissent votre quotidien. Découvrez des conseils pratiques pour une vie plus heureuse et plus équilibrée.</p>
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
