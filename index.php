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
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

		<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="assets/css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8" />
		<title>CauxLibri</title>
	</head>
	<body>

		<header>
			<!-- header et navbar -->
			<div class="navbar-fixed grid-example row s12">
				<nav>
					<div class="nav-wrapper white">
						<ul class="right">
							<li><a href="#home" class="orange-text text-orange accent-3">Accueil</a></li>
							<li><a href="projet.php" class="orange-text text-orange accent-3">Le projet</a></li>

							<!-- Modal Trigger -->
							<li><a href="#modal2" id="btnModal2" class="modal-close waves-effect waves-light btn orange accent-3 modal-trigger animated bounceOutLeft">Votre compte<i id="icone" class="material-icons right">account_circle</i></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--Fin du header et navbar -->
		<div id="headerBackground"class="container">
			<div class="row">
				<div class="col s12 m12 center-align amber-text text-lighten-5">
					<h1 id="h1title">Caux<i>libri</i></h1>
					<div class="col s12 m12 center-align amber-text text-lighten-5">
						<p>Nous pouvons tous rendre service d'une manière ou d'une autre.</p>
						<p>CAUX<i>libri</i> souhaite mettre les personnes en contact pour mutualiser les déplacements et<br>
							rompre l'isolement des personnes non motorisées.</p>
						<p>Il est possible par exemple de prendre des voisins dans sa voiture lors des trajets quotidiens. <br>
							D'accompagner d'autres enfants du même village quand nous allons chercher notre enfant au collège ou lycée.</p>
						<p>Et pourquoi ne pas prendre une personne agée avec nous pour nous rendre dans le village voisin faire ses courses?</p>
						<p><strong>Et vous comment pouvez-vous devenir CAUX<i>libri</i> ?</strong></p>



						<!--                            <h1 id="h1title">Caux<i>libri</i></h1>
<div id="presentation" class="col s12 m12 center-align hide-on-small-only">
<p>“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</p>
<p class="center-align">Et le colibri lui répondit :« Je le sais, mais je fais ma part. »”</p>
</div>
<div id="presentationMini" class="col s12 m12 right-align hide-on-large-only">
<p>“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</p>
<p class="center-align">Et le colibri lui répondit :« Je le sais, mais je fais ma part. »”</p>
</div>-->
						<!-- Modal Trigger -->
					</div>
					<a href="#modal1" class="modal-close waves-effect waves-light btn-large red light-1 modal-trigger">Inscription</a>
				</div>
				<!-- Modal Structure inscription-->
				<div id="modal1" class="modal <?= $modalError ? 'modalError' : ''; ?> modal-fixed-footer">
					<div class="modal-content center-align">
						<?php include 'form.php'; ?>
					</div>
				</div>
				<!-- Modal Structure connection-->
				<div id="modal2" class="modal <?= $modalError ? 'modalError' : ''; ?> modal-fixed-footer">
					<div class="modal-content center-align">
						<?php include 'user.php'; ?>
					</div>
				</div>
			</div>
		</div>


		<div class="fixed-action-btn">
			<a class="btn-floating btn-large red light-1">
				<i class="large material-icons">mode_edit</i>
			</a>
			<ul>
				<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
				<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
				<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
				<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
			</ul>
		</div>


		<!-- debut du footer -->
		<footer class="page-footer orange darken-1">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">CAUX<i>libri</i></h5>
						<p class="grey-text text-lighten-4">Vous pouvez nous suivre sur les réseaux sociaux.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Informations</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">À propos</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Compte client</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Billetterie</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
						</ul>
					</div>
					<div class="container-fluid p-0">
						<iframe src="http://www.openstreetmap.org/export/embed.html?bbox=0.19037246704101565%2C49.4363197912898%2C0.3757667541503906%2C49.52398262185174&amp;layer=mapnik" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<p>© 2018 Copyright CAUX<i>libri</i></p>
				</div>
			</div>
		</footer>
		<!-- fin du footer -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		   <script type="text/javascript" src="assets/js/js.js"></script>
	</body>
</html>
