<?php
session_start();
if(isset($_SESSION['utilisateur']))
{
	if(isset($_POST['noPostSup']) && !empty($_POST['noPostSup']))
	{
		include_once('modele/forum/posts/getPost.php');
		$post = getPost($_POST['noPostSup']);
		if($_SESSION['utilisateur']['noUtilisateur'] == $post['noUtilisateur']
				|| strtolower($_SESSION['utilisateur']['role']) == "admin")
		{
			include_once('modele/forum/posts/supprimerPost.php');
			supprimerPost($_POST['noPostSup']);
		}
	}
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}
?>