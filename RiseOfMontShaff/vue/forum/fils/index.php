<?php
include('vue/commun/header.php');

foreach($categories as $categorie)
{
?>
<div>
	<h3>
		<a href="controleur/forum/posts?noFils=<?php echo $fil['noCategorie']; ?>"><?php echo $fil['nom']; ?></a>
	</h3>	
</div>
<?php 
}
include('vue/commun/footer.php');
?>