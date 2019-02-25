
                    <?php if (!isset($_SESSION['id_users'])) {
    ?>
		<div class="fixed-action-btn hide-on-large-only">
			<a class="btn-floating btn-medium blue-grey">
				<i class="small material-icons">menu</i>
			</a>
			<ul class="ulBtnAction">
														<div data-tooltip="ACCUEIL"><li><a href="index.php" class="btn-floating  deep-orange lighten-4"><i class="material-icons">home</i></a></li></div>
														<div data-tooltip="INSCRIPTION"><li><a id="subscribe" href="index.php?openRegistration" class="btn-floating  deep-orange lighten-4"><i class="material-icons">input</i></a></li></div>
														<div data-tooltip="LOG IN"><li><a href="userLogin.php" class="btn-floating  deep-orange lighten-4"><i class="material-icons">account_box</i></a></li></div>
			</ul>
		</div>

		<?php
} else {
        ?>

<div class="fixed-action-btn hide-on-large-only">
			<a class="btn-floating btn-medium blue-grey">
				<i class="small material-icons">menu</i>
			</a>
			<ul class="ulBtnAction">
                            <div data-tooltip="ACCUEIL"><li><a href="index.php" class="btn-floating  deep-orange lighten-4"><i class="material-icons">home</i></a></li></div>
                            <div data-tooltip="PROFIL"><li><a href="user-infosBis.php" class="btn-floating  deep-orange lighten-3"><i class="material-icons">account_circle</i></a></li></div>
                            <div data-tooltip="TRAJETS"><li><a href="liste-trajetsBis.php" class="btn-floating deep-orange lighten-2"><i class="material-icons">location_on</i></a></li></div>
                            <div data-tooltip="OFFRIR UNE PLACE"><li><a href="TrajetForm.php" class="btn-floating deep-orange lighten-1"><i class="material-icons">map</i></a></li></div>
			</ul>
		</div>

<?php
    } ?>