<?php
function getUtilisateur($noUtilisateur)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noUtilisateur, nom, motDePasse, role, avatar
				FROM utilisateur WHERE noUtilisateur = ?");
	$req->execute(array($noUtilisateur));
	
	$utilisateur = $req->fetch();
	
	return $utilisateur;
}
?>