<?php
session_start();
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{
	//On met à jour le titre
	if(isset($_POST['noNouvTitreMod']) && !empty($_POST['noNouvTitreMod']) &&
			isset($_POST['titre']) && !empty($_POST['titre']))
	{
		include_once('modele/nouvelles/updateTitre.php');
		updateTitre($_POST['noNouvTitreMod'], htmlspecialchars($_POST['titre'], ENT_SUBSTITUTE, ""));
	}
	//On met à jour le texte de la nouvelle
	else if(isset($_POST['noNouvContenuMod']) && !empty($_POST['noNouvContenuMod']) &&
			isset($_POST['contenu']) && !empty($_POST['contenu']))
	{
		include_once('modele/nouvelles/updateContenu.php');
		updateContenu($_POST['noNouvContenuMod'], htmlspecialchars($_POST['contenu'], ENT_SUBSTITUTE, ""));
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>