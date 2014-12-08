<?php
function insertUtilisateur($nom, $motDePasse, $avatar)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO utilisateur VALUES('', :nom, :motDePasse, '', :avatar)");
	
	//Retourne true si tout a fonctionné, sinon false...
	return $req->execute(array(
			'nom' => $nom,
			'motDePasse' => $motDePasse,
			'avatar' => $avatar
			));
}
?>