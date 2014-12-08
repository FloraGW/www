<link rel="stylesheet" type="text/css" href="vue/forum/style.css">

<?php 
include('vue/commun/header.php');
?>
<div>
<?php
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{?>
	<form method="post" action="creerCategorie.php">
		Nom de la catégorie : <input type="text" name="nomDeLaCategorie" />
		<input type="submit" value="Créer"/>
	</form>
<?php
}
?>
</div>
<?php
if(sizeof($categories) != 0)
{
	foreach($categories as $categorie)
	{
?>
<div>
	<h3>
		<?php if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
		{
			?>
			<form method="post" action="supprimerCategorie.php">
				<input type="hidden" name="noCatSup" value="<?php echo $categorie['noCategorie'];?>"/>
				<input type="submit" value="Supprimer"/>
			</form>
			<form method="post">
				<input type="hidden" name="noCatMod" value="<?php echo $categorie['noCategorie'];?>"/>
				<input type="submit" value="Modifier"/>
			</form>
			<?php
			if(isset($_POST['noCatMod']) && $_POST['noCatMod'] == $categorie['noCategorie'])
			{
				?>
				<form method="post" action="modifierCategorie.php">
					<input type="text" name="nomCategorie" value="<?php echo $categorie['nom'];?>"/>
					<input type="hidden" name="noCatMod" value="<?php echo $categorie['noCategorie'];?>"/>
					<input type="submit" value="Modifier"/>
				</form>
				<?php
			}
			else
			{
				?>
				<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a>
				<?php
			}
		}
		else
		{
			?>
			<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a>
			<?php
		}?>
		
		
	</h3>	
</div>
<?php 
	}
}
else
{
?>
<div>
	<h5>Aucune catégorie n'a encore été définie sur le forum...</h5>
</div>
<?php 
}
include('vue/commun/footer.php');
?>