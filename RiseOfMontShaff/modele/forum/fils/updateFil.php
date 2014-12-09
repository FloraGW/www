<?php
function updateFil($noFil, $nomFil)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE fil SET nom=? WHERE noFil=?");
	$req->execute(array($nomFil, $noFil));
}
?>