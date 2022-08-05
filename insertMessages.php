<?php 

session_start();


try {
	include("connexionBDD.php"); 

   
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_SESSION["emailUser"];
    $telephone=$_POST["telephone"];
    $adresse=$_POST["adresse"];
    $codePostal=$_POST["codePostal"];
    $Ville=$_POST["Ville"];
    $commentaire=nl2br($_POST["commentaire"]);

    
    $insert= $bdd->prepare("INSERT INTO  messages(emailUser,messages) VALUES(?,?)"); 
    $insert->execute(array($email,$commentaire));
    

    $insert->closeCursor(); 


    $update = $bdd->query("UPDATE utilisateurs SET  Nom='$nom' , Prenom ='$prenom',telephone='$telephone',adresse='$adresse',codePostal='$codePostal',ville='$Ville' WHERE  Email ='$email'");
    $update->execute();
    $update->closeCursor();

    $_SESSION["messageEnvoye"]=1;
    header("location:contact.php");


	
} catch (Exception $e) {
	
	header("location:contact.php");


}






 ?>