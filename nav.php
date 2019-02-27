
                                  
                  <?php if (!isset($_SESSION['id_users'])) {
    ?>
                       <div class="navbar-fixed hide-on-med-and-down">
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo hide-on-med-and-down"><img id="navLogo" src="assets/logoCo.png" alt="Logo de Cauxlibri" /></a>
            
            <ul class="right">
                <li class="active"><li><a href="index.php" class="white-text  hide-on-med-and-down">Accueil</a></li>
                <li><a href="leProjet.php" class="white-text">Le projet</a></li>
                <li><a href="#contact" class="white-text">contact</a></li>
                <!-- Dropdown Trigger -->

                <a id="btnNameNavbar2" class='dropdown-trigger btn blue-grey accent-1  center-align' data-target='dropdown1'><i class="large material-icons">account_circle</i></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                <li><a class=" blue-grey-text accent-1 center-align" href="index.php?openRegistration">Inscription</a></li>
                        <li><a class=" blue-grey-text accent-1 center-align" href="userLogin.php">Log In</a></li>
                        </ul>
        </div>
    </nav>
</div>
                    <?php
} else {
        ?>
                    <div class="navbar-fixed hide-on-med-and-down">
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo hide-on-med-and-down"><img id="navLogo" src="assets/logoCo.png" alt="Logo de Cauxlibri" /></a>
           
            <ul class="right">
                <li class="active"><li><a href="index.php" class="white-text  hide-on-med-and-down">Accueil</a></li>
                <li><a href="TrajetForm.php" class="white-text spinner">Offrir une place</a></li>
                <li><a href="liste-trajetsBis.php" class="white-text ">Trajets disponibles</a></li>
               <li><a href="leProjet.php" class="white-text">Le projet</a></li>
                <li><a href="#contact" class="white-text">contact</a></li>
                <!-- Dropdown Trigger -->

                <a id="btnNameNavbar" class="dropdown-trigger btn blue-grey accent-1 center-align" data-target= "dropdown1" ><?=isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><i class="tiny material-icons  center-align blue-grey-text accent-1">account_circle</i></li>
                <li><a class=" blue-grey-text accent-1 center-align" href="user-infosBis.php">Votre espace</a></li>
                    <li><a class=" blue-grey-text accent-1 center-align" href="logOut.php">Deconnexion</a></li>
                        </ul>
        </div>
    </nav>
</div>
                    <?php
    }?>
                </ul>
        </div>
    </nav>
</div>





