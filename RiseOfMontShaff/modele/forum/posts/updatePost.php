<?php
function updatePost($noPost, $contenu)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE post SET contenu=? WHERE noPost=?");
	$req->execute(array($contenu, $noPost));
}
?>