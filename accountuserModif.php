<?php
session_start(); // On démarre la session AVANT toute chose
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
        <!-- header et navbar -->
		<?php include 'nav.html'; ?>
        <div>
            <div class="row">
                <div class="container center-align">
                    <div class="whiteSapce100"></div>
                        <div class="row">
                            <div>
                                <img class="col s12 m6 l6 responsive-img" id="accountImg" src="assets/account.png">
                        </div>
		<form id="form" method="POST" class="col s12 l6" action="index.php">
			<div class="row input-field col s12 l6">
				<input name="fistName" value ="<?= isset($fistName) ? $fistName : ($_SESSION['fistName']); ?>" id ="fistName" type="text" class="active" />
				<label for="name">Prénom</label>
				<p class="css" id="firstNameField"><?= isset($formError['fistName']) ? $formError['fistName'] : '' ?></p>
			</div>
			<div class="row input-field col s12 l6">
				<input name="lastName" value = "<?= isset($lastName) ? $lastName : ($_SESSION['lastName']); ?>" id = "lastName" type="text" class = "active" />
				<label for="lastName">Nom</label>
				<p class="css" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
			</div>
			<div class="row input-field col s12 l6">
				<input name="email" value="<?= isset($email) ? $email : ($_SESSION['email']); ?>" id="email" type="email" class="active">
				<label for="email">Email</label>
				<p class="css" id="emailNameField"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
			</div>
			<div class="row input-field col s12 l6">
				<input name="tel" value="<?= isset($tel) ? $tel : ($_SESSION['tel']); ?>" id="tel" type="tel" class="active">
				<label for="tel">N° de téléphone</label>
				<p class="css" id="telNameField"><?= isset($formError['tel']) ? $formError['tel'] : '' ?></p>
			</div>
                    
                    <div class="row input-field col s12 l12 right-align">
				<input name="address" value="<?= isset($address) ? $address : ($_SESSION['address']); ?>" id="address" type="address" class="active">
				<label for="address">Votre adresse</label>
				<p class="css" id="addressNameField"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
			</div>
			<div class="row input-field col s12 l12">
                            <button class="modal-close waves-effect waves-light btn red accent-1 modal-trigger"type="submit" name="submitFormModif">Modifier</button>
                            <button id="submitFormValidBtn" class="modal-close waves-effect waves-light btn red accent-2 modal-trigger" type="submit" name="submitFormValid">Valider</button>
			</div>
			<!-- ... <p><a id="linkForm" href="index.php">Vous êtes déjà inscrit?</a></p>-->
		</form>
	</div>
                        
                 
                    <div class="whiteSapce100"></div>
                     <?php include 'actionBtn.html'; ?>
                </div>
            </div>
        </div>
                                 <?php  include 'footer.html'; ?>
    </body>
</html>
