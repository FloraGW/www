<?php
function insertPost($noFil, $noUtilisateur, $contenu)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO post VALUES('', ?, ?, ?, NOW())");
	$req->execute(array($noFil, $noUtilisateur, $contenu));
}
?>