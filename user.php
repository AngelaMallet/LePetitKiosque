<?php include 'formController.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <h1 class="formTitle center-align">Votre compte</h1>
        <div class="container center-align">
            <div class="row">
                <form id="formUser" method="POST" class="col s12 l12" action="accountuser.php" >
                    <div class="row input-field col s12 l6">
                        <input name="login" value = "" id = "name" type="text" class = "active" />
                        <label for="login">Login</label>
                        <p class="css" id="loginField"><?= isset($formError['login']) ? $formError['login'] : '' ?></p>
                    </div>    
                    <div class="row input-field col s12 l6">
                        <input name="password" value = "" id = "passeword" type="password" class = "active" />
                        <label for="passeword">Mot de passe</label>
                        <p class="css" id="password"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                    </div>
               
                    <div class="row input-field col s12 l6">
                        <button class="modal-close waves-effect waves-light btn orange darken-1" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="assets/js/materialize.js"></script>
        <script src="assets/js/js.js"></script>
    </body>
</html>
