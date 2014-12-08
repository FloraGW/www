<?php
function getUtilisateurByNom($nomUtilisateur)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noUtilisateur, nom, motDePasse, role, avatar
				FROM utilisateur WHERE nom = ?");
	$req->execute(array($nomUtilisateur));
	
	$utilisateur = $req->fetch();
	
	return $utilisateur;
}
?>