
<?php
session_start(); // On démarre la session AVANT toute chose
include ('indexController.php');
// header qui change en fonction d'une variable
if ((count($formError) == 0) && isset($_POST['submit'])) {
	header('Location:account.php');
}

if ((count($formError) != 0) && isset($_POST['submit'])) {
	$modalError = true;
}
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
		<link rel="stylesheet" href="assets/css/materialize.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8" />
		<title>CauxLibri</title>
	</head>
	<body>
		<!-- header et navbar -->
		<?php include 'nav.html'; ?>


		<div id="projetFrame" class="container center-align">
			<div class="row">
				<div class="col s12 m6 left-align">
					<h1 id="projetH1">Comment devenir un CAUX<i>libri</i> ?</h1>
					<div class="col s12 m8 left-align">
						<p>“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</p>
						<p class="center-align">Et le colibri lui répondit :« <i>Je le sais, mais je fais ma part.</i> »”</p>
					</div>
				</div>
				<div class="hide-on-small-only">
					<div class="col s12 m6 center-align">
						<img  width="500" height="400" src="../LePetitKiosque/assets/chat.png">
					</div>
				</div>

			</div>
			<?php include 'actionBtn.html'; ?>
			<div class="whiteSapce100"></div>
			<div class="modal-footer center-align">
				<a href="#modal1" class="modal-close waves-effect waves-light btn-large red accent-1">Inscription</a>
				<a href="index.php" class="modal-close waves-effect waves-light btn-large red accent-1">Retour</a>
			</div>
		</div>

		<!-- fin du footer -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<!--        <script ype="text/javascript" src="assets/js/js.js"></script>-->
		<script>
			$(document).ready(function () {
				// on initialise toutes les modals
				$('.modal').modal();

				// seul les modals error restent/vont s'ouvrir
				$('.modalError').modal('open');

				$('.fixed-action-btn').floatingActionButton();
			});
		</script>
	</body>
</html>
