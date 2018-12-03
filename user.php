<?php include 'formController.php'; ?>
        <h1 class="formTitle center-align">Votre compte</h1>
        <div class="container center-align">
            <div class="row">
                <form id="formUser" method="POST" class="col s12 l12" action="accountuser.php" >
                    <div class="row input-field col s12 l6">
                        <input name="login" value = "" id = "name" type="text" class = "active" />
                        <label for="login">Login</label>
                        <p class="css" id="loginField"><?= isset($formError['login']) ? $formError['login'] : '' ?></p>
                    </div>
                     <div class="row">
                            <div class="input-field col s12 l6">
                                <input name="password" value="" id="password" type="password" class="active">
                                <label for="password">Mot de passe</label>
                               <p class="css" id="passwordField"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                            </div>
                        </div>

                    <div class="row input-field col s12 l6">
                        <button class="modal-close waves-effect waves-light btn orange darken-1" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
