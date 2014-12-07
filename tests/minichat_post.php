<?php
// Effectuer ici la requête qui insère le message
if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
	if (strip_tags($_POST['pseudo']) != "")
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=riseofmontshaff_tests', 'root', '');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		
		$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
		
		$req->execute(array(
				'pseudo' => strip_tags($_POST['pseudo']),
				'message' => strip_tags($_POST['message'])
		));
	}
}

// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
?>