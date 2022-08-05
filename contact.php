<?php 
session_start();

 ?>

<!DOCTYPE html>
<html >
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contactez-nous</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
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
                    <a class="nav-item nav-link active" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Profil</a>
                    <a class="nav-item nav-link" href="logout.php">Logout</a>

                </div>
            </div>

        </nav>


    </header>
    <div class="d-flex justify-content-center align-items-center">










<?php 
                            
                        if(isset($_SESSION["messageEnvoye"])&& $_SESSION["messageEnvoye"]==1){
                            echo"<script> alert('votre message est envoyé')</script>";
                            $_SESSION["messageEnvoye"]=10;}
                         else if(isset($_SESSION["messageEnvoye"])&& $_SESSION["messageEnvoye"]==0){
                                echo"<script> alert('votre message n'est pas envoyé')</script>";
                                $_SESSION["messageEnvoye"]=10;}

                      


                      ?> 

                      
    <div class="container-contact d-flex justify-content-center align-items-center">
        <form action="insertMessages.php" method="post" class="form-contact text-center">
            <h2 class="title my-2">contactez nous!</h2>


            <div class="inputc my-1 w-100 d-flex justify-content-around">
                <input class="w-75 mr-2" type="text" name="nom" placeholder="Nom"  value="<?php echo $_SESSION["Nom"]?>"  required/>
                <input class="w-75 ml-2" type="text" name="prenom" placeholder="Prénom"  value="<?php echo $_SESSION["Prenom"]?>" required/>
            </div>
            
            <div class="inputc my-1 w-100 ">
                <input class="w-100" type="email" name="email"  value="<?php echo $_SESSION["emailUser"]?>" disabled/>
            </div>
            <div class="inputc my-1 w-100">
                <input class="w-100" type="text" id="tel"  maxlength="10" name="telephone" placeholder="téléphone" value="<?php echo $_SESSION["telephone"]?>"  required/> </div>
            <div class="inputc my-1 w-100">
                <input class="w-100" type="text" name="adresse" placeholder="adresse"  value="<?php echo $_SESSION["adresse"]?>"  required/>                
            </div>

            <div class="inputc w-100 my-1 d-flex justify-content-around">
                <input class="w-75 mr-2" type="text" name="codePostal" placeholder="code postal" value="<?php echo $_SESSION["codePostal"]?>"  required/>
                <input class="w-75 ml-2" type="text" name="Ville" placeholder="Ville" value="<?php echo $_SESSION["ville"]?>"  required/>             
            </div>
            
            <div class="inputc my-1 w-100">
                <textarea class="w-100" rows="3"  name="commentaire" id="" maxlength="1500" placeholder="Entrer votre message..."></textarea>
            </div>
            <input type="submit" value="Envoyer" class="btn"/>

        </form>

    </div>
    </div>
    
    

     
    <script src="assets/script.js" async defer></script>

</body>
</html>