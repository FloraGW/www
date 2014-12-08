<?php
if(isset($_POST['nom']) && isset($_POST['motDePasse']))
{
	include_once('modele/utilisateur/getUtilisateurByNom.php');
	$utilisateur = getUtilisateur($_POST['nom'], $_POST['motDePasse']);
	if($utilisateur != false)
	{
		$utilisateur['nom'] = htmlspecialchars($utilisateur['nom'], ENT_SUBSTITUTE, "");
		$utilisateur['role'] = htmlspecialchars($utilisateur['role'], ENT_SUBSTITUTE, "");
		$_SESSION['utilisateur'] = $utilisateur;
	}
	
	include_once('vue/utilisateur/login.php');
}
else if(isset($_SESSION['utilisateur']))
{
	$_SESSION['utilisateur'] = null;
	include_once('vue/utilisateur/login.php');
}
