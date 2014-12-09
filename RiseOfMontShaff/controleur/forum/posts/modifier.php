<?php
session_start();
if(isset($_SESSION['utilisateur']))
{
	if(isset($_POST['noPostMod']) && !empty($_POST['noPostMod']) &&
			isset($_POST['contenu']) && !empty($_POST['contenu']))
	{
		include_once('modele/forum/posts/getPost.php');
		$post = getPost($_POST['noPostMod']);
		if($_SESSION['utilisateur']['noUtilisateur'] == $post['noUtilisateur']
				|| strtolower($_SESSION['utilisateur']['role']) == "admin")
		{
			include_once('modele/forum/posts/updatePost.php');
			updatePost($_POST['noPostMod'], htmlspecialchars($_POST['contenu'], ENT_SUBSTITUTE, ""));
		}
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>