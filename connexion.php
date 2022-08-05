<?php 

session_start();
$trouve=false;

if(isset($_POST['email'])&& $_POST['email']=="admin@gmail.com" && isset($_POST['mdp'])&& $_POST['mdp']=="admin"){
header("location:Admin.php");

}else{



 include("connexionBDD.php");
 $reponce=$bdd->query("SELECT * FROM  utilisateurs");

 while ($donnes=$reponce->fetch()) { 
 	if (isset($_POST['email'])&& $_POST['email']==$donnes['Email']){
     
       if(isset($_POST['mdp'])&&$_POST['mdp']==$donnes['mdp']) {
 		$trouve=true; 

 		$_SESSION["authentification"]=true;
        $_SESSION["emailUser"]=$_POST['email'];
        $_SESSION["Nom"]=$donnes["Nom"];
        $_SESSION["Prenom"]=$donnes["Prenom"];

        $_SESSION["telephone"]=$donnes["telephone"];

        $_SESSION["adresse"]=$donnes["adresse"];

        $_SESSION["codePostal"]=$donnes["codePostal"];

        $_SESSION["ville"]=$donnes["ville"];


       
        header("location:contact.php");}



        else{
            $_SESSION["mdpcorrecte"]=false;
            header("location:index.php");        }
 	
 	}


 	}	
 	if(!$trouve){
$_SESSION["erreur"]=true;

$_SESSION["authentification"]=false;
header("location:index.php");

}
}
 ?>