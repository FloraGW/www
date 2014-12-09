<link rel="stylesheet" type="text/css" href="vue/utilisateur/style.css">

<?php 
include('vue/commun/header.php');
if (isset($_REQUEST['err']) && $_REQUEST['err'])
{
	?>
	<div>
	<ul type="circle">
	<?php 
	if (isset($_REQUEST['errNom']) && $_REQUEST['errNom'])
	{
		?>
		<li>Le nom d'utilisateur est déjà sélectionné par un autre usager...</li>
		<?php
	}
	if (isset($_REQUEST['errMotDePasse']) && $_REQUEST['errMotDePasse'])
	{
	?>
		<li>Les deux mots de passe entrés ne sont pas identiques...</li>
		<?php
	}
	if (isset($_REQUEST['errImageExtension']) && $_REQUEST['errImageExtension'])
	{
	?>
		<li>L'extension d'image n'est pas acceptée... (Seulement .jpg, .jpeg, .gif et .png)</li>
		<?php
	}
	if (isset($_REQUEST['errImageSize']) && $_REQUEST['errImageSize'])
	{
	?>
		<li>La taille de l'image est trop lourde... (1 Mo maximum)</li>
		<?php
	}?>
	</ul>
	<?php if(isset($_REQUEST['MAJ']) && $_REQUEST['MAJ'])
	{
		echo 'Toutes les autres modifications ont été apportées avec succès !';
	}?>
	</div>
	<?php
}
else 
{
	if(isset($_REQUEST['MAJ']) && $_REQUEST['MAJ'])
	{
		echo 'Toutes les modifications ont été apportées avec succès !';
	}
}
?>
<div class="creation">
	<form method="post" action="modifierCompte.php" enctype="multipart/form-data">
		Pseudonyme : <input type="text" name="nom"/><br/>
		Mot de passe : <input type="password" name="motDePasse"/><br/>
		Entrez à nouveau le mot de passe : <input type="password" name="motDePasse2"/><br/>
		Image actuelle : <img src="<?php echo $_SESSION['utilisateur']['avatar']; ?>" /><br/>
		Avatar : <input type="file" name="image"/><br/>
		<input type="submit" value="Modifier">
	</form>
</div>
<?php
include('vue/commun/footer.php');
?>