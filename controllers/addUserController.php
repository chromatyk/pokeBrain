<?php
// On instensie la class user()
$user = new users();
//La variable $pseudoList obtient le résultat de la méthode allPseudoUser() de la class user
$pseudoList = $user->allPseudoUser();
$lastId = $user->lastId();
//On crée le tableau vide des erreur
$formError = array();
//On crée les regex
$regPseudo = '#^\S{2,36}$#';
$regMail = '#^[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regPassword = '#^\S{8,36}$#';
$regFriendCode = '/([0-9]{4}(-)){3}[0-9]{4}/';
/*
 * On vérifie que le champs pseudo existe et si il n'est pas vide
 * L'attribut pseudo de la class user obtient le pseudo entré "anti-injectionné de code"
 * On vérifi que l'attribut pseudo de la class user passe la regex
 * On parcourt le tableau $pseudoList élément par élément , 1 élement vaut $onePseudo
 * On vérifie que le pseudo est pas déjà utilisé en vérifiant que l'attribut pseudo de la class user ne soit pas égale à l'élément pseudo du tableau $onePseudo
 */
if (isset($_POST['validInscrip'])) {
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $user->pseudo = htmlspecialchars($_POST['pseudo']);
        if (!preg_match($regPseudo, $user->pseudo)) {
            $formError['pseudo'] = 'Le pseudo n\'est pas correct';
        } else {
            foreach ($pseudoList as $onePseudo) {
                if ($user->pseudo == $onePseudo['pseudo']) {
                    $formError['pseudo'] = 'Le pseudo est déjà utilisé';
                }
            }
        }
    } else {
        $formError['pseudo'] = 'Le champ est vide';
    }
    /*
     * On vérifie que le champs du mail existe et si il n'est pas vide
     * On vérifie que le champs de la confirmation du mail existe et si il n'est pas vide
     * On vérifie que le mail et la confirmation du mail sont les mêmes
     * L'attribut mail de la class user obtient le mail entré "anti-injectionné de code"
     * On vérifie que l'attribut mail de la class user passe la regex
     */
    if (isset($_POST['mail']) && !empty($_POST['mail'])) {
        if (isset($_POST['confMail']) && !empty($_POST['confMail'])) {
            if ($_POST['mail'] == $_POST['confMail']) {
                $user->email = htmlspecialchars($_POST['mail']);
                if (!preg_match($regMail, $user->email)) {
                    $formError['mail'] = 'Le mail n\'est pas correct';
                    $formError['confMail'] = 'Le mail n\'est pas correct';
                }
            } else {
                $formError['confMail'] = 'Le mail et la confirmation du mail ne sont pas les même';
                $formError['mail'] = 'Le mail et la confirmation du mail ne sont pas les mêmes';
            }
        } else {
            $formError['confMail'] = 'Le champ est vide';
            $formError['mail'] = 'Le champ de la confirmation du mail est vide';
        }
    } else {
        $formError['mail'] = 'Le champ est vide';
        $formError['confMail'] = 'Le champ du mail est vide';
    }
    /*
     * On vérifie que le champs du mdp existe et si il n'est pas vide
     * On vérifie que le champs de la confirmation du mdp existe et si il n'est pas vide
     * On vérifie que le mdp et la confirmation du mdp sont les mêmes
     * L'attribut password de la class user obtient le mail entré "anti-injectionné de code"
     * On vérifie que l'attribut password de la class user passe la regex
     * L'attribut password de la classe user obtient sa propre valeur mes subit la fonction password_hash qui vas hasher le mdp (Pour une question de sécuriter)
     */
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        if (isset($_POST['confPassword']) && !empty($_POST['confPassword'])) {
            if ($_POST['confPassword'] == $_POST['password']) {
                $user->password = htmlspecialchars($_POST['password']);
                if (preg_match($regPassword, $user->password)) {
                    $user->password = password_hash($user->password, PASSWORD_BCRYPT);
                } else {
                    $formError['password'] = 'Le mot de passe n\'est pas correct';
                    $formError['confPassword'] = 'Le mot de passe n\'est pas correct';
                }
            } else {
                $formError['password'] = 'Le mot de passe et la confirmation du mot de passe ne sont pas les mêmes';
                $formError['confPassword'] = 'Le mot de passe et la confirmation du mot de passe ne sont pas les mêmes';
            }
        } else {
            $formError['confPassword'] = 'Le champ de la confirmation du mot de passe est vide';
            $formError['confPassword'] = 'Le champ est vide';
        }
    } else {
        $formError['password'] = 'Le champ est vide';
        $formError['confPassword'] = 'Le champ du mot de passe est vide';
    }
    if (isset($_POST['friendCode']) && !empty($_POST['friendCode'])) {
        $user->friendCode = htmlspecialchars($_POST['friendCode']);
    }
            /*
             * On vérifie que le tableau d'érreur est  vide, si c'est le cas on ajout l'utilisateur
             */
            if (isset($_POST['validInscrip']) && count($formError) == 0) {
                if (!$user->addUser()) {
                    $formError['add'] = 'Erreur lors de l\'ajout';
                } else {
                    $formError['add'] = 'Inscription Validée';
                    $formError['redirect'] = 'Vous allez êtres redirigé vers la page de connexion dans 3secs !';
                    $insertSuccess = true;
                    ?>
                    <meta http-equiv="refresh" content="3;URL=connexion.php">
                    <?php
                }
            }
}
?>