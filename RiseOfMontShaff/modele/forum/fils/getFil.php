<?php
function getFil($noFil)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noFil, noCategorie, nom
				FROM fil WHERE noFil = ?");
	$req->execute(array($noFil));
	
	$fil = $req->fetch();
	
	return $fil;
}
?>