<?php
require_once 'controllers/controllerAjoutUsers.php';
    
?>  
    
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
            <?php include 'nav.php'; ?>
        </header>
        <!--Fin du header et navbar -->
        <form id="form" method="POST" class="col s12 l12" action="index.php">
            <h1 class="formTitle center-align red-text text-red accent-1">Vos informations</h1>
                
            <div class="row input-field col s12 l6">
                <input name="firstName" value ="<?= isset($firstName) ? $firstName : ''; ?>" id ="firstName" type="text" class="active" />
                <label for="firstName">Prénom</label>
                <p class="css" id="firstNameField"><?= isset($formError['firstName']) ? $formError['firstName'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l6">
                <input name="lastName" value = "<?= isset($lastName) ? $lastName : ''; ?>" id = "lastName" type="text" class = "active" />
                <label for="lastName">Nom</label>
                <p class="css" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l6">
                <input name="email" value="<?= isset($email) ? $email : ''; ?>" id="email" type="email" class="active">
                <label for="email">Email</label>
                <p class="css" id="emailNameField"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l6">
                <input name="tel" value="<?= isset($tel) ? $tel : ''; ?>" id="tel" type="tel" maxlength="10" size="10" class="active">
                <label for="tel">N° de téléphone</label>
                <p class="css" id="telNameField"><?= isset($formError['tel']) ? $formError['tel'] : '' ?></p>
            </div>
            
            <div class="row input-field col s12 l12">
                <input name="address" value="<?= isset($address) ? $address : ''; ?>" id="address" type="text" class="active">
                <label for="address">Adresse</label>
                <p class="css" id="addressNameField"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l12">
                <button class="waves-effect waves-light btn blue-grey lighten-2 modal-trigger" type="submit" name="submitForm">M'inscrire</button>
            </div>
                
            <p id="pModalForm">Vous êtes déjà inscrit ? </p><a href="index.php">Retour</a>
        </form>

    </div>
</div>
    
</div>
        <?php include 'actionBtn.php'; ?>
            
<div class="whiteSapce200"></div>
<!-- debut du footer -->
         <?php include 'footer.php'; ?>
<!-- fin du footer -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>
</body>
</html>