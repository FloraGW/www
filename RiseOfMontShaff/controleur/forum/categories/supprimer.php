<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['noCatSup']) && !empty($_POST['noCatSup']))
	{
		include_once('modele/forum/categories/supprimerCategorie.php');
		supprimerCategorie($_POST['noCatSup']);
	}
	header("Location: categories.php");
	exit();
}
?>