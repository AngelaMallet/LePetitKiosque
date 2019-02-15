<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerUserLoginTrajet.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />

        <title>Vos informations </title>
    </head>
    <body>
        <header>
            <!-- header et navbar -->
            <?php include 'nav.php'; ?>
        </header>
        <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos informations : </h1>
        <div class="col s12 m12 l12">
                                    <table>
                                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                            <tr>
                                                <th>PRÉNOM</th>
                                                <th>NOM</th>
                                                <th>ADRESSE MAIL</th>
                                                <th>N° DE TÉLÉPHONE</th>
                                                <th>ADRESSE</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                            <tr>
                                                <td><?=isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?></td>
                                                <td><?=isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?></td>
                                                <td><?=isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></td>
                                                <td><?=isset($_SESSION['tel']) ? $_SESSION['tel'] : ''; ?></td>
                                                <td><?=isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></td>
                                                <td><button><a href="accountuserModif.php" class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos Trajets : </h1>
        <div class="col s12 m12 l12">
                    <table>
                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <th>SERVICE</th>
                                <th></th>
                                <th>DATE</th>
                                <th></th>
                                <th>HEURE</th>
                                <th></th>
                                <th>DÉPART</th>
                                <th></th>
                                <th>ARRIVÉE</th>
                                <th></th>
                                <th>CONTACT</th>
                                <th></th>
                            </tr>
                        </thead> 
                                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($arraytrajetUser as $rowUserTrajets) {
                        ?>
                        
                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <td><?= $rowUserTrajets->typesName; ?></td>
                                <td></td>
                                <td><?= $rowUserTrajets->date; ?></td>
                                <td></td>
                                <td><?= $rowUserTrajets->hour; ?></td>
                                <td></td>
                                <td><?= $rowUserTrajets->location_choice_name_aller; ?></td>
                                <td></td>
                                <td><?= $rowUserTrajets->location_choice_name_retour; ?></td>
                                <td></td>
                                <td><button><a href="contact-infos.php?id=<?= $rowUserTrajets->id_users; ?>" class="waves-effect waves-light btn-small white-text blue-grey">Détails</a></button></td>
                                <td></td>
                            </tr>   
                        </tbody>
                             <?php
                    }
                    ?>
                                    </table>
                                </div>
                            </div>
                        </div>
        <?php include 'actionBtn.php'; ?>

        <div class="whiteSapce200"></div>
        <!-- debut du footer -->
         <?php include 'footer.php'; ?>
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>
</html>


