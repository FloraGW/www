<?php
function getAllNouvelles()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noNouvelle, titre, contenu, dateCreation
			FROM nouvelle ORDER BY dateCreation DESC");
	$req->execute();
	
	$nouvelles = $req->fetchAll();
	
	return $nouvelles;
}