<!DOCTYPE html>
<html>


<?php 
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
	<h5>Aucune cat&eacute;gorie n'a encore &eacute;t&eacute; d&eacute;finie sur le forum...</h5>
</div>
<?php 
}
?>
</html>