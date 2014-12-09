<?php
function getPhoto($noPhoto)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPhoto, chemin
			FROM photo WHERE noPhoto=?");
	$req->execute(array($noPhoto));
	
	$photo = $req->fetch();
	
	return $photo;
}
?>