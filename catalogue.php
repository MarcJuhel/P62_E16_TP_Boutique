<?php
require_once('data/data.php');
?>
<?php require_once ('views/page_top.php'); ?>
<div id="main">
    <!--Code html spécifique -->
    <?php /*Affichage du catalogue*/ ?>
    <ul>
        <?php foreach ($data as $id => $item) { ?>
            <li>
                <div>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?> Fifa 2016 est un jeu de soccer très populaire pour les amateurs de sport </span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<?php require_once ('views/page_bottom.php'); ?>

