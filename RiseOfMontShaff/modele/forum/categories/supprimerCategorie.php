<?php
function supprimerCategorie($noCategorie)
{
	include_once('modele/forum/fils/getAllFilsByCategorie.php');
	
	global $bdd;
	$fils = getAllFilsByCategorie($noCategorie);
	
	foreach($fils as $fil)
	{
		$req = $bdd->prepare("DELETE FROM post WHERE noFil = ?");
		$req->execute(array($fil['noFil']));
	}
	
	$req = $bdd->prepare("DELETE FROM fil WHERE noCategorie = ?");
	$req->execute(array($noCategorie));
	
	$req = $bdd->prepare("DELETE FROM categorie WHERE noCategorie = ?");
	$req->execute(array($noCategorie));
}
?>