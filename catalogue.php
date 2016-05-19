<?php
include('data/data.php');
//include ('views/catalogue.php');

?>

<!-- ----- -------- DISPLAY -------- ----- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/catalogue_css.css">
    <meta charset="UTF-8">
    <title>Catalogue</title>
</head>
<body>

    <!-- HEADER + PAGE TOP -->
    <div id="header">
        <?php require_once ('views/header.php'); ?>
    </div>
    <div id="top">
        <?php require_once ('views/page_top.php'); ?>
    </div>
    <div id="sections">
        <p>
            <a href="#sports">Section Sports</a>
            <a href="#jeunes">Section Jeunesse</a>
            <a href="#action">Section Action</a>
            <a href="#reflexion">Section Réflexion</a>
        </p>
    </div>
    <!--AFFICHAGE CATALOGUE -->

    <div id="catalogue">
        <?php
        //fonction d'appel d'images et infos
        function affiche_image($texte_alt, $image_path)
        {
            return '<img src="' . $image_path . '" alt="' . $texte_alt . '">';
        }

        echo '<h2 id="sports">SPORTS</h2>';
        //boucles d'appel de fonction
        foreach ($sports as $clef => $valeur) {
            echo '<p>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['nom'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['prix'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', affiche_image('photo', $valeur['img_path']), '</a><br>';
            echo '</p>';
        }

        echo '<h2 id="jeunes">JEUNESSE</h2>';
        foreach ($jeunesse as $clef => $valeur) {
            echo '<p>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['nom'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['prix'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', affiche_image('photo', $valeur['img_path']), '</a><br>';
            echo '</p>';
        }

        echo '<h2 id="action">ACTION</h2>';
        foreach ($action as $clef => $valeur) {
            echo '<p>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['nom'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['prix'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', affiche_image('photo', $valeur['img_path']), '</a><br>';
            echo '</p>';
        }

        echo '<h2 id="reflexion">RÉFLEXION</h2>';
        foreach ($reflexion as $clef => $valeur) {
            echo '<p>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['nom'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', $valeur['prix'], '</a><br>';
            echo '<a href="details_produits.php/?product='.$valeur['nom'].'">', affiche_image('photo', $valeur['img_path']), '</a><br>';
            echo '</p>';
        }
        ?>
    </div>

    <!-- PAGE BOTTOM + FOOTER -->
    <div id="bottom">
        <?php require_once ('views/page_bottom.php'); ?>
    </div>
    <div id="footer">
        <?php require_once ('views/footer.php'); ?>
    </div>
</body>
</html>