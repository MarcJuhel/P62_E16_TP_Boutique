<?php
//var_dump($_SERVER['REQUEST_METHOD']);
/*Validation des données (seulement si on est en POST) */
//var_dump($_POST);
$receiving = ('POST' === $_SERVER['REQUEST_METHOD']); // On est en réception des données de formulaire
// Le champ text nom
$nom = ""; // Contenu du champ nom
$nom_valide = true; // Le champ est valide par défaut
$nom_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ nom n'est pas valide
if ($receiving && array_key_exists('nom', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom));
    if (!$nom_valide) {
        $nom_msg_validation = "Le nom doit comporter au moins deux lettres";
    }
}
// Le champ text prenom
$prenom = ""; // Contenu du champ prenom
$prenom_valide = true; // Le champ est valide par défaut
$prenom_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ penom n'est pas valide
if ($receiving && array_key_exists('prenom', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $prenom_valide = (1 === preg_match('/\w{2,}/', $prenom));
    if (!$prenom_valide) {
        $prenom_msg_validation = "Le prenom doit comporter au moins deux lettres";
    }
}
// Le champ sexe
$sexe = ""; // Contenu du champ sexe (sexe_h ou sexe_f)
$sexe_valide = true; // Le champ est valide par défaut
$sexe_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le sexe n'est pas coché
if ($receiving) {
    $sexe_valide = array_key_exists('sexe', $_POST)
        && in_array($_POST['sexe'], array('sexe_h', 'sexe_f')); // Le champ est valide par défaut
    if ($sexe_valide) {
        $sexe = $_POST['sexe'];
    } else {
        $sexe_msg_validation = "Le sexe n'est pas indiqué";
    }
}
$pays = ""; // Contenu du champ pays
$pays_valide = true; // Le champ est valide par défaut
$pays_msg_validation = ''; // Le message à renvoyer à l'utilisateur si la couleur n'est pas sélectionnée
if ($receiving) {
    $pays_valide = array_key_exists('pays', $_POST)
        && in_array($_POST['pays'], array('Etats-Unis', 'Canada', 'France', 'Allemage','Autre')); // Le champ est valide par défaut<
    if ($pays_valide) {
        $pays = $_POST['pays'];
    } else {
        $pays_msg_validation = "Vous n'avez selectionner aucun pays!";
    }
}
$login = ""; // Contenu du champ prenom
$login_valide = true; // Le champ est valide par défaut
$login_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ penom n'est pas valide
if ($receiving && array_key_exists('login', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $login_valide = (1 === preg_match('/\w{6,12}/', $login));
    if (!$login_valide) {
        $login_msg_validation = "Le nom d'utilisateur doit contenir entre 6 et 12 caractere";
    }
}
$mdp = ""; // Contenu du champ prenom
$mdp_valide = true; // Le champ est valide par défaut
$mdp_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ penom n'est pas valide
if ($receiving && array_key_exists('mdp', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $mdp_valide = (1 === preg_match('/\w{5,15}/', $mdp));
    if (!$mdp_valide) {
        $mdp_msg_validation = "Le mot de passe doit contenir entre 5 et 15 caractere";
    }
}
$email = ""; // Contenu du champ prenom
$email_valide = true; // Le champ est valide par défaut
$email_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ penom n'est pas valide
if ($receiving && array_key_exists('email', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $email_valide = (1 === preg_match('/\w{0,}/', $email));
    if (!$email_valide) {
        $email_msg_validation = "Le nom d'utilisateur doit contenir entre 6 et 12 caractere";
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Page colorée</title>
    <style>
        /* Classe pour les sections invalides du formulaire */
        .invalide {
            background-color: red;
        }
        /* Classe pour les messages de validation */
        .msg_validation {
            font-weight: bolder;
        }
        .top_formulaire {
            color : black;
        }
        .sous_titre {
            color : black;
        }
    </style>
</head>
<body>
<h1 class = "top_formulaire" > Formulaire d'inscription!</h1>
<h3 class="sous_titre">Information personnelle</h3>


<form method="post"><!-- Par défaut la méthode est get-->
    <p <?= $receiving && ( ! $nom_valide) ? 'class="invalide"' : '' ?>>
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom" value="<?= $nom ?>"/>
        <?php if ($receiving && (!$nom_valide)) {
            echo "<span class='msg_validation'>$nom_msg_validation<span>";
        } ?>
    </p>
    <p <?= $receiving && ( ! $prenom_valide) ? 'class="invalide"' : '' ?>>
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom" value="<?= $prenom ?>"/>
        <?php if ($receiving && (!$prenom_valide)) {
            echo "<span class='msg_validation'>$prenom_msg_validation<span>";
        } ?>
    </p>
    <p <?= $receiving && ( ! $sexe_valide) ? 'class="invalide"' : '' ?>><label for="sexe_h">Homme :</label>
        <input type="radio" id="sexe_h" name="sexe" value="sexe_h"
            <?= $receiving && ('sexe_h' == $sexe) ? 'checked="checked"' : '' ?>
        />
        <label for="sexe_f">Femme :</label>
        <input type="radio" id="sexe_f" name="sexe" value="sexe_f"
            <?= $receiving && ('sexe_f' == $sexe) ? 'checked="checked"' : '' ?>
        />
        <?php if ($receiving && (!$sexe_valide)) {
            echo "<span class='msg_validation'>$sexe_msg_validation<span>";
        } ?>

    <p <?= $receiving && ( ! $pays_valide) ? 'class="invalide"' : '' ?>><label for="pays">Pays :</label>
        <select id="pays" name="pays">
            <option value="(none)" <?= '(none)' == $pays ? 'selected="selected"' : '' ?>>Choisir...</option>
            <option value="Etats-Unis" <?= 'Etats-Unis' == $pays ? 'selected="selected"' : '' ?>>Etats-Unis</option>
            <option value="Canada" <?= 'Canada' == $pays ? 'selected="selected"' : '' ?>>Canada</option>
            <option value="France" <?= 'France' == $pays ? 'selected="selected"' : '' ?>>France</option>
            <option value="Allemage" <?= 'Allemagne' == $pays ? 'selected="selected"' : '' ?>>Allemage </option>
            <option value="Autre" <?= 'Autre' == $pays ? 'selected="selected"' : '' ?>>Autre </option>
        </select>
        <?php if ($receiving && (!$pays_valide)) {
            echo "<span class='msg_validation'>$pays_msg_validation<span>";
        } ?>
    </p>

    <h3 class="sous_titre">Information de login</h3>

    <p <?= $receiving && ( ! $login_valide) ? 'class="invalide"' : '' ?>>
        <label for="login">Nom d'utilisateur :</label>
        <input id="login" type="text" name="login" value="<?= $login ?>"/>
        <?php if ($receiving && (!$login_valide)) {
            echo "<span class='msg_validation'>$login_msg_validation<span>";
        } ?>
    </p>
    <p <?= $receiving && ( ! $mdp_valide) ? 'class="invalide"' : '' ?>>
        <label for="mdp">Mot de passe :</label>
        <input id="mdp" type="text" name="mdp" value="<?= $mdp ?>"/>
        <?php if ($receiving && (!$mdp_valide)) {
            echo "<span class='msg_validation'>$mdp_msg_validation<span>";
        } ?>
    </p>
    <p <?= $receiving && ( ! $email_valide) ? 'class="invalide"' : '' ?>>
        <label for="email">Email :</label>
        <input id="email" type="text" name="email" value="<?= $email ?>"/>
        <?php if ($receiving && (!$email_valide)) {
            echo "<span class='msg_validation'>$email_msg_validation<span>";
        } ?>
    </p>



    <p><input id="submit" type="submit" name="soumettre" value="Soumettre"/></p>
    <p><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Relancer la page</a></p>

    </p>
</form>
</body>
</html>