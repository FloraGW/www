<?php
include('vue/commun/header.php');
?>
<div>
	<h2><a href="categories.php">Forum</a> > 
	<a href="fils.php?noCategorie=<?php echo $categorie['noCategorie']; ?>"><?php echo $categorie['nom']; ?></a></h2>
	<?php
	if(sizeof($fils) != 0)
	{
		foreach($fils as $fil)
		{
		?>
		<div>
			<h3>
				<a href="posts.php?noFil=<?php echo $fil['noCategorie']; ?>"><?php echo $fil['nom']; ?></a>
			</h3>	
		</div>
		<?php 
		}
	}
	else
	{
	?>
		<h4>Aucun fil n'existe pour le moment dans cette catégorie...</h4>
	<?php
	}
	?>
</div>
<?php
include('vue/commun/footer.php');
?>