<!-- page A propos -->

<?php session_start();
$titrePage = 'A propos';
$_SESSION['titrePage'] = $titrePage;
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="utf-8" />
	    <link rel="stylesheet" type="text/css" href="style.css" />
	    <link rel="icon" href="images/icones/logo_site_1.png" />
		<title>ROI nathan - photographe amateur</title>
	</head>

	<body>

	   <?php include('includes/header.php'); ?> <!-- header -->

	   <section class="a_propos">
		   	<div class="img_portrait_profil"><img src="images/img_portraits/portrait_profil.jpg"/></div>
		   	<aside class="text_a_propos"> 
		   		<h3>À propos</h3>
		   		<p>
					Salut ! je m'appelle Nathan, et en plus d'être passionné par les sports de montagne, je suis passionné aussi par la photographie, ce qui m'amène donc à faire majoritairement des photos de paysage de montagne et de la nature en général car oui aimer la montagne c'est aussi aimer la nature. En effet le spectacle qu'elle peut nous offrir par moment est juste indescriptible, et la variété de paysages que l'on peut observer est juste dingue, et c'est pour cette raison que j'aime tant photographier la nature.
				</p>
				<p>
					Voilà, maintenant que tu sais un peu mieux qui je suis, je t'invite à aller voir mon travail sur ce site ou bien sur mon compte Insta et tu peux même me faire un retour sur la page <a href="#">contact</a> ! ;)
				</p>
			</aside>
	   </section>

	   <?php include('includes/footer.php'); ?> <!-- footer -->
	</body>
</html>