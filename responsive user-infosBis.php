
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
                    <div class="row center-align">
                               <div class="col s12 m12 l12">
                               <span class="dotdotdot"></span>
                               </div>
                               <div class="col s12 m12 l12">
                               <img class="responsive-img" src="assets/car.png" width="200" height="200">
                               </div>
                        </div>
                              <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Vos Trajets : </h1>
                    <div class="card-content blue-grey-text text-blue-grey darken-3 forecast3  center-align ">
               <div class="row">
                                            <?php
// On affiche chaque entrée une à une
foreach ($arraytrajetUser as $rowUserTrajets) {
    ?>
                                        <span>
                                        <hr>
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
                                            <?php
}?>
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