<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['noFilMod']) && !empty($_POST['noFilMod']) &&
			isset($_POST['nomFil']) && !empty($_POST['nomFil']))
	{
		include_once('modele/forum/fils/updateFil.php');
		updateFil($_POST['noFilMod'], htmlspecialchars($_POST['nomFil'], ENT_SUBSTITUTE, ""));
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>