<?php
function getAllCategories()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noCategorie, nom
			FROM categorie ORDER BY nom DESC");
	$req->execute();
	
	$categories = $req->fetchAll();
	
	return $categories;
}
?>