
<div class="navbar-fixed hide-on-med-and-down">
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo hide-on-med-and-down"><img id="navLogo" src="assets/colibri565.png" /></a>
            <a href="index.php"  class="brand-logo hide-on-large-only left"><img id="miniLogo" src="assets/colibri565.png" /></a>
            <ul class="right">
                <li class="active"><li><a href="index.php" class="white-text  hide-on-med-and-down">Accueil</a></li>
                <li><a href="liste-trajetsBis.php" class="white-text ">Trajets disponibles</a></li>
                <li><a href="TrajetForm.php" class="white-text spinner">Offrir une place</a></li>
                <li><a href="leProjet.php" class="white-text">Le projet</a></li>
                <li><a href="#contact" class="white-text">contact</a></li>
                <!-- Dropdown Trigger -->

                <a class='dropdown-trigger btn blue-grey accent-1  center-align' data-target='dropdown1'><i class="large material-icons">account_circle</i></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <?php if (!isset($_SESSION['id_users'])) {
    ?>
                        <li><a class=" blue-grey-text accent-1 center-align" href="index.php">Inscription</a></li>
                        <li><a class=" blue-grey-text accent-1 center-align" href="userLogin.php">Log In</a></li>
                    <?php
} else {
        ?>
                    <li><a class=" blue-grey-text accent-1 center-align" href="user-infosBis.php">Votre espace</a></li>
                    <li><a class=" blue-grey-text accent-1 center-align" href="logOut.php">Deconnexion</a></li>
                    <?php
    } ?>
                </ul>
        </div>
    </nav>
</div>