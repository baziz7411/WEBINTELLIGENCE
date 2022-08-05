<?php  session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/style.css">
        <title>Page Admin</title>
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 ">
            <a class="navbar-brand" href="#">Test-Recru</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="modifierUser.php">Utilisateurs</a>

                    <a class="nav-item nav-link" href="#">Messages</a>
                    <a class="nav-item nav-link" href="logout.php">Logout</a>

                </div>
            </div>

        </nav>



</header>

<?php 


 include("connexionBDD.php");
 $reponce=$bdd->query("SELECT idMessage,emailUser,messages FROM  messages , utilisateurs where utilisateurs.Email= messages.emailUser ");
?>


  
<div class="row d-flex justify-content-center ">

<?php

 while ($donnes=$reponce->fetch()) { 
    $_SESSION["id"]=$donnes["idMessage"];
    




?>
          <div class="card col-lg-5 mx-2 mb-3" style="width: 25rem; ">
         <div class="card-body ">
             <h5 class="card-title"><?php echo $donnes["emailUser"]?></h5>
             <p class="card-text"><?php echo $donnes["messages"] ?></p></div>

             <div class="d-flex  justify-content-center pb-3">
                <!-- <a href="modifierUser.php" class="card-link mt-auto" >modifier</a> -->
                <a href="deleteMessage.php" class="card-link">supprimer</a>
             </div>
         
     </div>
     <?php	
 }   
   $reponce->closeCursor();

 ?>  
 


</div>

    
</body>
</html>