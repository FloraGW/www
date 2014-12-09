<?php
function getAllPhotos()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPhoto, chemin
			FROM photo");
	$req->execute();
	
	$photos = $req->fetchAll();
	
	return $photos;
}
?>