<?php
function getLatestPost()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPost, noFil, noUtilisateur, contenu, dateCreation
				FROM post ORDER BY dateCreation DESC LIMIT 1");
	$req->execute();
	
	$post = $req->fetch();
	
	return $post;
}
?>