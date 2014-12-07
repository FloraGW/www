<!DOCTYPE html>
<html>


<?php 
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
	<h5>Aucune nouvelle n'a encore &eacute;t&eacute; ajout&eacute;e au site...</h5>
</div>
<?php 
}
?>
</html>