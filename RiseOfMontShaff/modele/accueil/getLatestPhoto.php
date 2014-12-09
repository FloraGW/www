<?php
function getLatestPhoto()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPhoto, chemin
				FROM photo ORDER BY noPhoto DESC LIMIT 1");
	$req->execute();
	
	$photo = $req->fetch();
	
	return $photo;
}
?>