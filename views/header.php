<?php
/**
 * Ce fichier s'occupe de la partie header des pages du site
 */
// Appel des données de menu
require_once ('../data/data.php');

?>

<div id="header">
    <ul>
        <?php
        // Afficher le menu avec un foreach
        foreach ($menu_items as $libelle => $url) {
            echo "<li><a href='$url'>$libelle</a></li>";
        }
        ?>
    </ul>
</div>

