<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerModifUsers.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />
    <title>services</title>
</head>
<?php include 'nav.php'; ?>
<body>
<?php if ($addSuccess) {
    ?>
    <div class="container center-align blue-grey-text text-blue-grey darken-3">
        <div class="col s12 m12 l12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="col s12 m12 l12">
                        <img src="assets/merciColibri.png" alt="image logOut" height="150" width="150"
                            class="rignt-align">
                    </div>
                    <div class="card-content">
                        <h1 class="header">Vous avez modifié vos informations</h1>
                    </div>
                    <div class="card-action">
                        <a class="blue-grey-text text-blue-grey darken-3" href="user-infosBis.php"><mark>Retour</mark></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <?php
} else {
        ?>
    <div class="container center-align">
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-action">
                    <div class="row">
                        <div>
                            <img class="col s12 m6 l6 responsive-img hide-on-small-only" src="assets/account.png" />
                                </div> <form id="form" method="POST" class="col s6 offset-s1 l6" action="accountuserModif.php">
                            <div class="row input-field col s12 l6">
                                <input name="firstName"
                                    value="<?=isset($firstName) ? $firstName : ($_SESSION['firstName']); ?>"
                                    id="firstName" type="text" class="active" />
                                <p class="css" id="firstNameField">
                                    <?=isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="lastName"
                                    value="<?=isset($lastName) ? $lastName : ($_SESSION['lastName']); ?>" id="lastName"
                                    type="text" class="active" />

                                <p class="css" id="lastNameField">
                                    <?=isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="email" value="<?=isset($email) ? $email : ($_SESSION['email']); ?>"
                                    id="email" type="email" class="active">

                                <p class="css" id="emailNameField">
                                    <?=isset($formError['email']) ? $formError['email'] : ''; ?></p>
                            </div>
                            <div class="row input-field col s12 l6">
                                <input name="tel" value="<?=isset($tel) ? $tel : ($_SESSION['tel']); ?>" id="tel"
                                    type="tel" maxlength="10" size="10" class="active">

                                <p class="css" id="telNameField">
                                    <?=isset($formError['tel']) ? $formError['tel'] : ''; ?></p>
                            </div>

                            <div class="row input-field col s12 l12 right-align">
                                <label id="labelAddressModif" class="hide-on-small-only">Votre adresse : </label>
                                <input name="address" value="<?=isset($address) ? $address : ($_SESSION['address']); ?>"
                                    id="address" type="address" class="active">
                                <p class="css" id="addressNameField">
                                    <?=isset($formError['address']) ? $formError['address'] : ''; ?></p>
                            </div>
                            <div class="row col s12 l12">
                                <button id="submitFormValidBtn"
                                    class="modal-close waves-effect waves-light btn red accent-2 modal-trigger"
                                    type="submit" name="submitFormModif">Valider</button>
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
        <?php include 'actionBtn.php'; ?>
    </div>
    <?php include 'footer.php'; ?>

</body>
<!-- fin du footer -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>

</html>