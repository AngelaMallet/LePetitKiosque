<div class="navbar-fixed hide-on-med-and-down">
    <nav>
        <div class="nav-wrapper red accent-1">
            <a href="index.php" class="brand-logo hide-on-med-and-down"><img id="navLogo" src="assets/colibri565.png" /></a>
            <a href="index.php"  class="brand-logo hide-on-large-only left"><img id="miniLogo" src="assets/colibri565.png" /></a>
            <ul class="right">
                <li class="active"><li><a href="index.php" class="white-text text-red accent-1 hide-on-med-and-down">Accueil</a></li>
                <li><a href="" class="white-text text-red accent-1">Trajets disponibles</a></li>
                <li><a href="offerFormDate.php" class="white-text text-red accent-1 spinner">Offrir une place</a></li>
                <li><a href="projet.php" class="white-text text-red accent-1">Le projet</a></li>
                <li><a href="#contact" class="white-text text-red accent-1">contact</a></li>
                <!-- Dropdown Trigger -->
                 <?php if (!isset($_SESSION)) {
    ?>
                <a class='dropdown-trigger btn red accent-1 center-align' data-target='dropdown1'><i class="large material-icons">account_circle</i></a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a class=" blue-grey-text accent-1 center-align" href="userLogin.php">Log In</a></li>
                </ul>
      <?php
}?>

                    <?php if (isset($_SESSION)) {
        ?>
                <a class='dropdown-trigger btn red accent-1  center-align' data-target='dropdown1'><i class="large material-icons">account_circle</i></a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>

                    <li><a class=" blue-grey-text accent-1 center-align" href="user-infos.php">Votre espace</a></li>

                    <li><a class=" blue-grey-text accent-1 center-align" href="logOut.php">Deconnexion</a></li>
                </ul>
      <?php
    }?>

            </ul>
        </div>
    </nav>
</div>