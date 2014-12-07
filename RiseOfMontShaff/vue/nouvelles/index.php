
<?php 
include('vue/commun/header.php');

if(sizeof($nouvelles) != 0)
{
	foreach($nouvelles as $nouvelle)
	{
?>
<div>
	<h3>
		<?php echo $nouvelle['titre']; ?>
	</h3>
	<h6>
		<?php echo $nouvelle['dateCreation']; ?>
	</h6>
	<p>
		<?php echo $nouvelle['contenu']; ?>
	</p>
	
</div>
<?php 
	}
}
else
{
?>
<div>
	<h5>Aucune nouvelle n'a encore été ajoutée au site...</h5>
</div>
<?php 
}
include('vue/commun/footer.php');
?>