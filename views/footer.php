<?php
/**
 * Ce fichier s'occupe de la partie footer des pages du site
 */
// Appel des données de menu
require_once ('data/menu_data.php');

?>

<div id="footer">
    <h3>Pied de page</h3>
    <ul>
        <?php
		echo '<a href="http://instagram.com/ebcanada?ref=badge"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram"></a>';
		echo '<a href="https://www.facebook.com/ebgames.gamestop"><img src="../projet_avec_menu/facebook.png" alt="facebook"></a>';
		echo '<a href=""><img src="../projet_avec_menu/print.png" alt="printer"></a>';
		echo '<a href=""><img src="../projet_avec_menu/Email-icon.png" alt="Email"></a>';
		echo '<a href=""><img src="../projet_avec_menu/tweet.png" alt="Email"></a>';
		echo '<a href=""><img src="../projet_avec_menu/addthis.png" alt="Email"></a>';
		echo '<a href=""><img src="../projet_avec_menu/expand.png" alt="Email"></a>';
        ?>
    </ul>
</div>
<!-- AddThis Button BEGIN -->
