<?php
session_start();
if(isset($_SESSION['utilisateur']))
{
	if(isset($_POST['noFil']) && !empty($_POST['noFil'])
			&& isset($_POST['noUtilisateur']) && !empty($_POST['noUtilisateur'])
			&& isset($_POST['contenu']) && !empty($_POST['contenu']))
	{
		include_once('modele/forum/posts/insertPost.php');
		insertPost($_POST['noFil'], $_POST['noUtilisateur'], htmlspecialchars($_POST['contenu'], ENT_SUBSTITUTE, ""));
	}
	header("Location: posts.php?noFil=" . $_POST['noFil']);
	exit();
}
?>