<?php
function supprimerFil($noFil)
{	
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM post WHERE noFil = ?");
	$req->execute(array($noFil));
	
	$req = $bdd->prepare("DELETE FROM fil WHERE noFil = ?");
	$req->execute(array($noFil));
}
?>