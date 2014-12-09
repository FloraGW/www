<?php
function supprimerPost($noPost)
{	
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM post WHERE noPost = ?");
	$req->execute(array($noPost));
}
?>