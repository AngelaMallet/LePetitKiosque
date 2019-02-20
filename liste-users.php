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
                <table>
                    <thead class="highlight blue-grey-text text-blue-grey darken-3">
                        <tr>
                            <th>NOM</th>
                            <th></th>
                            <th>PRÉNOM</th>
                            <th></th>
                            <th>E-MAIL</th>
                            <th></th>
                            <th>TÉLÉPHONE</th>
                            <th></th>
                            <th>DÉTAILS</th>
                            <th></th>
                            <th>CERTIFIÉ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($listUsersArray as $usersList) {
                        ?>

                    <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                        <tr>
                            <td><?=$usersList->firstName; ?></td>
                            <td></td>
                            <td><?=$usersList->lastName; ?></td>
                            <td></td>
                            <td><?=$usersList->email; ?></td>
                            <td></td>
                            <td><?=$usersList->tel; ?></td>
                            <td></td>
                            <td><button><a href="user-InfosBis.php?id=<?=$usersList->id_users; ?>"
                                        class="waves-effect waves-light btn-small white-text blue-grey">Informations</a></button>
                            </td>
                            <td></td>
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
                                    <button class="btn waves-effect waves-light" type="submit" name="certifiedStatut" value="<?=$usersList->id_users; ?>">Envoyer</button>
                                </form>
                            </td>
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