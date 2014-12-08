<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['noCatMod']) && !empty($_POST['noCatMod']) &&
			isset($_POST['nomCategorie']) && !empty($_POST['nomCategorie']))
	{
		include_once('modele/forum/categories/updateCategorie.php');
		updateCategorie($_POST['noCatMod'], htmlspecialchars($_POST['nomCategorie'], ENT_SUBSTITUTE, ""));
	}
	header("Location: categories.php");
	exit();
}
?>