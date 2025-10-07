<?php
// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fichier JSON où les commentaires seront stockés
$comments_file = 'comments.json';

// Lire les commentaires existants
if (file_exists($comments_file)) {
    $comments_json = file_get_contents($comments_file);
    $comments = json_decode($comments_json, true);
} else {
    $comments = [];
}

// Vérifier si les données du formulaire sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $comment_text = htmlspecialchars($_POST['comment']);
    $created_at = date('Y-m-d H:i:s');

    // Ajouter le nouveau commentaire au tableau des commentaires
    $comments[] = [
        'username' => $username,
        'comment' => $comment_text,
        'created_at' => $created_at
    ];

    // Sauvegarder les commentaires dans le fichier JSON
    file_put_contents($comments_file, json_encode($comments, JSON_PRETTY_PRINT));
}

// Rediriger vers la page précédente
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit();
?>
