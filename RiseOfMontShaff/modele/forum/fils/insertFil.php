<?php
function insertFil($noCategorie, $nomFil)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO fil VALUES('', ?, ?)");
	$req->execute(array($noCategorie, $nomFil));
}
?>