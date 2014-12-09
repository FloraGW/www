<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if (isset($_POST['noVideoSup']) && !empty($_POST['noVideoSup']))
	{
		include_once('modele/galerie/supprimerVideo.php');
		supprimerVideo($_POST['noVideoSup']);
	}
	else if(isset($_POST['noPhotoSup']) && !empty($_POST['noPhotoSup']))
	{
		include_once('modele/galerie/supprimerPhoto.php');
		include_once('modele/galerie/getPhoto.php');
		$photo = getPhoto($_POST['noPhotoSup']);
		//On détruit le fichier
		unlink($photo['chemin']);
		//On efface la référence dans la base de données
		supprimerPhoto($_POST['noPhotoSup']);
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>