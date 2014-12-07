<?php
function getPost($noPost)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noPost, noFil, noUtilisateur, contenu, dateCreation
				FROM post WHERE noPost = ?");
	$req->execute(array($noPost));
	
	$post = $req->fetch();
	
	return $post;
}