<?php
session_start();

include("connexionBDD.php");




$delete=$bdd->prepare("DELETE FROM messages where idMessage=?");
$delete->execute(array($_SESSION['id']));

$delete->closeCursor();

header("location:Admin.php");





 ?>