<?php
include_once('modele/utilisateur/getUtilisateur.php');
$utilisateur = getUtilisateur($post['noUtilisateur']);

if($utilisateur != false)
{
	$utilisateur['nom'] = htmlspecialchars($utilisateur['nom'], ENT_SUBSTITUTE, "");
	$utilisateur['role'] = htmlspecialchars($utilisateur['role'], ENT_SUBSTITUTE, "");
}
include_once('vue/utilisateur/index.php');
?>