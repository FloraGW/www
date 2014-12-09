<link rel="stylesheet" type="text/css" href="vue/forum/style.css">

<?php
include('vue/commun/header.php');
?>
<div>

	<h2><a href="categories.php">Forum</a> > 
	<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a> > 
	<a href="posts.php?noFil=<?php echo $fil['noFil']; ?>"><?php echo $fil['nom']; ?></a></h2>
	<?php
	
	if(sizeof($posts) != 0)
	{
		foreach($posts as $post)
		{
		?>
		<div class="post">
			<span class="postUtilisateur"> <!-- Utilisateur -->
			<?php include('controleur/utilisateur/index.php'); ?>
			</span><!-- 
			--><span class="postTexte"> <!-- Post -->
			<div class="postDate">
			<b><?php echo $post['dateCreation']; ?></b>
			</div>
			<div class="postTexte">
			<?php echo $post['contenu']; ?>
			</div>
			
			<div class="form">
			<?php if(isset($_SESSION['utilisateur']) 
					&& (strtolower($_SESSION['utilisateur']['role']) == "admin") 
					|| $_SESSION['utilisateur']['noUtilisateur'] == $post['noUtilisateur'])
			{
				if(isset($_POST['noPostMod']) && $_POST['noPostMod'] == $post['noPost'])
				{
					?>
					<form method="post" action="modifierPost.php">
						<textarea name="contenu"><?php echo $post['contenu'];?></textarea>
						<input type="hidden" name="noPostMod" value="<?php echo $post['noPost'];?>"/>
						<input type="submit" value="Éditer"/>
					</form>
					<?php
				}
				else
				{
					?>
					<form method="post">
						<input type="hidden" name="noPostMod" value="<?php echo $post['noPost'];?>"/>
						<input type="submit" value="Éditer"/>
					</form>
					<?php
				}?>
				<form method="post" action="supprimerPost.php">
					<input type="hidden" name="noPostSup" value="<?php echo $post['noPost'];?>"/>
					<input type="submit" value="Supprimer"/>
				</form>
				<?php
			}
			?></div>
			
			</span>	
		</div>
		<?php 
		}?>
		<div class="fin"></div>
		<?php
	}
	else
	{
	?>
		<h4>Aucun post n'a été fait pour ce fil...</h4>
	<?php
	}
	?>
</div>
<div>
	<?php
	if(isset($_SESSION['utilisateur']))
	{
	?>
		<form method="post" action="creerPost.php">
			<textarea name="contenu" rows="8" cols="45"></textarea>
			<input type="hidden" name="noFil" value="<?php echo $fil['noFil']; ?>" />
			<input type="hidden" name="noUtilisateur" value="<?php echo $_SESSION['utilisateur']['noUtilisateur']; ?>"/>
			<input type="submit" value="Publier"/>
		</form>
	<?php
	}
	?>
	</div>
<?php
include('vue/commun/footer.php');
?>
