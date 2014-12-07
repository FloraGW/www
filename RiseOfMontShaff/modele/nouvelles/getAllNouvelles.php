<?php
function getAllNouvelles()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT id, titre, contenu, dateCreation
			FROM nouvelles ORDER BY dateCreation DESC");
	$req->execute();
	
	$nouvelles = $req->fetchAll();
	
	return $nouvelles;
}