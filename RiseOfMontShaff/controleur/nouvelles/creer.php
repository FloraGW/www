<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	if(isset($_POST['titre']) && !empty($_POST['titre'])
			&& isset($_POST['contenu']) && !empty($_POST['contenu']))
	{
		include_once('modele/nouvelles/insertNouvelle.php');
		insertNouvelle(htmlspecialchars($_POST['titre'], ENT_SUBSTITUTE, ""), htmlspecialchars($_POST['contenu'], ENT_SUBSTITUTE, ""));
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>