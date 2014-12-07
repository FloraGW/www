<?php
if(isset($_GET['noFil']))
{
	include_once('modele/forum/posts/getAllPostsByFil.php');
	$posts = getAllPostsByFil($_GET['noFil']);
	include_once('modele/forum/fils/getFil.php');
	$fil = getFil($_GET['noFil']);
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
		//Redirection vers categories TESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSTTTT
		//Pour tester, il faut changer le paramètre noFil dans l'URL en un noFil inexistant dans la base
		header('Location: controleur/forum/categories/index.php');
	}

}
else if(isset($_SERVER['HTTP_REFERER']))
{
	header("Location:".$_SERVER['HTTP_REFERER']);
}
else
{
	header('Location: controleur/forum/categories/index.php');
}
?>