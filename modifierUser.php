<?php 
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Se connecter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>        
        <link rel="stylesheet" href="assets/style.css">
        <style></style>
    </head>


    <body >

        <?php 
         if(isset($_SESSION["update"])&& $_SESSION["update"]==1){
            echo"<script> alert('Informations utilisateur modifier')</script>";
            $_SESSION["update"]=10;}
         else if(isset($_SESSION["update"])&& $_SESSION["update"]==0){
                echo"<script> alert('votre message n'est pas envoyé')</script>";
                $_SESSION["update"]=10;}
        
        ?>
        
    

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 ">
            <a class="navbar-brand" href="#">Test-Recru</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="modifierUser.php">Utilisateurs</a>
                    <a class="nav-item nav-link " href="Admin.php">Messages <span class="sr-only">(current)</span></a>
                    
                    <a class="nav-item nav-link" href="logout.php">Logout</a>
                
                </div>
            </div>
            
        </nav>
        
  
    </header>
  

    <div class="row d-flex justify-content-center align-items-center">

        <?php
        include("connexionBDD.php");
        $reponcee=$bdd->query("SELECT * FROM utilisateurs");

        while ($donnees=$reponcee->fetch()) { 
        
            $_SESSION["email"]=$donnees["Email"];

        ?>  


       
              <div class="col-lg-3 mx-2 mb-2 card" >
                  
                           <div class="card-body card-inputs">
                    
                                
                                       
                                    <div class="card-inputs ">

                                        <form method="post" action="updateUser.php">

                                        <input class="card-title" name="email" value="<?php echo $_SESSION["email"]?>" disabled/>
                                            <div class="w-100"><label>Nom :</label>             <input name="Nom" id="Nom" type="text" placeholder="Nom" class="modifier w-50" value="<?php echo $donnees["Nom"]?>" ></div>
                                            <div class="w-100"><label>Prenom :</label>          <input name="Prenom" type="text" placeholder="Prénom" class="modifier w-50" value="<?php echo $donnees["Prenom"]?>" ></div>
                                            <div class="w-100"><label>Téléphone :</label>       <input name="telephone" type="text" placeholder="telephone" class="modifier w-50" value="<?php echo $donnees["telephone"]?>"></div>
                                            <div class="w-100"><label>Adresse :</label>         <input name="adresse" type="text" placeholder="adresse" class="modifier  w-50" value="<?php echo $donnees["adresse"]?>" ></div>
                                            <div class="w-100"><label>Ville :</label>           <input name="ville" type="text" placeholder="ville" class="modifier  w-50" value="<?php echo $donnees["ville"]?>" ></div>
                                            <div class="w-100"><label class="w-75">Code Postal :</label> <input name="codePostal" type="text" placeholder="75000" class="modifier  w-25  " value="<?php echo $donnees["codePostal"]?>"></div>
                                            <div  class="w-100 mr-auto">
                                                
                                                <input  class="w-50" type="submit" value="modifier"/> <a href="deletUser.php" class="card-link w-50">supprimer</a> </div>
                                        </form>
                                    </div>
                            </div>
                            <!-- <div class="d-flex  justify-content-center pb-4">
                                          
                                            <a href="deletUser.php" class="card-link">supprimer</a>
                            </div> -->
    </div>
    
    <?php	
}   
  $reponcee->closeCursor();

?>  











</body>
</html>