<?php
function supprimerVideo($noVideo)
{	
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM video WHERE noVideo = ?");
	$req->execute(array($noVideo));
}
?>