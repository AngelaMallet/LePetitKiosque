<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerListTrajets.php';
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
        <div class="col s12 m12">
            <div class="card-stacked">
                <div class="card-content">
                    <div class="row center-align">
                        <h1 class="center-align souligner">Liste des trajets</h1>
                        <img class="responsive-img" src="../LePetitKiosque/assets/liste.png" height="250" width="250">
                        <div class="col s12 m6 l12">
                            <table class="responsive-table highlight" id="backgroundColorListTrajets">
                                <thead class="blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <th>SERVICE</th>

                                        <th>DATE</th>

                                        <th>HEURE</th>

                                        <th>DÉPART</th>

                                        <th>ARRIVÉE</th>

                                        <th>CONTACT</th>

                                    </tr>
                                </thead>
                                <tbody class="blue-grey-text text-blue-grey darken-3">
                                    <?php
                                    // On affiche chaque entrée une à une
                                    foreach ($listTrajetArray as $rowtrajets) {
                                        ?>
                                    <tr>
                                        <td><b><?=$rowtrajets->typesName; ?></b></td>

                                        <td><?=$rowtrajets->date; ?></td>

                                        <td><?=$rowtrajets->hour; ?></td>

                                        <td><?=$rowtrajets->location_choice_name_aller; ?></td>

                                        <td><?=$rowtrajets->location_choice_name_retour; ?></td>

                                        <td><button><a href="contact-infos.php?id=<?=$rowtrajets->id_users; ?>"
                                                    class="waves-effect waves-light btn-small white-text blue-grey">Prendre
                                                    contact</a></button>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    </table>
                </div>
                <div class="card-action center-align" id="btnListe-trajetsBis">
                    <a href="index.php" class="waves-effect waves-light btn-small blue-grey lighten-3">Retour</a>
                </div>
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