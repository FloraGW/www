<?php
session_start();
if(isset($_SESSION['utilisateur']))
{
	if(isset($_POST['nomFil']) && !empty($_POST['nomFil'])
			&& isset($_POST['noCategorie']) && !empty($_POST['noCategorie']))
	{
		include_once('modele/forum/fils/insertFil.php');
		insertFil($_POST['noCategorie'], htmlspecialchars($_POST['nomFil'], ENT_SUBSTITUTE, ""));
	}
		header("Location: fils.php?noCategorie=" . $_POST['noCategorie']);
		exit();
}
?>