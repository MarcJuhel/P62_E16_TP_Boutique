<?php
/**
 * Ce fichier s'occupe de la partie footer des pages du site
 */
// Appel des données de menu
include ('data/menu_data.php');

?>

<div id="footer">
    <h3>Pied de page</h3>
    <ul>
        <?php

		echo '<a href="http://instagram.com/ebcanada?ref=badge"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram"></a>';
		echo '<a href="https://www.facebook.com/ebgames.gamestop"><img src="images/facebook.png" alt="facebook"></a>';
		echo '<a href="#"onclick="javascript:window.print()"><img src = "images/print.png" alt="printer"></a>';
		echo '<a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=AddThis+Email+Sharing+Service&body=http://www.addthis.com/academy/addthis-email-sharing-service/%23.VzNvYK8S0yM.gmail&ui=2&tf=1"><img src="	images/Email-icon.png" alt="Email"></a>';
		echo '<a href=""><img src="	images/tweet.png" alt="Email"></a>';
		echo '<a href=""><img src="	images/addthis.png" alt="Email"></a>';
		echo '<a href=""><img src="	images/expand.png" alt="Email"></a>';
        echo '<img src="images/cartecredit.png" alt="cartecredit">';
        ?>
    </ul>
</div>

