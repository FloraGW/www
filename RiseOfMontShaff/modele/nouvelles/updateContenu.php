<?php
function updateContenu($noNouvelle, $contenu)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE nouvelle SET contenu=? WHERE noNouvelle=?");
	$req->execute(array($contenu, $noNouvelle));
}
?>