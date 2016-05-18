<?php
/**
 * Ce fichier s'occupe de la partie header des pages du site
 */
// Appel des données de menu
include ('data/menu_data.php');
?>

<div id ="recherche">

<input type="text" name="q" class="quickSearchInput ui-autocomplete-input" data-autocomplete-source="/QuickSearch/LoadAutocomplete"<p> Rechercher sur le site !</p>

</div>

<div id="header">


    <?php
    echo '<img src="images/header_fond.png" alt="fond" class="fond">';echo '<img src="images/gamesRus.jpeg" alt="gamesRus" class="logo">';
    echo '<h4 class="cartEmpty">Mon Panier</h4>';
    echo '<a href="" class="navLogin">Login</a>';
    echo '<a href="views/signup.php" class="navRegister">Inscrivez-vous</a>';
    echo '<a href="/AccountManagement/UserOrderMenu" class="navOrders">Mes commandes</a>'
    ?>

</div>




