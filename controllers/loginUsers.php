<?php
//On instensie le models user
$user = new users();
//on crée le tableau vide des erreurs
$formError = array();
//on crée les regex
$regPseudo = '#^\S{2,36}$#';
$regPassword = '#^\S{8,36}$#';
/*
 * Si le champs du pseudo existe et n'est pas vide
 * L'attribut pseudoLog de la class user obtient le pseudo qui est en même temps "anti-injectionnée de code"
 * On vérifie que l'attribut pseudoLog de la classe use passe la regex
 */
if (isset($_POST['logInSubmit'])) {
    if (isset($_POST['pseudoLog']) && !empty($_POST['pseudoLog'])) {
        $user->pseudo = htmlspecialchars($_POST['pseudoLog']);
        if (!preg_match($regPseudo, $user->pseudo)) {
            $formError['pseudoLog'] = 'Identifiant incorrect';
        }
    } else {
        $formError['pseudoLog'] = 'Identifiant incorrect';
    }
    $login = $user->loginIn();
    /*
     * Si le champs du mdp existe et qu'il n'est pas vide
     * La variable $passxordLog obtient le mdp qui est en même temps "anti-injectionnée de code"
     * On vérifie que la variable $passwordLog passe la regex
     * On vérifie que le mdp entré est égale au mdp du résultat de la méthode searchLogin() de la class user
     */
    if (is_object($login)) {
        if (isset($_POST['passwordLog']) && !empty($_POST['passwordLog'])) {
            $passwordLog = htmlspecialchars($_POST['passwordLog']);
            if (!password_verify($passwordLog, $login->password)) {
                $formError['passwordLog'] = 'Identifiant incorrect';
            } else {
                $_SESSION['id'] = $login->id;
                $_SESSION['pseudo'] = $login->pseudo;
                $_SESSION['connected'] = 1;
                ?>
                <meta http-equiv="refresh" content="0.1;URL=/mon_profil/<?= $_SESSION['pseudo'] ?>">
                <?php
            }
        } else {
            $formError['pseudoLog'] = 'Identifiant incorrect';
        }
    } else {
        $formError['pseudoLog'] = 'Identifiant incorrect';
    }
}
?>