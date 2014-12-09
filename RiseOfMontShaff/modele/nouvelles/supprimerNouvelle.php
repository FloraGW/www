<?php
function supprimerNouvelle($noNouvelle)
{	
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM nouvelle WHERE noNouvelle = ?");
	$req->execute(array($noNouvelle));
}
?>