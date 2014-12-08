<?php
function getUtilisateurValide($nomUtilisateur, $motDePasse)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noUtilisateur, nom, motDePasse, role, avatar
				FROM utilisateur WHERE nom = ? AND motDePasse = ?");
	$req->execute(array($nomUtilisateur, $motDePasse));
	
	$utilisateur = $req->fetch();
	
	return $utilisateur;
}
?>