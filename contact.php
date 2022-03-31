<!-- page contact -->

<?php session_start();
$titrePage = 'CONTACT';
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

	   <form method="post" action="traitement.php">
	   	<p>
	   		<input type="text" name="nom" placeholder="Nom" maxlength="15" />
	   		<br/>
	   		<input type="email" name="mail" placeholder="E-mail" />
	   		<br/>
	   		<input type="text" name="objet" placeholder="Objet" maxlength="50" required />
	   		<p></br></p>
	   		<textarea name="message" placeholder="Message" maxlength="400" required ></textarea>
	   		<p><br/></p>
	   		<input type="submit" id="bouton_contact" value="Envoyer" />
	   	</p>


	   </form>

	   <?php include('includes/footer.php'); ?> <!-- footer -->
	</body>
</html>
