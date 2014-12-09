<link rel="stylesheet" type="text/css" href="vue/forum/style.css">

<?php
include('vue/commun/header.php');
?>
<div class="categorie">
	<a href="categories.php">Forum</a> > 
	<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a>
	</div>
	<div class="fin"></div>
	<div>
	
	</div>
	<?php
	if(sizeof($fils) != 0)
	{
		foreach($fils as $fil)
		{
		?>
			<div>
				<div class="fil">
					<b>
						<a href="posts.php?noFil=<?php echo $fil['noFil']; ?>"><?php echo $fil['nom']; ?></a>
					</b>	
				
			<?php if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
			{
			
				if(isset($_POST['noFilMod']) && $_POST['noFilMod'] == $fil['noFil'])
				{
					?>
					<form method="post" action="modifierFil.php">
						<input type="text" name="nomFil" value="<?php echo $fil['nom'];?>"/>
						<input type="hidden" name="noFilMod" value="<?php echo $fil['noFil'];?>"/>
						<input type="submit" value="Modifier"/>
					</form>
					<?php
				}
				else
				{
					?>
					<form method="post">
						<input type="hidden" name="noFilMod" value="<?php echo $fil['noFil'];?>"/>
						<input type="submit" value="Modifier"/>
					</form>
					<?php
				}
				?>
					<form method="post" action="supprimerFil.php">
						<input type="hidden" name="noFilSup" value="<?php echo $fil['noFil'];?>"/>
						<input type="submit" value="Supprimer"/>
					</form>
					<?php
			}
			else
			{
				?>
				
				<?php
			}?>
			</div>
			</div>
		<?php 
		}?>
		<div class="fin"></div>
		
	<?php
	}
	else
	{
	?>
		<h4>Aucun fil n'existe pour le moment dans cette catégorie...</h4>
	<?php
	}
	?>
	
	<?php
	if(isset($_SESSION['utilisateur']))
	{?>
	<div class="categorie">
	Créer un nouveau fil
	</div>
	<div class="repondre">
		<form method="post" action="creerFil.php">
			Titre du fil : <input type="text" name="nomFil" />
			<input type="hidden" name="noCategorie" value="<?php echo $categorie['noCategorie']; ?>" />
			<input type="submit" value="Créer"/>
		</form>
		</div>
	<?php
	}
	?>
</div>
<?php
include('vue/commun/footer.php');
?>