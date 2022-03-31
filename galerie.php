<!--page galerie-->

<?php session_start();
$titrePage = 'GALERIE';
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

    <?php include('includes/header.php');?>

    <div class="card">
        <div class="rando_pre-rond"><a id="bouton" href="#"> randonnée | Pré Rond </a></div>
        <div class="reunion_2020"><a id="bouton" href="#"> Réunion | été 2020 </a></div>
        <div class="bonneval_sur_arc"><a id="bouton" href="#"> Bonneval sur Arc </a></div>
        <div class="photos_en_vrac"><a id="bouton" href="#"> Photos en vrac </a></div>
    </div>
    
    <?php include('includes/footer.php'); ?>

</body>
</html