<?php
if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['motDePasse']) && !empty($_POST['motDePasse']))
{
	$_POST['nom'] = htmlspecialchars($_POST['nom'], ENT_SUBSTITUTE, "");
	include_once('modele/utilisateur/getUtilisateurByNom.php');
	$utilisateurExiste = getUtilisateurByNom($_POST['nom']);
	
	if($utilisateurExiste == false)
	{
		$nom = $_POST['nom'];
		$motDePasse = $_POST['motDePasse'];
		$role = "";
		if(isset($_POST['role']))
		{
			$role = $_POST['role'];
		}
		$avatar = "";
		// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
		if (isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0)
		{
			include_once("modele/utilisateur/validateAvatar.php");
		}
		include_once('modele/utilisateur/insertUtilisateur.php');
		insertUtilisateur($nom, $motDePasse, $role, $avatar);
		$_REQUEST['ajoute'] = true;
	}
	else
	{
		$_REQUEST['ajoute'] = false;
	}
}
include_once('vue/utilisateur/creerCompte.php');
?>