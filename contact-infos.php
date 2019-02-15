<?php
require_once 'controllers/controllerContactTrajets.php';
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
        <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Joindre le colibri : </h1>
        <div class="col s12 m12 l12">
                                    <table>
                                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                            <tr>
                                                <th>PRÉNOM</th>
                                                <th>NOM</th>
                                                <th>ADRESSE MAIL</th>
                                                <th>N° DE TÉLÉPHONE</th>
                                                <th></th>
                                            </tr>
                                        </thead>                  
                                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                            <tr>
                                            <td><?= $ContactObj->firstName; ?></td>
                                            <td></td>
                                            <td><?= $ContactObj->lastName; ?></td>
                                            <td></td>
                                            <td><?= $ContactObj->email; ?></td>
                                            <td></td>
                                            <td><?= $ContactObj->tel; ?></td>
                                            <td></td>
                                                <td><button><a href="liste-trajets.php" class="waves-effect waves-light btn-small white-text blue-grey">Retour</a></button></td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                    <table>
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


