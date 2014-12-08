<?php
if(isset($_GET['noCategorie']))
{
	include_once('modele/forum/fils/getAllFilsByCategorie.php');
	$fils = getAllFilsByCategorie($_GET['noCategorie']);
	include_once('modele/forum/categories/getCategorie.php');
	$categorie = getCategorie($_GET['noCategorie']);
	
	if($categorie != false)
	{
		foreach($fils as $cle => $fil)
		{
			$fils[$cle]['nom'] = htmlspecialchars($fil['nom'], ENT_SUBSTITUTE, "");
		}
		
		include_once('vue/forum/fils/index.php');
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