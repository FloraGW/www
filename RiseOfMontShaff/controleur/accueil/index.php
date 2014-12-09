<?php
include_once('modele/accueil/getLatestNouvelle.php');
$nouvelle = getLatestNouvelle();
$nouvelle['titre'] = htmlspecialchars($nouvelle['titre'], ENT_SUBSTITUTE, "");
$nouvelle['contenu'] = htmlspecialchars($nouvelle['contenu'], ENT_SUBSTITUTE, "");

include_once('modele/accueil/getLatestPost.php');
$post = getLatestPost();
$post['contenu'] = htmlspecialchars($post['contenu'], ENT_SUBSTITUTE, "");

include_once('modele/utilisateur/getUtilisateur.php');
$utilisateur = getUtilisateur($post['noUtilisateur']);
$utilisateur['nom'] = htmlspecialchars($utilisateur['nom'], ENT_SUBSTITUTE, "");
$utilisateur['role'] = htmlspecialchars($utilisateur['role'], ENT_SUBSTITUTE, "");

include_once('modele/forum/fils/getFil.php');
$filPost = getFil($post['noFil']);
$filPost['nom'] = htmlspecialchars($filPost['nom'], ENT_SUBSTITUTE, "");

include_once('modele/forum/categories/getCategorie.php');
$categoriePost = getCategorie($filPost['noCategorie']);
$categoriePost['nom'] = htmlspecialchars($categoriePost['nom'], ENT_SUBSTITUTE, "");

include_once('modele/accueil/getLatestVideo.php');
$video = getLatestVideo();
$video['code'] = htmlspecialchars($video['code'], ENT_SUBSTITUTE, "");

include_once('vue/accueil/index.php');
?>