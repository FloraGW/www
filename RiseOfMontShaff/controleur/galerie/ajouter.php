<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
	if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
	{
		include_once('modele/galerie/valideImage.php');
	}
	else if(isset($_POST['lienYoutube']) && !empty($_POST['lienYoutube']))
	{
		include_once('modele/galerie/valideLienYoutube.php');
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>