<?php
    include('data/data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/catalogue_css.css">
    <meta charset="UTF-8">
    <title>Détails Produits</title>
</head>
<body>

    <!-- HEADER + PPAGE TOP -->
    <div id="header">
        <?php require_once ('views/header.php'); ?>
    </div>
    <div id="top">
        <?php require_once ('views/page_top.php'); ?>
    </div>

    <h2>Détails de produit</h2>
    <?php

    // ---------- affiche image ------------------------
    function affiche_img($texte_alt, $image_path)
    {
        return '<img src="../' . $image_path . '" alt="' . $texte_alt . '">';
    }

    if (isset($_GET['product'])) {
        $produit = $_GET['product'];
    }else{
        $produit = '';
    }

    $product_found = false;

    foreach ($sports as $clef => $valeur) {
        if ($valeur['nom'] == $produit) {
            echo '<p>';
            echo $valeur['nom'], '<br>';
            echo $valeur['prix'], '<br>';
            echo affiche_img('photo', $valeur['img_path']), '<br>';
            echo '</p>';
            $product_found = true;
            break;
        }
    }
    if($product_found == false){
        foreach ($jeunesse as $clef => $valeur) {
            if ($valeur['nom'] == $produit) {
                echo '<p>';
                echo $valeur['nom'], '<br>';
                echo $valeur['prix'], '<br>';
                echo affiche_img('photo', $valeur['img_path']), '<br>';
                echo '</p>';
                $product_found = true;
                break;
            }
        };
    }

    if($product_found == false) {
        foreach ($action as $clef => $valeur) {
            if ($valeur['nom'] == $produit) {
                echo '<p>';
                echo $valeur['nom'], '<br>';
                echo $valeur['prix'], '<br>';
                echo affiche_img('photo', $valeur['img_path']), '<br>';
                echo '</p>';
                $product_found = true;
                break;
            }
        };
    }

    if($product_found == false) {
        foreach ($reflexion as $clef => $valeur) {
            if ($valeur['nom'] == $produit) {
                echo '<p>';
                echo $valeur['nom'], '<br>';
                echo $valeur['prix'], '<br>';
                echo affiche_img('photo', $valeur['img_path']), '<br>';
                echo '</p>';
                $product_found = true;
                break;
            }
        };
    }
    ?>
    <div>
    <p>
        Suspendisse ex tortor, fringilla vitae ullamcorper sed, tempus a odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris interdum nulla sed laoreet rhoncus. Maecenas odio velit, ornare quis auctor eu, ullamcorper eu neque. Vestibulum porttitor luctus sem a maximus. Vestibulum mollis leo ac turpis fermentum, a mollis orci ornare. Nulla nisi orci, iaculis non velit a, volutpat aliquam quam. Maecenas a orci vel lacus vestibulum maximus. Vivamus venenatis commodo diam, ac facilisis velit viverra.
    </p>

    <p id="commande">

        <?php
            $nom_jeu = $_SERVER['QUERY_STRING'];
            //echo $nom_jeu;
        ?>

        <a href="http://localhost/p62_exercices/tp_test/commande.php/?<?=$nom_jeu?>">Commander le jeu!!!</a><br>
        <a href="http://localhost/p62_exercices/tp_test/catalogue.php">Retour au catalogue</a>
    </p>
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