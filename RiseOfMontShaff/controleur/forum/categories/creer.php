<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['nomCategorie']) && !empty($_POST['nomCategorie']))
	{
		include_once('modele/forum/categories/insertCategorie.php');
		insertCategorie(htmlspecialchars($_POST['nomCategorie'], ENT_SUBSTITUTE, ""));
	}
	header("Location: categories.php");
	exit();
}
?>