<header>
    <div class="logo_titre_menu">
        <a href="acceuil.html"><img id="logo_h" src="images/icones/logo_site_1.png" alt="logo du site" width=120x120 /></a>
        <?php session_start(); $titrePage = $_SESSION['titrePage']; echo "<h1 id='title_h'>".$titrePage."</h1>"; ?> <!-- changement du titre de la page en fonction de la page afficher -->

        <ul class="menu">
            <li><a href="acceuil.php" >Accueil</a></li>
            <li><a href="galerie.php" >Galerie</a></li>
            <li><a href="a_propos.php">A propos</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

    </div>
</header>