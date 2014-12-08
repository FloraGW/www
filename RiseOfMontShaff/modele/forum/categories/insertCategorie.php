<?php
function insertCategorie($nomCategorie)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO categorie VALUES('', ?)");
	$req->execute(array($nomCategorie));
}
?>