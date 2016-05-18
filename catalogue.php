<?php
include('data/data.php');
//include ('views/catalogue.php');

?>

<!-- ----- -------- DISPLAY -------- ----- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">

    <meta charset="UTF-8">
    <title>Catalogue</title>
</head>
<body>
    <div id="header">
        <?php require_once ('views/header.php'); ?>
    </div>

    <div id="catalogue">
        <!--affichage catalogue -->
        <?php
        //fonction d'appel d'images et infos
        function affiche_image($texte_alt, $image_path)
        {
            return '<img src="' . $image_path . '" alt="' . $texte_alt . '">';
        }

        echo '<h2>SPORTS</h2>';
        //boucles d'appel de fonction
        foreach ($sports as $clef => $valeur) {
            echo '<p>';
            echo '<a href="/">', $valeur['nom'], '</a><br>';
            echo '<a href="/">','$', $valeur['prix'], '</a><br>';
            echo '<a href="/">', affiche_image('photo', $valeur['img_path']), '</a><br>'; // Revenir là-dessus
            echo '</p>';
        }

        echo '<h2>JEUNESSE</h2>';
        foreach ($jeunesse as $clef => $valeur) {
            echo '<p>';
            echo '<a href="/">', $valeur['nom'], '</a><br>';
            echo '<a href="/">','$', $valeur['prix'], '</a><br>';
            echo '<a href="/">', affiche_image('photo', $valeur['img_path']), '</a><br>'; // Revenir là-dessus
            echo '</p>';
        }

        echo '<h2>ACTION</h2>';
        foreach ($action as $clef => $valeur) {
            echo '<p>';
            echo '<a href="/">', $valeur['nom'], '</a><br>';
            echo '<a href="/">','$', $valeur['prix'], '</a><br>';
            echo '<a href="/">', affiche_image('photo', $valeur['img_path']), '</a><br>'; // Revenir là-dessus
            echo '</p>';
        }

        echo '<h2>RÉFLEXION</h2>';
        foreach ($reflexion as $clef => $valeur) {
            echo '<p>';
            echo '<a href="/">', $valeur['nom'], '</a><br>';
            echo '<a href="/">','$', $valeur['prix'], '</a><br>';
            echo '<a href="/">', affiche_image('photo', $valeur['img_path']), '</a><br>'; // Revenir là-dessus
            echo '</p>';
        }
        ?>
    </div>

    <div id="footer">
        <?php require_once ('views/footer.php'); ?>
    </div>
</body>
</html>