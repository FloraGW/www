<?php
if(!isset($_SESSION['utilisateur']) || $_SESSION == null)
{
?>
	<form method="post" action="login.php">
		Pseudonyme : <input type="text" name="nom" />
		Mot de passe : <input type="password" name="motDePasse" />
		<input type="submit" value="Se connecter" />
	</form>
<?php	
}
else
{
?>
	Bonjour <?php echo $_SESSION['utilisateur']['nom']?> !
	<form method="post" action="login.php">
		<input type="submit" value="Se déconnecter" />
	</form>
<?php
}
?>

