<?php

include '../models/dataBase.php';
include '../models/versions.php';
$firstGeneration = new versions();
$firstGeneration->idGeneration = $_POST['generationLocal'];
$firstGeneration = $firstGeneration->firstGeneration();
$encode = json_encode($firstGeneration);
echo $encode;
?>