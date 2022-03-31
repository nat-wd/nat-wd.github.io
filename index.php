<!--page accueil-->

<?php session_start();
$titrePage = 'NATHAN ROI - photographe amateur';
$_SESSION['titrePage'] = $titrePage;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/icones/logo_site_1.png">
	<title>ROI nathan - photographe amateur</title>
</head>

<body>

   <?php include('includes/header.php'); ?>

    <div class="conteneur"> <!-- diapo -->
        <div class="d1"></div>
    </div>

    <section class="a_propos_page_princip">
        <h3>A propos</h3>
        <img src="images/img_portraits/portrait_face.jpg" alt="portrait du photographe" width=150x150/>
        <p>
            <br/>
            Salut ! Je m'appelle Nathan, et en plus d'être passionné par les<br/> 
            sports de montagne, je suis aussi passionné par la photo ... 
        </p>
        <a href="#" >[lire la suite...]</a>
        <br/><br/><br/><br/>
        <a id="bouton" href="#"> Toutes mes photos </a> <!-- lien redirige vers la page galerie -->
    </section>
    <br/>
    <?php include('includes/footer.php'); ?>
</body>
</html>
