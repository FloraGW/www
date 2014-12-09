<div class="login">

<?php
if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] != null)
{
?>
	Bonjour <?php echo $_SESSION['utilisateur']['nom']?> !
	<form method="post" action="login.php">
		<input type="submit" value="Se déconnecter" />
	</form>
<?php	
}
else
{
?>
	<form method="post" action="login.php">
		Pseudonyme : <input type="text" name="nom" />
		Mot de passe : <input type="password" name="motDePasse" />
		<input type="submit" value="Se connecter" />
	</form><!-- 
  | <form action="creerCompte.php">
    	<input type="submit" value="Créer un compte">
	</form> -->
<?php
}
?>

</div>