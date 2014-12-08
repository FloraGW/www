<?php
function updateCategorie($noCategorie, $nomCategorie)
{
	global $bdd;
	
	$req = $bdd->prepare("UPDATE categorie SET nom=? WHERE noCategorie=?");
	$req->execute(array($nomCategorie, $noCategorie));
}
?>