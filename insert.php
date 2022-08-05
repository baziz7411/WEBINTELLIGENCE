<?php 

session_start();


try {
	include("connexionBDD.php"); 
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $userpassword=$_POST["mdp"];
    $tel=$_POST["tel"];
    $adresse =$_POST["adresse"];
    $codePostal=$_POST["codePostal"];
    $ville=$_POST["ville"];

  //  $hash = password_hash($password, PASSWORD_DEFAULT);



    $insert=$bdd->prepare("INSERT INTO utilisateurs(Nom,Prenom,Email,mdp,telephone,adresse,codePostal,ville) VALUES(?,?,?,?,?,?,?,?)"); 
    $insert->execute(array($nom,$prenom,$email,$userpassword,$tel,$adresse,$codePostal,$ville));

    $insert->closeCursor();  

    $_SESSION["inscri"]=1;
    header("location:index.php");


	
} catch (Exception $e) { 

    $_SESSION["inscri"]=0;
	
	header("location:index.php");


}






 ?>