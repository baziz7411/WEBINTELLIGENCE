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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
    </head>


    <body class="d-flex align-items-center justify-content-center">
    <?php 



if (isset($_SESSION["inscri"])&&$_SESSION["inscri"]==0) { 
    echo"<script> alert('echec d'inscription')</script>"; 
    $_SESSION["inscri"]=10;

}
if (isset($_SESSION["erreur"])&&$_SESSION["erreur"]==true) { 

    echo"<script> alert('Identifiant ou mot de passe incorect! veuillez saisir des identifiants corrects')</script>"; 
    $_SESSION["erreur"]=false;

}


if (isset($_SESSION["inscri"])&&$_SESSION["inscri"]==1) {

    echo"<script> alert('inscription éffectué connecté vous')</script>";
    $_SESSION["inscri"]=10;
    
    }
 ?>


        <div class="container-forms position-relative bg-light rounded">

            <div class="signin-signup d-flex align-items-center justify-content-around position-absolute w-100 h-100">

                <!-- formulaire de connexion -->
                <form action="connexion.php" method="POST" class="d-flex align-items-center justify-content-center sign-in-form">

                    <h2 class="title mb-2">Se connecter</h2>

                    <div class="inputc w-100"> 
                        
                        <input name="email"  id="email" type="email" placeholder="E-mail" required>
                    </div>
                    <div class="inputc w-100"> 
                        
                        <input name="mdp" id="psw" type="password" placeholder="Mot de passe" required>
                    </div>
                    <input type="submit" value="Se connecter" class="btn mt-3">


                </form>
                <!-- Fin de formulaire de connexion -->

                <!-- formulaire d'inscription -->
                <form action="insert.php" method="POST" class="sign-up-form d-flex align-items-center justify-content-center">

                    <h2 class="title mb-2">Créer un compte</h2>

                    <div class="inputc w-100 d-flex justify-content-around"> 
                        
                        <input name="nom" class="w-75 mr-2" id="nom" type="text" placeholder="Nom" required>
                        <input name="prenom" class="w-75 ml-2" id="prenom" type="text" placeholder="Prénom" required>
                    </div>

                    <div class="inputc w-100"> 
                        
                        <input name="email" id="email" type="email" placeholder="E-mail" required>
                    </div>

                    <div class="inputc w-100"> 
                        
                        <input name="mdp" id="psw" type="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="inputc w-100"> 
                        
                        <input name="tel" id="tel" maxlength="10" type="tel" placeholder="Téléphone" required>
                    </div>
                    <div class="inputc w-100">                         
                        <input name="adresse" id="adresse" type="text" placeholder="adresse" required>
                    </div>
                    <div class="inputc w-100 d-flex justify-content-around"> 
                        
                        <input name="codePostal" class="w-75 mr-2" id="nom" type="text" placeholder="Code Postal" required>
                        <input name="ville" class="w-75 ml-2" id="ville" type="text" placeholder="Ville" required>
                    </div>
                  
                    
                    <input type="submit" name="submit" value="S'inscrire" class="btn mt-3">

                </form>
                <!-- Fin de formulaire d'inscription' -->

            </div>
            <div class="tabs-container d-flex align-items-center justify-content-around position-absolute w-100 h-100">
                <div class="tab left-tab d-flex align-items-center justify-content-around text-center">
                    <div class="contenu">
                        <h3>Vous avez déjà un compte ?</h3>
                        <button class="btn" id="login-btn"> Se connecter</button>
                    </div>
                    <img src= "assets/images/login.svg" alt class="image w-100"/>
                </div>
                <div class="tab right-tab d-flex align-items-center justify-content-around text-center">
                    <div class="contenu">
                        <h3>Toujours pas de compte ?</h3>
                        <button class="btn" id="signup-btn"> S'inscrire</button>
                    </div>
                    <img src= "assets/images/signip.svg" alt class="image w-100"/>
                </div>
            </div>
        </div>  
        <script src="assets/script.js"></script>
    </body>
</html>







