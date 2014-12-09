<?php
include('vue/commun/header.php');
?>
<h2>Photos : </h2>
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
<div>
	<?php
	
	if(sizeof($photos) != 0)
	{
		foreach($photos as $photo)
		{
		?>
			<div>
				<img src="<?php echo $photo['chemin']; ?>" />
			</div>
		<?php
		}
	}
	else
	{
	?>
		<h4>Aucune photo pour le moment...</h4>
	<?php
	}
	?>
</div>
<h2>Vidéos : </h2>
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
<div>
	<?php
	
	if(sizeof($videos) != 0)
	{
		foreach($videos as $video)
		{
		?>
			<div>
			<object width="425" height="350" data="http://www.youtube.com/v/<?php echo $video['code']; ?>" type="application/x-shockwave-flash">
				<param name="src" value="http://www.youtube.com/v/<?php echo $video['code']; ?>" />
			</object>
			</div>
		<?php
		}
	}
	else
	{
	?>
		<h4>Aucun vidéo pour le moment...</h4>
	<?php
	}
	?>
</div>
<?php
include('vue/commun/footer.php');
?>