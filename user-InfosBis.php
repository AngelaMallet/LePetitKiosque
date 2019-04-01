<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerUserLoginTrajetBis.php';
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
    <title>Vos informations </title>
</head>

<body>
    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
    <div class="container">

            <div class="card horizontal">
                <div class="card-image">
                    <img class="responsive-img hide-on-small-only" src="assets/car.png" width="200" height="200">
                </div>
                <div class="card-stacked">
                <div class="row  center-align">
                    <div class="col s12 m12 l12">
                        <span class="dotdot2"></span>
                            </div>
                        </div>
                    <div class="card-content">
                        <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos informations</h1>
                        <div class="col s12 m12 l12">
                            <table class="responsive-table"">
                                <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <th>PRÉNOM</th>
                                        <th>NOM</th>
                                        <th>ADRESSE MAIL</th>

                                    </tr>
                                </thead>
                                <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <td><?=isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?></td>
                                        <td><?=isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?></td>
                                        <td><?=isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></td>
                                    </tr>
                                </tbody>
                                <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <th>TÉLÉPHONE</th>
                                        <th>ADRESSE</th>
                                        <th>PROFIL</th>

                                    </tr>
                                </thead>
                                <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <td><?=isset($_SESSION['tel']) ? $_SESSION['tel'] : ''; ?></td>
                                        <td><?=isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></td>
                                        <td><button><a href="accountuserModif.php" class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        </div>
                    </div>
                        </div>

                            <div class="card-stacked">
                            <div class="row center-align">

                        <div class="col s12 m12 l12">
                        <span class="dotdotdot"></span>
                        </div>
                        <div class="col s12 m12 l12">
                        <img class="responsive-img" src="assets/undraw_smiley_face_lmgm.png" width="300" height="300">
                        </div>
                 </div>
                       <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos Trajets : </h1>
                              <div class="col s12 m12 l12 forecast3">
                        <?php
if (!empty($arraytrajetUser)) {
    ?>
                       <table class="responsive-table">
                                            <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                                <tr>
                                                    <th>SERVICE</th>

                                                    <th>DATE</th>

                                                    <th>HEURE</th>

                                                    <th>DÉPART</th>

                                                    <th>ARRIVÉE</th>

                                                    <th class="center-align"><i class="small material-icons">delete_sweep</i></th>

                                                    <th class="center-align"><i class="small material-icons">autorenew</i></th>

                                                </tr>
                                            </thead>
                                            <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                            <?php
// On affiche chaque entrée une à une du tableau
    foreach ($arraytrajetUser as $rowUserTrajets) {
        ?>


                                                <tr>
                                                    <td><?=$rowUserTrajets->typesName; ?></td>

                                                    <td><?=$rowUserTrajets->date; ?></td>

                                                    <td><?=$rowUserTrajets->hour; ?></td>

                                                    <td><?=$rowUserTrajets->location_choice_name_aller; ?></td>

                                                    <td><?=$rowUserTrajets->location_choice_name_retour; ?></td>

                                                    <td class="center-align">
                                                        <form method="post" action="">
                                                            <button class="waves-effect waves-light btn-small white-text  blue-grey lighten-2" type="submit" name="deleteTrajet" value="<?=$rowUserTrajets->id_transports; ?>">Supprimer</button>
                                                        </form>
                                                    </td>
                                                    <td class="center-align"><button><a href="TrajetFormModif.php?id_transports=<?=$rowUserTrajets->id_transports; ?>"
                                                                class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button>
                                                    </td>

                                                </tr>

                                            <?php
    } ?>
                                        </table>
<?php
}?>
                        </tbody>
                                    </div>
 <div class="card-action center-align" id="paddingBtnAddOnUserInfosBis">
                                    <a id="btnHrefUserInfos" class="blue-grey-text text-blue-grey darken-3" href="TrajetForm.php">Offrir une place</a>
                                </div>
                            </div>

        </div>

        <!-- Modal Structure -->
    <div id="modal1" class="modal <?=isset($_POST['deleteTrajet']) ? 'modalError' : ''; ?>">
    <div class="modal-content center-align blue-grey-text text-blue-grey darken-3">
 <div class="col s12 m12 offset-l2 l8">
        <img src="assets/trash.png" alt="image logOut" height="350" width="350" class="rignt-align responsive-img">
        <h1 class="headerDelete">Je valide la suppression de mon trajet</h1>
      </div>




         <!--- <button type="submit" name="deleteTrajet"-->
         <form method="POST" class="col s12 m12 l12" action="">
            <div class="row">
                <div class="col s12 m12 l12 center-align">
                <input type="hidden" name="id_transports" value="<?=isset($_POST['deleteTrajet']) ? $_POST['deleteTrajet'] : ''; ?>" />
                <input type="submit" name="confirmDeleteTrajet" id="btnDeleteTrajet" class="btn-waves-effect waves-light btn-small white-text blue-grey" value="Supprimer" />
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
    </div>
    <!-- debut du footer -->
    <?php include 'footer.php'; ?>
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>

</html>