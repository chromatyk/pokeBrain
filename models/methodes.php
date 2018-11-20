<?php
class methodes extends dataBase {
    public $id = 0;
    public $methode = '';
    public $idVersion = 0;
    public $version = "";
    public function __construct() {
        parent::__construct();
    }
    /*
     * Méthode permettant de récupérer tous les métodes de shasses par versions
     */
    public function getMethodsByVersion() {
        $allMethods = $this->db->prepare('SELECT huntMethods.id, huntMethods.methode FROM huntMethods INNER JOIN versions ON versions.id = huntMethods.idVersion WHERE versions.id = :id');
        $allMethods->bindValue(':id', $this->id, PDO::PARAM_INT);
        $allMethods->execute();
        $allMethods = $allMethods->fetchAll(PDO::FETCH_OBJ);
        return $allMethods;
    }
    public function __destruct() {
    }
}
?>