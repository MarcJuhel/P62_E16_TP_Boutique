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
    <link rel="stylesheet" href="../style/catalogue_css.css">
    <meta charset="UTF-8">
    <title>Commande</title>
</head>
<body>

    <!-- HEADER + PAGE TOP -->
    <div id="header">
        <?php require_once ('views/header.php'); ?>
    </div>
    <div id="top">
        <?php require_once ('views/page_top.php'); ?>
    </div>

    <!-- Formulaire -->
    <div id="form_global">
        <h3>Entrez vos informations personnelles (tous les champs sont obligatoires)</h3>

        <div id="formulaire_commande">
        <p>
            <!-- METTRE DE L'ORDRE DANS LE FORMULAIRE (CSS) -->
            <form id="commande" action="" method="post">
            <label for="nom">Nom: </label><br>
                <input type="text" name="nom" id="nom" required value="">*<br>
            <label for="prenom">Prénom: </label><br>
                <input type="text" name="prenom" id="prenom" required value="">*<br>
            <label for="adresse">Adresse</label><br>
                <input type="text" name="adresse" id="adresse" required value="">*<br>
            <label for="code_post">Code Postal</label><br>
                <input type="text" name="code_post" id="code_post" required value="">*<br>
            <label for="province">Province</label><br>
                <input type="text" name="province" id="province" required value="">*<br>
            <label for="pays">Pays</label><br>
                <input type="text" name="pays" id="pays" required value="">*<br>
            <label for="num_carte">Numéro de carte de crédit</label><br>
                <input type="password" name="num_carte" id="num_carte" required value="">*<br><br>
                <button type="submit" name="commander">Passer la Commande</button>
            </form>
        <p>
            <a href="http://localhost/p62_exercices/tp_test/catalogue.php">Retour au catalogue</a>
        </p>
    </div>

    <div id="produit_commande">
        <p>
            <!-- Affiche Jeu Sélectionné -->
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
    </div>
    <div id="bottom">
        <?php require_once ('views/page_bottom.php'); ?>
    </div>
    <div id="footer">
        <?php require_once ('views/footer.php'); ?>
    </div>
</body>
</html>