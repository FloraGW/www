<?php
include('vue/commun/header.php');
?>
<div>
	<h2><a href="controleur/forum/fils?noFil=<?php echo $fil['noFil']; ?>"><?php echo $fil['nom']; ?></a></h2>
	<?php
	if(sizeof($posts) != 0)
	{
		foreach($posts as $post)
		{
		?>
		<div>
			<span> <!-- Utilisateur -->
				
			</span>
			<span> <!-- Post -->
			</span>
			<h3>
				<a href="controleur/forum/posts?noFil=<?php echo $fil['noCategorie']; ?>"><?php echo $fil['nom']; ?></a>
			</h3>	
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
<?php
include('vue/commun/footer.php');
?>