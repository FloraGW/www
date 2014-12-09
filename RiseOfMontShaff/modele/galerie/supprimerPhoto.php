<?php
function supprimerPhoto($noPhoto)
{	
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM photo WHERE noPhoto = ?");
	$req->execute(array($noPhoto));
}
?>