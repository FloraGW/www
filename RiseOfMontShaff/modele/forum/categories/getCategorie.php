<?php
function getCategorie($noCategorie)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noCategorie, nom
			FROM categorie WHERE noCategorie = ?");
	$req->execute(array($noCategorie));
	
	$categorie = $req->fetch();
	
	return $categorie;
}
?>