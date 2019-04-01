
                    <?php if (!isset($_SESSION['id_users'])) {
    ?>
        <footer class="page-footer" id="footer">
              <div class="container">
                <div class="col s12 m6 l6">
                <a class="grey-text text-lighten-4" href="mailto:angelamallet@gmail.com">© 2019 Copyright CAUX<i>libri</i></a>
                <a class="grey-text text-lighten-4 legal" href="https://www.generer-mentions-legales.com/monfichier-qt8xyjnx1b99weizb3wb1c0d5bfo0b.html">MENTIONS LEGALES</a>
</div>
               </div>
        </footer>
        <!-- fin du footer -->
		<?php
} else {
        ?>
<footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">CAUX<i>libri</i></h5>
                        <ul>
                            <li id="contact" class="grey-text text-lighten-4">CONTACT</li>
                            <li class="grey-text text-lighten-4">Angela Mallet Camilotti</li>
                            <li><a class="grey-text text-lighten-4" href="mailto:angelamallet@gmail.com">angelamallet@gmail.com</a></li>
                            <li class="grey-text text-lighten-4">06 64 24 03 03</li>
                        </ul>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Informations</h5>
                        <ul>
                            <li><a class="white-text text-lighten-3" href="user-infosBis.php">Votre espace</a></li>
                            <li><a class="white-text text-lighten-3" href="liste-trajetsBis.php">Les trajets diponibles</a></li>
                            <li><a class="white-text text-lighten-3" href="TrajetForm.php">Offrir une place</a></li>
                            <li><a class="white-text text-lighten-3" href="leProjet.php">Le projet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                <a class="grey-text text-lighten-4" href="mailto:angelamallet@gmail.com">© 2019 Copyright CAUX<i>libri</i></a>
                <a class="grey-text text-lighten-4 legal" href="https://www.generer-mentions-legales.com/monfichier-qt8xyjnx1b99weizb3wb1c0d5bfo0b.html">MENTIONS LEGALES</a>
                </div>
            </div>
        </footer>
        <!-- fin du footer -->


<?php
    }?>