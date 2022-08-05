

<?php
session_start();

include("connexionBDD.php");
$deleteMessages=$bdd->prepare("DELETE FROM messages where emailUser=?");


$deleteUser=$bdd->prepare("DELETE FROM  utilisateurs where Email=?");


$deleteMessages->execute(array($_SESSION['email']));
$deleteUser->execute(array( $_SESSION["email"]));


$deleteMessages->closeCursor();
$deleteUser->closeCursor();

header("location:modifierUser.php");


?>