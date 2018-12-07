<?php
class users extends dataBase {
    public $id = 0;
    public $pseudo = '';
    public $email = '';
    public $password = '';
    public $profilePicture = '';
    public $banner = '';
    public $friendCode = '';
    public $bioUsers = '';
    public function __construct() {
        parent::__construct();
    }
    /*
     * Méthode permettant de récupérer les données d'inscription en fonction du pseudo renseigné
     */
    public function loginIn() {
        $userLog = $this->db->prepare('SELECT `id`,`pseudo`, `password` FROM `users` WHERE `pseudo` = :pseudo');
        $userLog->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $userLog->execute();
        return $userLog = $userLog->fetch(PDO::FETCH_OBJ);
    }
    /*
     * Méthode permettant d'obtenirtoute les informations de l'utilisateur connecté
     */
    public function connectedInfos() {
        $userConnected = $this->db->prepare('SELECT `users`.`bannerPicture`, `users`.`id`, `users`.`pseudo`, `users`.`password`, `users`.`friendCode`, `users`.`bioUsers`, `users`.`profilePicture`, `users`.`email`, COUNT(DISTINCT hunts.idPokemon) AS `nbUsersHunts` FROM users INNER JOIN `hunts` ON `users`.`id` = `hunts`.`idUser` WHERE users.id = :id AND hunts.catchStatement = 1');
        $userConnected->bindValue(':id', $this->id, PDO::PARAM_STR);
        if ($userConnected->execute()) {
            $userConnectedInfos = $userConnected->fetch(PDO::FETCH_OBJ);
            if (is_object($userConnectedInfos)) {
                $this->pseudo = $userConnectedInfos->pseudo;
                $this->password = $userConnectedInfos->password;
                $this->friendCode = $userConnectedInfos->friendCode;
                $this->bioUsers = $userConnectedInfos->bioUsers;
                $this->profilePicture = $userConnectedInfos->profilePicture;
                $this->email = $userConnectedInfos->email;
            }
            return $userConnectedInfos;
        }
    }
    /*
     * Méthode permettant de récupérer les informations de tous les utilisateurs hors utilisateur connécté
     */
    public function oterUsersInfos() {
        $otherUsersProfil = $this->db->prepare('SELECT `users`.`id`, `users`.`pseudo`, `users`.`password`, `users`.`friendCode`, `users`.`bioUsers`, `users`.`profilePicture`, `users`.`email`, COUNT(hunts.id) AS `nbUsersHunts` FROM users INNER JOIN `hunts` ON `users`.`id` = `hunts`.`idUser` WHERE pseudo = :pseudo AND `hunts`.`catchStatement`=1');
        $otherUsersProfil->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        if ($otherUsersProfil->execute()) {
            $otherUserConnectedInfos = $otherUsersProfil->fetch(PDO::FETCH_OBJ);
            $this->pseudo = $otherUserConnectedInfos->pseudo;
            $this->password = $otherUserConnectedInfos->password;
            $this->friendCode = $otherUserConnectedInfos->friendCode;
            $this->bioUsers = $otherUserConnectedInfos->bioUsers;
            $this->profilePicture = $otherUserConnectedInfos->profilePicture;
            $this->email = $otherUserConnectedInfos->email;
        }
        return $otherUserConnectedInfos;
    }
    /*
     * Méthode permettant de récuper tous les pseudo déjà existant
     */
    public function allPseudoUser() {
        $query = 'SELECT `id`, `pseudo` FROM `users`';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $pseudoList = $responseRequest->fetchAll(PDO::FETCH_ASSOC);
        }
        return $pseudoList;
    }
    /*
     * Méthode permettant de récupérer l'id du dérnier utilisateur et de l'incrémenté de 1
     */
    public function lastId() {
        $lastId = $this->db->prepare('SELECT MAX(`id`)+1 AS lastId FROM users');
        $lastId->execute();
        if (is_object($lastId)) {
            return $lastId = $lastId->fetch(PDO::FETCH_OBJ);
        }
    }
    /*
     * Méthode permettant de récupérer le mot de passe de l'utilisateur
     */
    public function usedPassword() {
        $usedPassword = $this->db->prepare('SELECT password FROM users WHERE id = :id');
        $usedPassword->bindValue(':id', $this->id, PDO::PARAM_STR);
        $usedPassword->execute();
        if (is_object($usedPassword)) {
            return $usedPassword = $usedPassword->fetch(PDO::FETCH_OBJ);
        }
    }
    /*
     * Méthode permettant d'ajouter un utilisateur à la base de données
     */
    public function addUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `users`(`pseudo`, `email`, `password`, `profilePicture`, `friendCode`) VALUES(:pseudo, :email, :password, :profilePicture, :friendCode)';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $addUser->bindValue(':profilePicture', $this->profilePicture, PDO::PARAM_STR);
        $addUser->bindValue(':friendCode', $this->friendCode, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addUser->execute();
    }
    /*
     * Méthode permettant de modifier les informations de l'utilisateur
     */
    public function updateInfoUsers() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET pseudo = :pseudo, friendCode = :friendCode, bioUsers = :bioUsers WHERE id = :id';
        $updateInfoUsers = $this->db->prepare($query);
        $updateInfoUsers->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updateInfoUsers->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $updateInfoUsers->bindValue(':friendCode', $this->friendCode, PDO::PARAM_STR);
        $updateInfoUsers->bindValue(':bioUsers', $this->bioUsers, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateInfoUsers->execute();
    }
    public function updateInfoUsersWithoutPseudo() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET friendCode = :friendCode, bioUsers = :bioUsers WHERE id = :id';
        $updateInfoUsersWithoutPseudo = $this->db->prepare($query);
        $updateInfoUsersWithoutPseudo->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updateInfoUsersWithoutPseudo->bindValue(':friendCode', $this->friendCode, PDO::PARAM_STR);
        $updateInfoUsersWithoutPseudo->bindValue(':bioUsers', $this->bioUsers, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateInfoUsersWithoutPseudo->execute();
    }
    /*
     * Méthode permettant de modifier l'avatar de l'utilisateur
     */
    public function updateProfilePicture() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET profilePicture = :profilePicture WHERE id = :id';
        $updateProfilePicture = $this->db->prepare($query);
        $updateProfilePicture->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updateProfilePicture->bindValue(':profilePicture', $this->profilePicture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateProfilePicture->execute();
    }
    
    public function updateBanner() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET bannerPicture = :banner WHERE id = :id';
        $updateBanner = $this->db->prepare($query);
        $updateBanner->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updateBanner->bindValue(':banner', $this->banner, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateBanner->execute();
    }
    /*
     * Méthode permettant de modifier le ot de passe de l'utilisateur
     */
    public function updatePassword() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET password = :password WHERE id = :id';
        $updatePassword = $this->db->prepare($query);
        $updatePassword->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updatePassword->bindValue(':password', $this->password, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updatePassword->execute();
    }
    /*
     * Obtenir la liste des utilisateurs hors utilisateur connecté par tranc de 12
     */
    public function getPatientListPagination($offset) {
        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT `pseudo`, COUNT(hunts.id) AS `nbUsersHunts` FROM `users` LEFT JOIN `hunts` ON `users`.`id` = `hunts`.`idUser` WHERE users.id <> :id AND hunts.catchStatement = 1 OR `hunts`.`catchStatement` IS NULL GROUP BY users.id LIMIT 12 OFFSET :offset';
        $otherUsersList = $this->db->prepare($query);
        $otherUsersList->bindValue(':offset', $offset, PDO::PARAM_INT);
        $otherUsersList->bindValue(':id', $this->id, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($otherUsersList->execute()) {
            $otherUsersList = $otherUsersList->fetchAll(PDO::FETCH_OBJ);
        } else {
            $otherUsersList = false;
        }
        return $otherUsersList;
    }
    /**
     * Récupérer le nombre d'utilisateurs
     */
    public function countUsers() {
        $query = 'SELECT COUNT(`id`) AS `numberOfUsers` FROM `users`';
        $patientCount = $this->db->query($query);
        $patientCountResult = $patientCount->fetch(PDO::FETCH_OBJ);
        return $patientCountResult;
    }
    public function __destruct() {
    }
}
?>