<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
            
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>CauxLibri</title>
    </head>
    <body>
        
        <header>
            <!-- header et navbar -->
            <?php include 'nav.html'; ?>
        </header>
        <h1 class="formTitle center-align red-text text-red accent-1">Votre compte</h1>
        <div class="container center-align">
            <div class="row">
                <form id="formUser" method="POST" class="col s12 offset-l2 l8 offset-l2 " action="index.php" >
                    <div class="row input-field col s12 l6">
                        <input name="confimLogin" value = "" id = "confimLogin" type="text" class = "active" />
                        <label for="confimLogin">Email</label>
                        <p class="css" id="confimLoginField"><?= isset($formError['confimEmail']) ? $formError['confimEmail'] : '' ?></p>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input name="confirmPassword" value="" id="confirmPassword" type="password" class="active">
                            <label for="confirmPassword">Mot de passe</label>
                            <p class="css" id="confirmPasswordField"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></p>
                        </div>
                    </div>
                        
                    <div class="row input-field col s12 l12">
                        <button class="modal-close waves-effect waves-light btn red accent-1 modal-trigger" type="submit" name="action">Valider</button>
                    </div>
                </form>
            </div>
        </div>
<?php include 'actionBtn.html'; ?>
    
        <div class="whiteSapce200"></div>
        <!-- debut du footer -->
         <?php include 'footer.html'; ?>
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>
</html>