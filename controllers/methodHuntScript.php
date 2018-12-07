<?php

include '../models/dataBase.php';
include '../models/methodes.php';
$allMethods = new methodes();
$allMethods->id = $_POST['methods'];
$methodsByVersions = $allMethods->getMethodsByVersion();
$encode = json_encode($methodsByVersions);
echo $encode;
?>

