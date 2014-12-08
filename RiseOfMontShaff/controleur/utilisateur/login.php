<?php
if(isset($_POST['nom']) && isset($_POST['motDePasse']))
{
	include_once('modele/utilisateur/getUtilisateurValide.php');
	$utilisateur = getUtilisateurValide($_POST['nom'], $_POST['motDePasse']);
	if($utilisateur != false)
	{
		$utilisateur['nom'] = htmlspecialchars($utilisateur['nom'], ENT_SUBSTITUTE, "");
		$utilisateur['role'] = htmlspecialchars($utilisateur['role'], ENT_SUBSTITUTE, "");
		$_SESSION['utilisateur'] = $utilisateur;
	}
	
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
else if(isset($_SESSION['utilisateur']))
{
	$_SESSION['utilisateur'] = null;
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
