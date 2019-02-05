
<div class="container">  
    <h1 class="formTitle center-align red-text text-red accent-1">Formulaire d'inscription</h1>
    
    <div class="row">
        <form id="form" method="POST" class="col s12 offset-l2" action="index.php">
            <div class="row input-field col s12 l12">
                <input name="firstName" value ="<?= isset($firstName) ? $firstName : ''; ?>" id ="firstName" type="text" class="active" />
                <label for="firstName">Prénom*</label>
                <p class="css" id="firstNameField"><?= isset($formError['firstName']) ? $formError['firstName'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l12">
                <input name="lastName" value = "<?= isset($lastName) ? $lastName : ''; ?>" id = "lastName" type="text" class = "active" />
                <label for="lastName">Nom*</label>
                <p class="css" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l12">
                <input name="email" value="<?= isset($email) ? $email : ''; ?>" id="email" type="email" class="active">
                <label for="email">Email*</label>
                <p class="css" id="emailNameField"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
            </div>
            <div class="row">
                <div class="input-field col s12 l12">
                    <input pattern=".{6,}" title="6 caracteres minimum" name="password" value="<?= isset($password) ? $password : ''; ?>" id="password" type="password" class="active">
                    <label for="password">Mot de passe*</label>
                    <p class="css" id="passwordField"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l12">
                    <input name="passwordConf" id="passwordConf" type="password" class="active">
                    <label for="passwordConf">Confirmation du mot de passe*</label>
                    <p class="css" id="passwordConfField"><?= isset($formError['passwordConf']) ? $formError['passwordConf'] : '' ?></p>
                </div>
            </div>
            <div class="row input-field col s12 l12">
                <input name="tel" value="<?= isset($tel) ? $tel : ''; ?>" id="tel" type="tel" class="active">
                <label for="tel">N° de téléphone*</label>
                <p class="css" id="telNameField"><?= isset($formError['tel']) ? $formError['tel'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l12">
                <input name="address" value="<?= isset($address) ? $address : ''; ?>" id="address" type="text" class="active">
                <label for="address">Adresse</label>
                <p class="css" id="addressNameField"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l12">
                <button class="waves-effect waves-light btn red accent-1 modal-trigger" type="submit" name="submitForm">M'inscrire</button>
            </div>
            
            <div class="row">
                <div class="col s12 l12">
                    <h6>Vous êtes déjà inscrit ? </h6><a href="user.php">S'identifier</a>
                </div>    
            </div>
        </form>
    </div>
</div>

