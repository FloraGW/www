<?php
if(isset($_GET['noFil']))
{
	include_once('modele/forum/posts/getAllPostsByFil.php');
	$posts = getAllPostsByFil($_GET['noFil']);
	include_once('modele/forum/fils/getFil.php');
	$fil = getFil($_GET['noFil']);
	include_once('modele/forum/categories/getCategorie.php');
	$categorie = getCategorie($fil['noCategorie']);
	if($fil != false)
	{
		foreach($posts as $cle => $post)
		{
			$posts[$cle]['contenu'] = htmlspecialchars($post['contenu'], ENT_SUBSTITUTE, "");
		}
	
		include_once('vue/forum/posts/index.php');
	}
	else
	{
		header('Location: pageInexistante.php');
	}

}
else
{
	header('Location: pageInexistante.php');
}
?>