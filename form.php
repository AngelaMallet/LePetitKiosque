
<h1 class="formTitle center-align red-text text-red accent-1">Formulaire d'inscription</h1>
<div class="container center-align">
	<div class="row">
		<form id="form" method="POST" class="col s12 l12" action="index.php">
			<div class="row input-field col s12 l6">
				<input name="fistName" value ="<?= isset($name) ? $name : ''; ?>" id ="fistName" type="text" class="active" />
				<label for="name">Prénom</label>
				<p class="css" id="firstNameField"><?= isset($formError['fistName']) ? $formError['fistName'] : '' ?></p>
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
			<div class="row">
				<div class="input-field col s12 l6">
					<input name="password" value="<?= isset($password) ? $password : ''; ?>" id="password" type="password" class="active">
					<label for="password">Mot de passe</label>
					<p class="css" id="passwordField"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
				</div>
			</div>
                    <div class="row input-field col s12 l6">
				<input name="tel" value="<?= isset($tel) ? $tel : ''; ?>" id="tel" type="tel" class="active">
				<label for="tel">N° de téléphone</label>
				<p class="css" id="telNameField"><?= isset($formError['tel']) ? $formError['tel'] : '' ?></p>
			</div>
                    <div class="row input-field col s12 l6">
				<input name="address" value="<?= isset($address) ? $address : ''; ?>" id="address" type="address" class="active">
				<label for="address">Votre adresse</label>
				<p class="css" id="addressNameField"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
			</div>
			<div class="row input-field col s12 l12">
				<button class="modal-close waves-effect waves-light btn red accent-1 modal-trigger" type="submit" name="submitForm">M'inscrire</button>
                            <button><a href="accountuser.php" class="modal-close waves-effect waves-light btn red accent-2 modal-trigger">S'identifier</a></button>
			</div>
			<!-- ... <p><a id="linkForm" href="index.php">Vous êtes déjà inscrit?</a></p>-->
		</form>
	</div>

</div>
     