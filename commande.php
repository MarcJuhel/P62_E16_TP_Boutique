<?php

//var_dump($_SERVER['REQUEST_METHOD']);

/*Validation des données (seulement si on est en POST) */
//var_dump($_POST);
$receiving = ('POST' === $_SERVER['REQUEST_METHOD']); // On est en réception des données de formulaire

include('data/data.php');

//$num_carte = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/catalogue_css.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <!-- HEADER + PPAGE TOP -->
    <div id="header">
        <?php require_once ('views/header.php'); ?>
    </div>
    <div id="top">
        <?php require_once ('views/page_top.php'); ?>
    </div>
    <!-- Formulaire -->
    <div>
        <p>
            <!-- METTRE DE L'ORDRE DANS LE FORMULAIRE (CSS) -->
            <form id="commande" action="" method="post">
            <label id="infos_perso">Entrez vos informations personnelles</label><br>
                Nom:<input type="text" name="nom" value=""><br>
                Prénom:<input type="text" name="prenom" value=""><br>
                Adresse:<input type="text" name="adresse" value=""><br>
                Code Postal:<input type="text" name="code_post" value=""><br>
                Province<input type="text" name="province" value=""><br>
                Pays:<input type="text" name="pays" value=""><br>
                Numéro de Carte de Crédit<input type="password" name="num_carte" value=""><br>
                <button type="submit" name="commander">Passer la Commande</button>
            </form>
        <p>
            <a href="http://localhost/p62_exercices/tp_test/catalogue.php">Retour au catalogue</a>
        </p>

        <!-- Affiche Jeu Sélectionné -->
        <p id="produit_commande">
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

            //echo $produit;

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
        </p>
    </div>
    <div id="bottom">
        <?php require_once ('views/page_bottom.php'); ?>
    </div>
    <div id="footer">
        <?php require_once ('views/footer.php'); ?>
    </div>
</body>
</html>