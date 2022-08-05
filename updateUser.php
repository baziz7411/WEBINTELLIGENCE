<?php 

session_start();



try {
    include("connexionBDD.php"); 

	
    $nom=$_POST["Nom"];
    $prenom=$_POST["Prenom"];

    $telephone=$_POST["telephone"];
    $adresse=$_POST["adresse"];
    $codePostal=$_POST["codePostal"];
    $Ville=$_POST["ville"];
    

    

    $updater = $bdd->query("UPDATE utilisateurs SET  Nom='$nom' , Prenom ='$prenom',telephone='$telephone',adresse='$adresse',codePostal='$codePostal',ville='$Ville' WHERE  Email ='?'");
    $updater->execute(array($_SESSION["email"]));
    $updater->closeCursor();
    header("location:modifierUser.php");


	
} catch (Exception $e) { 

    $_SESSION["update"]=0;

    echo'exception';
	
	header("location:modifierUser.php");


}






 ?>