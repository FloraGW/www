<?php
function updateTitre($noNouvelle, $titre)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE nouvelle SET titre=? WHERE noNouvelle=?");
	$req->execute(array($titre, $noNouvelle));
}
?>