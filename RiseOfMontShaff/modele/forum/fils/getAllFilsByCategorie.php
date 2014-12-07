<?php
function getAllFilsByCategorie($noCategorie)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noFil, noCategorie, nom
				FROM fil WHERE noCategorie = ? ORDER BY nom ASC");
	$req->execute(array($noCategorie));
	
	$fils = $req->fetchAll();
	
	return $fils;
}
?>