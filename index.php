<?php
// Un mini menu

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Site petit projet</title>
</head>
<body>
    <?php include ('views/header.php'); ?>
    <div id="principal">
        <h2><?= TP_ACCUEIL ?></h2>
    <div>
        <?php
        require_once ('views/login_formulaire.php');
        ?>
        <?php
        require_once ('views/catalogue.php');
        ?>
    </div>
    </div>
    <?php include ('views/footer.php'); ?>
</body>
</html>