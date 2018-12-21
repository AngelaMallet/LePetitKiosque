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




		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="assets/undraw_smiley_face_lmgm.png">
					</div>
					<div class="card-content">
						<span class="card-title activator card-panel red white-text accent-1"><p>TRAJETS PONCTUELS<i class="material-icons right">more_vert</i></p></span>

					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Trajets ponctuels<i class="material-icons right">close</i></span>
						<h1>Vous recherchez une place pour vous rendre :</h1>
						<div id="cardList" class="left-align">
							<ul>
								<li>Dans le village voisin ?</li>
								<li>Au lycée hors transports scolaire ?</li>
								<li>Faire les couses au supermarché ?</li>
								<li>À la gare ?</li>
								<li>Etc ...</li>
							</ul>
						</div>
						<p>Vous êtes au bon endroit !</p>
						<div class="whiteSapce100"></div>
						<a href="offerForm.php" class="waves-effect waves-red btn-small deep-orange darken-1">Offrir une place</a>
						<a class="waves-effect waves-red btn-small deep-orange darken-1">Voir les offres</a>
						
					</div>				
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="assets/map.png">
					</div>
					<div class="card-content">
						<span class="card-title activator card-panel red white-text accent-1"><p>TRAJETS RÉGULIERS<i class="material-icons right">more_vert</i></p></span>

					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Trajets réguliers<i class="material-icons right">close</i></span>
						<h1>Vous faites régulièrement le même trajet ?</h1>
						<h2>Pourquoi ne pas y aller à plusieurs ?</h2>
						<p>Avoir la possibilité de créer des liens <br>tout en faisant un geste pour notre planète,<br> que demander de mieux ?</p>
						<div class="whiteSapce130"></div>
						<a href="offerForm.php" class="waves-effect waves-red btn-small deep-orange darken-1">Offrir une place</a>
						<a class="waves-effect waves-red btn-small deep-orange darken-1">Voir les offres</a>
					</div>
				</div>
			</div>
		</div>

		<!-- fin du footer -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script type="text/javascript" src="assets/js/js.js"></script>
	</body>
</html>
