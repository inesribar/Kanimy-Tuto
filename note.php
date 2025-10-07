
<?php
// Récupération de la note soumise via le formulaire
if(isset($_POST['note']) && !empty($_POST['note'])) {
    $nouvelle_note = intval($_POST['note']);

    // Lecture du fichier texte
    $fichier = 'fichier.txt';
    $contenu = file($fichier);

    // Extraction des valeurs actuelles
    $total_note = intval($contenu[0]);
    $nb_note = intval($contenu[1]);

    // Mise à jour des valeurs
    $total_note += $nouvelle_note;
    $nb_note++;

    // Calcul de la moyenne
    $moyenne = $total_note / $nb_note;

    // Écriture des nouvelles valeurs dans le fichier
    $nouveau_contenu = $total_note . PHP_EOL . $nb_note;
    file_put_contents($fichier, $nouveau_contenu);

    // Affichage de la moyenne
    echo '<div>Note moyenne = ' . $moyenne . '</div>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de notation</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="note1">1</label>
        <input type="radio" id="note1" name="note" value="1">
        <label for="note2">2</label>
        <input type="radio" id="note2" name="note" value="2">
        <label for="note3">3</label>
        <input type="radio" id="note3" name="note" value="3">
        <label for="note4">4</label>
        <input type="radio" id="note4" name="note" value="4">
        <label for="note5">5</label>
        <input type="radio" id="note5" name="note" value="5">
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
