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

    <title>Vos informations </title>
</head>

<body>
    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
    <div class="container hide-on-med-and-down">
        <div class="col s12 m12 l12">
            <div class="card horizontal">
                <div class="card-image">
                    <img
                        src="https://3ofvx46qtnlmlz7at9pt1ba-wpengine.netdna-ssl.com/wp-content/uploads/sites/2/2019/01/undraw_usability_testing_2xs4.png">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos informations :
                        </h1>
                        <div class="col s12 m12 l12">
                            <table>
                                <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <th>PRÉNOM</th>
                                        <th>NOM</th>
                                        <th>ADRESSE MAIL</th>
                                        <th></th>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                    <tr>
                                        <td><?=isset($_SESSION['tel']) ? $_SESSION['tel'] : ''; ?></td>
                                        <td><?=isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></td>
                                        <td><button><a href="accountuserModif.php"
                                                    class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <div class="card horizontal" >
                            <div class="card-stacked">
                            <div class="row  center-align">
                    <div class="col s12 m12 l12">
                        <span class="dotdot"></span>
                            </div>
                        </div>
                              <div class="col s12 m12 l12 forecast">
                         <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos
                                            Trajets : </h1>
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
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <?php
                                            // On affiche chaque entrée une à une
                                            foreach ($arraytrajetUser as $rowUserTrajets) {
                                                ?>

                                            <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                                <tr>
                                                    <td><?=$rowUserTrajets->typesName; ?></td>
                                                    <td></td>
                                                    <td><?=$rowUserTrajets->date; ?></td>
                                                    <td></td>
                                                    <td><?=$rowUserTrajets->hour; ?></td>
                                                    <td></td>
                                                    <td><?=$rowUserTrajets->location_choice_name_aller; ?></td>
                                                    <td></td>
                                                    <td><?=$rowUserTrajets->location_choice_name_retour; ?></td>
                                                    <td></td>
                                                    <td><button><a
                                                                href="contact-infos.php?id=<?=$rowUserTrajets->id_users; ?>"
                                                                class="waves-effect waves-light btn-small white-text blue-grey lighten-2">Supprimer</a></button>
                                                    </td>
                                                    <td></td>
                                                    <td><button><a
                                                                href="contact-infos.php?id=<?=$rowUserTrajets->id_users; ?>"
                                                                class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                               
                                <div class="card-action center-align">
                                    <a id="btnHrefUserInfos" class="blue-grey-text text-blue-grey darken-3"
                                        href="TrajetForm.php">Ajouter un trajet</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container hide-on-med-and-up">
        <div class="col s12 m12 l12">
        <div class="card-image">
                    <img class="responsive-img" src="https://3ofvx46qtnlmlz7at9pt1ba-wpengine.netdna-ssl.com/wp-content/uploads/sites/2/2019/01/undraw_usability_testing_2xs4.png">
                </div>
            <div class="card horizontal">
               <div class="card-stacked">
                    <div class="card-content blue-grey-text text-blue-grey darken-3 forecast2  center-align ">
                        <h1 class="formTitle blue-grey-text text-blue-grey darken-3">Vos informations</h1>
               <div class="row">
                                        <p><mark>PRÉNOM</mark></p>
                                        <p><?=isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?></p>
                                        <p><mark>NOM</mark></p>
                                        <p><?=isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?></p>
                                        <p><mark>ADRESSE MAIL</mark></p>
                                        <p><?=isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></p>
                                        <p><mark>TÉLÉPHONE</mark></p>
                                        <p><?=isset($_SESSION['tel']) ? $_SESSION['tel'] : ''; ?></p>
                                        <p><mark>ADRESSE</mark></p>
                                        <p><?=isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></p>
                        </div>
                        <button><a href="accountuserModif.php"
                                                    class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button>
                        
                       
                       
                    </div>
                    <div class="card-content blue-grey-text text-blue-grey darken-3 forecast2  center-align ">
                        <h1 class="formTitle blue-grey-text text-blue-grey darken-3">Vos informations</h1>
               <div class="row">
                                            <?php
                                            // On affiche chaque entrée une à une
                                            foreach ($arraytrajetUser as $rowUserTrajets) {
                                                ?>
                                        <span>
                                                    <P><mark>SERVICE</mark></p>
                                                    <p><?=$rowUserTrajets->typesName; ?></p>
                                                    <p><mark>DATE</mark></p>
                                                    <p><?=$rowUserTrajets->date; ?></p>
                                                    <p><mark>HEURE</mark></p>
                                                    <p><?=$rowUserTrajets->hour; ?></p>
                                                    <p><mark>DÉPART</mark></p>
                                                    <p><?=$rowUserTrajets->location_choice_name_aller; ?></p>
                                                    <p><mark>ARRIVÉE</mark></p>
                                                    <p><?=$rowUserTrajets->location_choice_name_retour; ?></p>
                                                    <button><a
                                                                href="contact-infos.php?id=<?=$rowUserTrajets->id_users; ?>"
                                                                class="waves-effect waves-light btn-small white-text blue-grey lighten-2">Supprimer</a></button>
                                                    <button><a
                                                                href="contact-infos.php?id=<?=$rowUserTrajets->id_users; ?>"
                                                                class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button>
                                            </span>
                                            <hr>
                                            <?php
                                            } ?>
                                    </div>
                                    <div class="card-action center-align" id="btnHrefUserInfos2" >
                                    <a class="blue-grey-text text-blue-grey darken-3"
                                        href="TrajetForm.php">Ajouter un trajet</a>
                                </div>
                    </div>
                               
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