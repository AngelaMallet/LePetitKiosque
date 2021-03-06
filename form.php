<?php if ($addSuccess) {
    ?>
<div class="row">
    <div class=" col s12 l12">
        <h1>Vous êtes enregistré !</h1>
    </div>
</div>
    <div class="row card-panel red accent-1 white-text text-white">
    <h2>Pour pouvoir valider votre inscription,</h2> 
    <h2>merci de vous rendre à la mairie avec votre carte d'identité.</h2>
</div>

<div class="row">
    <div class=" col s12 l12">
        <img  width="200" height="200" src="../LePetitKiosque/assets/merciColibri.png">
    </div>
</div>
<div class=" col s12 l12">
    <a href="index.php" id="registrationBtn" class=" waves-effect waves-red btn-large blue-grey lighten-2 modal-trigger s12 m6">Retour</a>
    
</div>

                            <?php
} else {
        ?>

<form id="form2" method="POST" class="col s12 l12" action="index.php">
    <h1 class="formTitle center-align red-text text-red accent-1">Formulaire d'inscription</h1>
    
    <div class="row input-field col s12 l6">
        <input name="firstName" value ="<?= isset($firstName) ? $firstName : ''; ?>" id ="firstName" type="text" class="active" />
        <label for="firstName">Prénom* <span class="NotValid" id="firstNameField"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></span></label>
    </div>
    <div class="row input-field col s12 l6">
        <input name="lastName" value = "<?= isset($lastName) ? $lastName : ''; ?>" id = "lastName" type="text" class = "active" />
        <label for="lastName">Nom* <span class="NotValid" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></span></label>
    </div>
    <div class="row input-field col s12 l6">
        <input name="email" value="<?= isset($email) ? $email : ''; ?>" id="email" type="email" class="active">
        <label for="email">Email* <span class="NotValid" id="emailNameField"><?= isset($formError['email']) ? $formError['email'] : ''; ?></span></label>    
    </div>
    <div class="row input-field col s12 l6">
        <input name="tel" value="<?= isset($tel) ? $tel : ''; ?>" id="tel" type="tel" maxlength="10" size="10" class="active">
        <label for="tel">N° de téléphone* <span class="NotValid" id="telNameField"><?= isset($formError['tel']) ? $formError['tel'] : ''; ?></span></label>   
    </div>
    
    <div class="row input-field col s12 l6">
        <input pattern=".{6,}" title="6 caracteres minimum" name="password" value="<?= isset($password) ? $password : ''; ?>" id="password" type="password" class="active">
        <label for="password">Mot de passe* <span class="NotValid" id="passwordField"><?= isset($formError['password']) ? $formError['password'] : ''; ?></span></label>    
    </div>
     
    <div class="row input-field col s12 l6">
        <input name="passwordConf" id="passwordConf" type="password" class="active">
        <label for="passwordConf">Confirmation du mot de passe* <span class="NotValid" id="passwordConfField"><?= isset($formError['passwordConf']) ? $formError['passwordConf'] : ''; ?></span></label>   
    </div>
    
    <div class="row input-field col s12 l12">
        <input name="address" value="<?= isset($address) ? $address : ''; ?>" id="address" type="text" class="active">
        <label for="address">Adresse <span class="NotValid" id="addressNameField"><?= isset($formError['address']) ? $formError['address'] : ''; ?></span><i> (facultatif)</i></label>
    </div>
    <div class="row input-field col s12 l12">
        <button class="waves-effect waves-light btn blue-grey lighten-2 modal-trigger" type="submit" name="submitForm">M'inscrire</button>
    </div> 
    <p id="pModalForm">Vous êtes déjà inscrit ? </p><a href="userLogin.php">S'identifier</a>
</form>
       <?php
    } ?>
 

