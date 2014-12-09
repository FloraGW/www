<link rel="stylesheet" type="text/css" href="vue/nouvelles/style.css">

<?php 
include('vue/commun/header.php');
?>
<div>
<?php
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{?>
	<form method="post" action="creerNouvelle.php">
		Titre de la nouvelle : <input type="text" name="titre" />
		Contenu : <textarea name="contenu"></textarea>
		<input type="submit" value="Publier"/>
	</form>
<?php
}
?>
</div>
<?php
if(sizeof($nouvelles) != 0)
{
	foreach($nouvelles as $nouvelle)
	{
		//Si administrateur
		if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
		{?>
			<div class="nouvelle">
				<div class="nouvelleTitre">
				<?php 
					if(isset($_POST['noNouvTitreMod']) && $_POST['noNouvTitreMod'] == $nouvelle['noNouvelle'])
					{
						?>
						<form method="post" action="modifierNouvelle.php">
							<input type="text" name="titre" value="<?php echo $nouvelle['titre'];?>"/>
							<input type="hidden" name="noNouvTitreMod" value="<?php echo $nouvelle['noNouvelle'];?>"/>
							<input type="submit" value="Modifier"/>
						</form>
						<?php
					}
					else 
					{
						?>
						<b><?php echo $nouvelle['titre']; ?></b>
						<form method="post">
							<input type="hidden" name="noNouvTitreMod" value="<?php echo $nouvelle['noNouvelle'];?>"/>
							<input type="submit" value="Modifier"/>
						</form>
						<?php
					}
				?>
				<form method="post" action="supprimerNouvelle.php">
					<input type="hidden" name="noNouvSup" value="<?php echo $nouvelle['noNouvelle'];?>"/>
					<input type="submit" value="Supprimer"/>
				</form>
				</div>
				<div class="nouvelleDate">
					<b><?php echo $nouvelle['dateCreation']; ?></b>
				</div>
				<div class="nouvelleTexte">
				<?php 
					if(isset($_POST['noNouvContenuMod']) && $_POST['noNouvContenuMod'] == $nouvelle['noNouvelle'])
					{
						?>
						<form method="post" action="modifierNouvelle.php">
							<textarea name="contenu"><?php echo $nouvelle['contenu'];?></textarea>
							<input type="hidden" name="noNouvContenuMod" value="<?php echo $nouvelle['noNouvelle'];?>"/>
							<input type="submit" value="Modifier"/>
						</form>
						<?php
					}
					else 
					{
						?>
						<?php echo $nouvelle['contenu']; ?>
						<form method="post">
							<input type="hidden" name="noNouvContenuMod" value="<?php echo $nouvelle['noNouvelle'];?>"/>
							<input type="submit" value="Modifier"/>
						</form>
						<?php
					}
				?>
				</div>
			</div>
		<?php
		}
		else //Si utilisateur conventionnel
		{?>
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