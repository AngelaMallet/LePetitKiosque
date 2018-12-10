<h1 class="formTitle center-align">Votre compte</h1>
        <div class="container center-align">
            <div class="row">
                <form id="formUser" method="POST" class="col s12 l12" action="index.php" >
                    <div class="row input-field col s12 l6">
                        <input name="confimLogin" value = "" id = "confimLogin" type="text" class = "active" />
                        <label for="confimLogin">Login</label>
                        <p class="css" id="confimLoginField"><?= isset($formError['confimLogin']) ? $formError['confimLogin'] : '' ?></p>
                    </div>
                     <div class="row">
                            <div class="input-field col s12 l6">
                                <input name="confirmPassword" value="" id="confirmPassword" type="password" class="active">
                                <label for="confirmPassword">Mot de passe</label>
                               <p class="css" id="confirmPasswordField"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></p>
                            </div>
                        </div>

                    <div class="row input-field col s12 l12">
                        <button class="modal-close waves-effect waves-light btn orange darken-1" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
