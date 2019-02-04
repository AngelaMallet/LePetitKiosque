<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Compte client</title>
    </head>
    <body>
        <!-- header et navbar -->
		<?php include 'nav.html'; ?>
        <div>
            <div class="row">
                <div class="container center-align">
                    <div class="whiteSapce100"></div>
                    <div class="row">
                        <div>
                            <img class="col s12 m6 l6 responsive-img" id="accountImg" src="assets/account.png">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 s12">
                                    <h1>Profil patient :</h1>
                                </div>
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
                                                <td><?= isset($fistName) ? $fistName : ($_SESSION['fistName']); ?></td>
                                                <td><?= isset($lastName) ? $lastName : ($_SESSION['lastName']); ?></td>
                                                <td><?= isset($email) ? $email : ($_SESSION['email']); ?></td>
                                                <td><?= isset($tel) ? $tel : ($_SESSION['tel']); ?></td>
                                                <td><?= isset($address) ? $address : ($_SESSION['address']); ?></td>
                                                
                                                <td><button><a href="accountuserModif.php" class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button></td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                    <table>
                                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                                            <tr>
                                                <th>Vos trajets : </th>  
                                            </tr>      
                                        </thead>
                                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="whiteSapce100"></div>
                     <?php include 'actionBtn.html'; ?>
                </div>
            </div>
        </div>
                                 <?php  include 'footer.html'; ?>
    </body>
</html>
