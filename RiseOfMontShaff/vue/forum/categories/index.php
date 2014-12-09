<link rel="stylesheet" type="text/css" href="vue/forum/style.css">

<?php 
include('vue/commun/header.php');
?>
<div>

</div>
<?php
if(sizeof($categories) != 0)
{
	foreach($categories as $categorie)
	{
?>
<div class="categorie">
	<b>
	<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a>
		<?php if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
		{
			
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
				<form method="post">
					<input type="hidden" name="noCatMod" value="<?php echo $categorie['noCategorie'];?>"/>
					<input type="submit" value="Modifier"/>
				</form>
				<?php
			}
			?>
						<form method="post" action="supprimerCategorie.php">
							<input type="hidden" name="noCatSup" value="<?php echo $categorie['noCategorie'];?>"/>
							<input type="submit" value="Supprimer"/>
						</form>
						<?php
		}
		else
		{
			?>
			<?php
		}?>
		
		</b>
	
</div>

<?php 
	}?>
	<div class="fin">
</div>
<?php
}
else
{
?>
<div>
	<h5>Aucune catégorie n'a encore été définie sur le forum...</h5>
</div>

<?php 
}

if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{?>
	<div class="categorie">
	Créer une nouvelle catégorie
	</div>
	<div class="repondre">
	<form method="post" action="creerCategorie.php">
		Titre de la catégorie : <input type="text" name="nomCategorie" />
		<input type="submit" value="Créer"/>
	</form>
	</div>
<?php
}
include('vue/commun/footer.php');
?>
