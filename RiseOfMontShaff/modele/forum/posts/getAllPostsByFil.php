<?php
function getAllPostsByFil($noFil)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPost, noFil, noUtilisateur, contenu, dateCreation
				FROM post WHERE noFil = ? ORDER BY dateCreation DESC");
	$req->execute(array($noFil));
	
	$posts = $req->fetchAll();
	
	return $posts;
}
?>