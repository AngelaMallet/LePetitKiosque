<h1 class="formTitle center-align">Formulaire d'inscription</h1>
<div class="container center-align">
    <div class="row">
        <form id="form" method="POST" class="col s12 l12" action="index.php">
            <div class="row input-field col s12 l6">
                <input name="name" value ="<?= isset($name) ? $name : ''; ?>" id ="name" type="text" class="active" />
                <label for="name">Prénom</label>
                <p class="css" id="firstNameField"><?= isset($formError['name']) ? $formError['name'] : '' ?></p>
            </div>
            <div class="row input-field col s12 l6">
                <input name="lastName" value = "<?= isset($lastName) ? $lastName : ''; ?>" id = "lastName" type="text" class = "active" />
                <label for="lastName">Nom</label>
                <p class="css" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
            </div>
            <div class="row">
                <div class="col s12 l6">
                    <div class="input-field inline">
                        <input name="email" value="<?= isset($email) ? $email : ''; ?>" id="email" type="email" class="active">
                        <label for="email">Email</label>
                        <p class="css" id="emailNameField"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <input name="password" value="<?= isset($password) ? $password : ''; ?>" id="password" type="password" class="active">
                        <label for="password">Mot de passe</label>
                        <p class="css" id="passwordField"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <p>
                            <label>
                                <input name="choix" type="radio" value="Madame" class="active" <?= isset($choix)? ($choix == 'Madame') ? 'checked' : '' : ''; ?> />
                                <span>Femme</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field col s12 l6">
                        <p>
                            <label>
                                <input name="choix" type="radio" value="Monsieur" class="active" <?= isset($choix)? ($choix == 'Monsieur') ? 'checked' : '' : ''; ?> />
                                <span>Homme</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row input-field col s12 l12">
                    <button class="modal-close waves-effect waves-light btn orange darken-1" type="submit" name="submit">M'inscrire
                        <i class="material-icons right">account_circle</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
