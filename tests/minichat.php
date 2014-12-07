<form action="minichat_post.php" method="post">
<p>
    Pseudo : <input type="text" name="pseudo" />
    <br>Message : <input type="text" name="message" />
    <br><input type="submit" value="Envoyer" />
</p>
</form>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=riseofmontshaff_tests', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
	echo '<b>' . $donnees['pseudo'] . ' : </b>' . $donnees['message'] . '<br>';
}

$reponse->closeCursor();
?>