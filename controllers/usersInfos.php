<?php

$userConnected = new users();
if (!empty($_SESSION['id'])) {
    $userConnected->id = $_SESSION['id'];
    $userConnected = $userConnected->connectedInfos();
    $safaryFriend = new safaryFriend();
    $safaryFriend->idUser = $_SESSION['id'];
    $safaryFriend = $safaryFriend->getSafaryByUser();
    $finishedHunts = new hunts();
    $finishedHunts->idUser = $_SESSION['id'];
    $finishedHuntByGen = $finishedHunts->countFinishedHuntByGen();
}
?>