<?php
require_once ('views/form_achat.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div>
        <p>
        <form method = "post">;
            <label>Entrez vos Informations Personnelles</label><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="text" name="infos" value="<?=$saisie?>"><br>
            <input type="password" name="num_carte" value="<?=$password?>"><br>
            <button type="submit" name="commander">Passer la Commande</button>
        </form>
        </p>
    </div>
</body>
</html>