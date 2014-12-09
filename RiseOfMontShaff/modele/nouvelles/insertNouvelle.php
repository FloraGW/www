<?php
function insertNouvelle($titre, $contenu)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO nouvelle VALUES('', ?, ?, NOW())");
	$req->execute(array($titre, $contenu));
}
?>