<link rel="stylesheet" type="text/css" href="vue/nouvelles/style.css">

<?php 
include('vue/commun/header.php');

if(sizeof($nouvelles) != 0)
{
	foreach($nouvelles as $nouvelle)
	{
?>
<div class="nouvelle">
	<div class="nouvelleTitre">
		<b><?php echo $nouvelle['titre']; ?></b>
	</div>
	<div class="nouvelleDate">
		<b><?php echo $nouvelle['dateCreation']; ?></b>
	</div>
	<div class="nouvelleTexte">
		<?php echo $nouvelle['contenu']; ?>
	</div>
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