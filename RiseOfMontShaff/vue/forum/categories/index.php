<?php 
include('vue/commun/header.php');

if(sizeof($categories) != 0)
{
	foreach($categories as $categorie)
	{
?>
<div>
	<h3>
		<?php echo $categorie['nom']; ?>
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