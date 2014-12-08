<link rel="stylesheet" type="text/css" href="vue/forum/style.css">

<?php 
include('vue/commun/header.php');
if(isset($_REQUEST['ajoute']))
{
	if($_REQUEST['ajoute'])
	{
		?>
		<div>
			<h2>L'utilisateur a été ajouté avec succès !</h2>
		</div>
		<?php
	}
	else
	{
		?>
			<div>
				<h2>Le nom d'utilisateur est déjà sélectionné par un autre usager...</h2>
			</div>
			<?php
		}
}
?>
<div>
	<form method="post" action="creerCompte.php" enctype="multipart/form-data">
		Pseudonyme : <input type="text" name="nom"/><br/>
		Mot de passe : <input type="password" name="motDePasse"/><br/>
		Avatar : <input type="file" name="avatar"/><br/>
		<input type="submit" value="Créer le compte">
	</form>
</div>
<?php
include('vue/commun/footer.php');
?>