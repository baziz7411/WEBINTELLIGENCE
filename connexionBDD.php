

<?php 
#connexion a la BDD 

try {
	



$serveur="localhost";
		$nomBDD="webintelligence";
		$utilisateur="root";
		$mdp="";
		$port=3306;

		 $bdd = new PDO("mysql:host=".$serveur.";port=".$port.";dbname=".$nomBDD, $utilisateur, $mdp,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//$erreure=array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION);//erreur de syntaxe (variable pour récup l'érreur de syntaxe)

//$bdd=new PDO($hoste,$login,$mdp,$erreure); // Crée une instance PDO représentant une connexion à la base de données


} catch (Exception $e) { //en cas de probleme de connecxion

	 die('Erreur : '.$e->getMessage());
	
}





 ?>