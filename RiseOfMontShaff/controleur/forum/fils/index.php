<?php
if(isset($_GET['noCategorie']))
{
	include_once('modele/forum/fils/getAllFilsByCategorie.php');
	$fils = getAllFilsByCategorie($_GET['noCategorie']);
	
	if(sizeof($fils) != 0)
	{
		foreach($fils as $cle => $fil)
		{
			$fils[$cle]['nom'] = htmlspecialchars($fil['nom'], ENT_SUBSTITUTE, "");
		}
		
		include_once('vue/forum/fils/index.php');
	}
	else
	{
		include_once('controleur/forum/categories/index.php');
	}
	
}
else
{
	include_once('controleur/forum/categories/index.php');
}

?>