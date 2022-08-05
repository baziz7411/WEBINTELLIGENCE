<?php
session_start();

include("connexionBDD.php");




$update=$bdd->prepare("UPDATE messages,utilisateurs SET 



  where Email=? and emailUser= ?");
$update->execute(array($_SESSION['']));

$delete->closeCursor();

header("location:Admin.php");


 ?>