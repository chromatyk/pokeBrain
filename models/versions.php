<?php
class versions extends dataBase {
    public $id = 0;
    public $version = '';
    public $idGeneration = 0;
    public function __construct() {
        parent::__construct();
    }
    /*
     * Méthode permettant de sélectionner les versions en fonction d'une generation
     */
    public function firstGeneration() {
        $firstGeneration = $this->db->prepare('SELECT version FROM versions WHERE idGeneration = :idGeneration');
        $firstGeneration->bindValue(':idGeneration', $this->idGeneration, PDO::PARAM_STR);
        $firstGeneration->execute();
        $firstGeneration = $firstGeneration->fetchAll(PDO::FETCH_OBJ);
        return $firstGeneration;
    }
    /*
     * Méthode permettant de sélectionner toute les versions
     */
    public function getAllVersions() {
        $query = 'SELECT id, version FROM versions';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $allVersion = $responseRequest->fetchAll(PDO::FETCH_OBJ);
        }
        return $allVersion;
    }
    public function __destruct() {
    }
}
?>

