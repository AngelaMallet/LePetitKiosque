<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerModifUsers.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Compte client</title>
    </head>
    <body>

     <?php if ($addSuccess) {
    ?>
        <div class="row">
            <div class="whiteSapce50"></div>
            <div class=" col s12 l12">
                <h2 class="card-panel red accent-1 white-text text-white"><?='Profil est modifié !'; ?></h2>
            </div>
        </div>
        <div class="whiteSapce100"></div>
        <div class="row">
            <div class=" col s12 l12">
                <img  width="200" height="200" src="../LePetitKiosque/assets/merciColibri.png">
            </div>
        </div>
        <div class=" col s12 l12">
            <a href="user-InfosBis.php" id="registrationBtn" class=" waves-effect waves-red btn-large blue-grey lighten-2 modal-trigger s12 m6">Votre compte</a>

        </div>

                            <?php
} else {
        ?>

 <!-- header et navbar -->
 <?php include 'nav.php'; ?>
        <div class="container center-align">
        <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-action">
        <div class="row">
                        <div>
                            <img class="col s12 m6 l6 hide-on-med-and-down responsive-img" src="assets/account.png">
                        </div>
                        <div>
                            <img class="col s12 m6 l6 responsive-img hide-on-small-only src="assets/account.png">
                        </div>
                        <form id="form" method="POST" class="col s12 l6" action="accountuserModif.php">
                            <div class="row input-field col s12 l6">
                                <input name="firstName" value ="<?=isset($firstName) ? $firstName : ($_SESSION['firstName']); ?>" id ="firstName" type="text" class="active" />
                                <p class="css" id="firstNameField"><?=isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="lastName" value = "<?=isset($lastName) ? $lastName : ($_SESSION['lastName']); ?>" id = "lastName" type="text" class = "active" />

                                <p class="css" id="lastNameField"><?=isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="email" value="<?=isset($email) ? $email : ($_SESSION['email']); ?>" id="email" type="email" class="active">

                                <p class="css" id="emailNameField"><?=isset($formError['email']) ? $formError['email'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="tel" value="<?=isset($tel) ? $tel : ($_SESSION['tel']); ?>" id="tel" type="tel" maxlength="10" size="10" class="active">

                                <p class="css" id="telNameField"><?=isset($formError['tel']) ? $formError['tel'] : ''; ?></p>
                            </div>

                            <div class="row input-field col s12 l12 right-align">
                                <label id="labelAddressModif" class="hide-on-small-only">Votre adresse : </label>
                                <input name="address" value="<?=isset($address) ? $address : ($_SESSION['address']); ?>" id="address" type="address" class="active">
                                <p class="css" id="addressNameField"><?=isset($formError['address']) ? $formError['address'] : ''; ?></p>
                            </div>
                            <div class="row col s12 l12">
                                <button id="submitFormValidBtn" class="modal-close waves-effect waves-light btn red accent-2 modal-trigger" type="submit" name="submitFormModif">Valider</button>
                            </div>
                            <div class="row col s12 l12">
                            <a class="blue-grey-text text-blue-grey darken-3" href="user-infosBis.php">Annuler</a>
                            <!-- ... <p><a id="linkForm" href="index.php">Vous êtes déjà inscrit?</a></p>-->
</div>
                        </form>
                        <?php
    }?>
                    </div>
        </div>
      </div>
    </div>
            </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>
</html>

