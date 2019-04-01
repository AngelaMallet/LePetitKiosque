<?php
require_once 'controllers/controllerListAllUsers.php';
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
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />
    <link rel="icon" href="assets/logoOnglet.png" />
    <title>CauxLibri</title>
</head>

<body>
    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
    <div class="container">
        <div class="row">
            <h1>Liste des colibris : </h1>
            <div class="col s12 m6 l10">
                <table class="responsive-table">
                    <thead class="blue-grey-text text-blue-grey darken-3">
                        <tr>
                            <th>NOM</th>
                            <th>PRÉNOM</th>
                            <th>E-MAIL</th>
                            <th>TÉLÉPHONE</th>
                            <th class="center-align">CERTIFIÉ</th>
                            <th class="center-align">UTILISATEUR</th>
                        </tr>
                    </thead>
                    <tbody class="blue-grey-text text-blue-grey darken-3">
                        <?php
                    // On affiche chaque entrée une à une
                    foreach ($listUsersArray as $usersList) {
                        ?>
                        <tr>
                            <td><?=$usersList->firstName; ?></td>
                            <td><?=$usersList->lastName; ?></td>
                            <td><?=$usersList->email; ?></td>
                            <td><?=$usersList->tel; ?></td>
                            <td id="certifiedListeUsers">
                                <form method="POST" action="">
                                    <label>
                                        <input class="with-gap" name="certified<?=$usersList->id_users; ?>" type="radio"
                                            value="0" <?=$usersList->certified == 0 ? 'checked' : ''; ?> />
                                        <span>Non</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="certified<?=$usersList->id_users; ?>" type="radio"
                                            value="1" <?=$usersList->certified == 1 ? 'checked' : ''; ?> />
                                        <span>Oui</span>
                                    </label>
                                    <button class="btn-floating btn-small waves-effect waves-light white-text teal lighten-2"
                                        type="submit" name="certifiedStatut" value="<?=$usersList->id_users; ?>"><i
                                            class="material-icons">beenhere</i></button>
                                </form>
                            </td>
                            <td class="center-align">
                                                        <form method="post" action="">
                                                            <button class="waves-effect waves-light btn-small white-text  red darken-2" type="submit" name="confirmDeleteUser" value="<?=$usersList->id_users; ?>">Supprimer</button>
                                                        </form>
                                                    </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Modal Structure -->
        <div id="modal" class="modal <?=isset($_POST['confirmDeleteUser']) ? 'modalError' : ''; ?>">
    <div class="modal-content center-align blue-grey-text text-blue-grey darken-3">
 <div class="col s12 m12 offset-l2 l8">
        <img src="assets/trash.png" alt="image logOut" height="350" width="350" class="rignt-align responsive-img">
        <h1 class="headerDelete">Je valide la suppression de l'utilisateur</h1>
      </div>




         <!--- <button type="submit" name="confirmDeleteUser"-->
         <form method="POST" class="col s12 m12 l12" action="">
            <div class="row">
                <div class="col s12 m12 l12 center-align">
                <input type="hidden" name="id_users" value="<?=isset($_POST['confirmDeleteUser']) ? $_POST['confirmDeleteUser'] : ''; ?>" />
                <input type="submit" name="confirmDeleteUser" id="confirmDeleteUser" class="btn-waves-effect waves-light btn-small white-text blue-grey" value="Supprimer" />
                </div>
            </div>
         </form>
         <div class="row">
<div class="modal-footer-center">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat blue-grey-text text-blue-grey darken-3">Annuler</a>
    </div>
</div>
</div>
</div>

    <?php include 'actionBtn.php'; ?>
    <!-- debut du footer -->
   
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>

</html>