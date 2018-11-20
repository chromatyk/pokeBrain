<?php
class safaryFriend extends dataBase {
    public $id = 0;
    public $type = '';
    public $firstpokemon = '';
    public $secondPokemon = '';
    public $thirdPokemon = '';
    public $idUser = 0;
    public function __construct() {
        parent::__construct();
    }
    /*
     * Méthode permettant de récupérer les types éxistant et l'iD correspondant dans les parcs amis
     */
    public function getAllSafaryType() {
        $query = 'SELECT `types`.`type` AS `type`, `positionInSafary`.`idType` AS `idType` FROM `types` INNER JOIN `positionInSafary`ON `types`.`id` = `positionInSafary`.`idType` GROUP BY `types`.`id` ';
        $allSafary = $this->db->query($query);
        if ($allSafary) {
            $allSafary = $allSafary->fetchAll(PDO::FETCH_OBJ);
            return $allSafary;
        }
    }
    /*
     * Méthode permettant de récupérer la liste des pokemons par position et par type
     */
    public function getFirstPokemonsByType() {
        $pokemonByType = $this->db->prepare('SELECT `pokemon`.`nomPkm` FROM `pokemon` INNER JOIN `positionInSafary` ON `positionInSafary`.`idPokemon` = `pokemon`.`id` INNER JOIN `types` ON  `positionInSafary`.`idType`= `types`.`id` AND `positionInSafary`.`position`= :nbPokemon AND `types`.`type`= :type');
        $pokemonByType->bindValue(':type', $this->type, PDO::PARAM_STR);
        $pokemonByType->bindValue(':nbPokemon', $this->nbPokemon, PDO::PARAM_INT);
        if ($pokemonByType->execute()) {
            $pokemonByType = $pokemonByType->fetchAll(PDO::FETCH_OBJ);
            return $pokemonByType;
        }
    }
    /*
     * Méthode permettant de récupérer le safari ami d'un utilisateur en fonction de son Id
     */
    public function getSafaryByUser() {
        $safaryByUser = $this->db->prepare('SELECT type, firstPokemon, secondPokemon, thirdPokemon  FROM `safaryFriend` WHERE `idUser` = :idUser');
        $safaryByUser->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        if ($safaryByUser->execute()) {
            $safaryByUser = $safaryByUser->fetch(PDO::FETCH_OBJ);
            return $safaryByUser;
        }
    }
    /*
     * Récupérer le safari des autres utilisateurs
     */
    public function getSafaryByOtherUser() {
        $safaryByUser = $this->db->prepare('SELECT `type`, `firstPokemon`, `secondPokemon`, `thirdPokemon`  FROM `safaryFriend` INNER JOIN `users` WHERE `safaryFriend`.`idUser` = `users`.`id` AND `users`.`pseudo` = :pseudo');
        $safaryByUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        if ($safaryByUser->execute()) {
            $safaryByUser = $safaryByUser->fetch(PDO::FETCH_OBJ);
            return $safaryByUser;
        }
    }
    /*
     * Méthode permettant à l'utilisateur d'ajouter son safari ami
     */
    public function addSafaryUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `safaryFriend`(`type`, `firstPokemon`, `secondPokemon`, `thirdPokemon`, `idUser`) VALUES(:type, :firstPokemon, :secondPokemon, :thirdPokemon, :idUser)';
        $addSafaryUser = $this->db->prepare($query);
        $addSafaryUser->bindValue(':type', $this->type, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':firstPokemon', $this->firstPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':secondPokemon', $this->secondPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':thirdPokemon', $this->thirdPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addSafaryUser->execute();
    }
    /*
     * Méthode permettant à l'utilisateur de mettre à jour son safari ami
     */
    public function updateSafary() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE safaryFriend SET type = :type, firstPokemon=:firstPokemon, secondPokemon=:secondPokemon, thirdPokemon=:thirdPokemon WHERE idUser = :idUser';
        $updateSafary = $this->db->prepare($query);
        $updateSafary->bindValue(':type', $this->type, PDO::PARAM_STR);
        $updateSafary->bindValue(':firstPokemon', $this->firstPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':secondPokemon', $this->secondPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':thirdPokemon', $this->thirdPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateSafary->execute();
    }
    public function __destruct() {
    }
}
?>