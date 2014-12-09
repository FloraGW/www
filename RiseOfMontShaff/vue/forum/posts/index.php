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
			<span> <!-- Utilisateur -->
			<?php include('controleur/utilisateur/index.php'); ?>
			</span>
			<span> <!-- Post -->
			<?php echo $post['contenu']; ?><br />
			<i><?php echo $post['dateCreation']; ?></i>
			</span>	
		</div>
		<?php 
		}
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
			<input type="submit" value="Créer"/>
		</form>
	<?php
	}
	?>
	</div>
<?php
include('vue/commun/footer.php');
?>