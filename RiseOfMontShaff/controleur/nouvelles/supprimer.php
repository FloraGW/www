<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	//On met à jour le titre
	if(isset($_POST['noNouvSup']) && !empty($_POST['noNouvSup']))
	{
		include_once('modele/nouvelles/supprimerNouvelle.php');
		supprimerNouvelle($_POST['noNouvSup']);
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>