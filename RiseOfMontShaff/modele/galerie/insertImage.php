<?php
function insertImage($dossier, $extension)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO photo VALUES('', '')");
	
	$req->execute();
	
	$req = $bdd->prepare("SELECT noPhoto FROM photo
							ORDER BY noPhoto DESC
							LIMIT 1");
	$req->execute();
	
	$photo = $req->fetch();
	
	$chemin = $dossier . $photo['noPhoto'] . '.' . $extension;
	
	$req = $bdd->prepare("UPDATE photo SET chemin=? WHERE noPhoto=?");
	
	$req->execute(array($chemin, $photo['noPhoto']));
	
	return $chemin;
}
?>