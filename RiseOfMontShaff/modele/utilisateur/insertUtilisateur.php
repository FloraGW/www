<?php
function insertUtilisateur($nom, $motDePasse, $role, $avatar)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO utilisateur VALUES('', :nom, :motDePasse, :role, :avatar)");
	
	//Retourne true si tout a fonctionné, sinon false...
	return $req->execute(array(
			'nom' => $nom,
			'motDePasse' => $motDePasse,
			'role' => $role,
			'avatar' => $avatar
			));
}
?>