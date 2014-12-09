<link rel="stylesheet" type="text/css" href="vue/galerie/style.css">

<?php
include('vue/commun/header.php');
?>
<span class="gauche">
<div class="section">Images</div>
<div>
<?php
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{?>
	<form method="post" action="ajouter.php" enctype="multipart/form-data">
		Chemin vers votre image : <input type="file" name="image" />
		<input type="submit" value="Ajouter"/>
	</form>
<?php
}
?>
</div>
<div class="contenu">
	<?php
	
	if(sizeof($photos) != 0)
	{
		foreach($photos as $photo)
		{
		?>
			<div class="item">
				<img src="<?php echo $photo['chemin']; ?>" />
				<?php
				if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
				{?>
					<form method="post" action="retirer.php">
						<input type="hidden" name="noPhotoSup" value="<?php echo $photo['noPhoto']; ?>"/>
						<input type="submit" value="Supprimer"/>
					</form>
				<?php
				}
				?>
			</div>
		<?php
		}
		?>
		<div class="fin"></div>
		<?php
	}
	else
	{
	?>
		<h4>Aucune photo pour le moment...</h4>
	<?php
	}
	?>
</div>
</span><!-- 
--><span class="droite">
<div class="section">Vidéos</div>
<div>
<?php
if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
{?>
	<form method="post" action="ajouter.php">
		Lien vers le vidéo YouTube : <input type="text" name="lienYoutube" />
		<input type="submit" value="Ajouter"/>
	</form>
<?php
}
?>
</div>
<div class="contenu">
	<?php
	
	if(sizeof($videos) != 0)
	{
		foreach($videos as $video)
		{
		?>
			<div class="item">
			<object width="425" height="350" data="http://www.youtube.com/v/<?php echo $video['code']; ?>" type="application/x-shockwave-flash">
				<param name="src" value="http://www.youtube.com/v/<?php echo $video['code']; ?>" />
			</object>
			<?php
				if(isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']['role']) == "admin")
				{?>
					<form method="post" action="retirer.php">
						<input type="hidden" name="noVideoSup" value="<?php echo $video['noVideo']; ?>"/>
						<input type="submit" value="Supprimer"/>
					</form>
				<?php
				}
				?>
			</div>
		<?php
		}?>
		<div class="fin"></div>
		<?php
	}
	else
	{
	?>
		<h4>Aucun vidéo pour le moment...</h4>
	<?php
	}
	?>
</div>
</span>
<?php
include('vue/commun/footer.php');
?>