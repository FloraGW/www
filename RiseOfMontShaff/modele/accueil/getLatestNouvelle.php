<?php
function getLatestNouvelle()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noNouvelle, titre, contenu, dateCreation
			FROM nouvelle ORDER BY dateCreation DESC LIMIT 1");
	$req->execute();
	
	$nouvelle = $req->fetch();
	
	return $nouvelle;
}
?>