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
                            
                            <th>DÉTAILS</th>
                            
                            <th>CERTIFIÉ</th>
                            
                        </tr>
                    </thead>
                    <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($listUsersArray as $usersList) {
                        ?>

                        <tr>
                            <td><?=$usersList->firstName; ?></td>
                            
                            <td><?=$usersList->lastName; ?></td>
                            
                            <td><?=$usersList->email; ?></td>
                           
                            <td><?=$usersList->tel; ?></td>
                            
                            <td><button><a href="user-InfosBis.php?id=<?=$usersList->id_users; ?>"
                                        class="waves-effect waves-light btn-small white-text blue-grey">Informations</a></button>
                            </td>
                           
                            <td id="certifiedListeUsers" >
                                <form method="POST" action="">
                                    <label>
                                        <input class="with-gap" name="certified<?=$usersList->id_users; ?>" type="radio" value="0" <?= $usersList->certified == 0 ? 'checked' : ''; ?> />
                                        <span>Non</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="certified<?=$usersList->id_users; ?>" type="radio" value="1" <?= $usersList->certified == 1 ? 'checked' : ''; ?> />
                                        <span>Oui</span>
                                    </label>
                                    <button class="btn-floating btn-small waves-effect waves-light white-text blue-grey" type="submit" name="certifiedStatut" value="<?=$usersList->id_users; ?>"><i class="material-icons">beenhere</i></button>
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
    <?php include 'actionBtn.php'; ?>
  <!-- debut du footer -->
    <?php include 'footer.php'; ?>
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>

</html>