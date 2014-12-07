<?php
include_once('modele/forum/categorie/getAllCategories.php');
$categories = getAllCategories();

foreach($categories as $cle => $categorie)
{
	$categories[$cle]['nom'] = htmlspecialchars($categorie['nom'], ENT_SUBSTITUTE, "");
}

include_once('vue/forum/categories/index.php');
?>