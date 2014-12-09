<?php
include_once('modele/accueil/getLatestNouvelle.php');
$nouvelle = getLatestNouvelle();
if($nouvelle != false)
{
	$nouvelle['titre'] = htmlspecialchars($nouvelle['titre'], ENT_SUBSTITUTE, "");
	$nouvelle['contenu'] = htmlspecialchars($nouvelle['contenu'], ENT_SUBSTITUTE, "");
}

include_once('modele/accueil/getLatestPost.php');
$post = getLatestPost();
if($post != false)
{
	$post['contenu'] = htmlspecialchars($post['contenu'], ENT_SUBSTITUTE, "");
}

include_once('modele/utilisateur/getUtilisateur.php');
$utilisateur = getUtilisateur($post['noUtilisateur']);
if($utilisateur != false)
{
	$utilisateur['nom'] = htmlspecialchars($utilisateur['nom'], ENT_SUBSTITUTE, "");
	$utilisateur['role'] = htmlspecialchars($utilisateur['role'], ENT_SUBSTITUTE, "");
}

include_once('modele/forum/fils/getFil.php');
$filPost = getFil($post['noFil']);
if($filPost != false)
{
	$filPost['nom'] = htmlspecialchars($filPost['nom'], ENT_SUBSTITUTE, "");
}

include_once('modele/forum/categories/getCategorie.php');
$categoriePost = getCategorie($filPost['noCategorie']);
if($categoriePost != false)
{
	$categoriePost['nom'] = htmlspecialchars($categoriePost['nom'], ENT_SUBSTITUTE, "");
}

include_once('modele/accueil/getLatestVideo.php');
$video = getLatestVideo();
if($video != false)
{
	$video['code'] = htmlspecialchars($video['code'], ENT_SUBSTITUTE, "");
}

include_once('modele/accueil/getLatestPhoto.php');
$photo = getLatestPhoto();
if($photo != false)
{
	$photo['chemin'] = htmlspecialchars($photo['chemin'], ENT_SUBSTITUTE, "");
}

include_once('vue/accueil/index.php');
?>