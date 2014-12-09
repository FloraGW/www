<?php
function updateUtilisateur($noUtilisateur, $nom, $motDePasse, $avatar)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE utilisateur SET nom=:nom, motDePasse=:motDePasse, 
			avatar=:avatar WHERE noUtilisateur=:noUtilisateur");
	$req->execute(array('nom' => $nom,
			'motDePasse' => $motDePasse,
			'avatar' => $avatar,
			'noUtilisateur' => $noUtilisateur
	));
}
?>