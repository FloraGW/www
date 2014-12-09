<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['noFilSup']) && !empty($_POST['noFilSup']))
	{
		include_once('modele/forum/fils/supprimerFil.php');
		supprimerFil($_POST['noFilSup']);
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>