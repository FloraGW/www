<link rel="stylesheet" type="text/css" href="vue/accueil/style.css">

<?php include_once("vue/commun/header.php"); ?>
<span class="gauche">
<?php 
if($nouvelle != false)
{?>
	<div class="nouvelle">
		<div class="nouvelleTitre" align="center">
			Dernière nouvelle
		</div>
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
else 
{?>
	<div class="nouvelle">
		<b>Il n'y a aucune nouvelle pour le moment...</b>
	</div>
<?php
}

if($post != false)
{?>
<div class="categorie" align="center">
Dernière réponse du forum
</div>
	<div class="categorie">
	<a href="categories.php">Forum</a> > 
	<a href="fils.php?noCategorie=<?php echo $categoriePost['noCategorie']; ?>"><?php echo $categoriePost['nom']; ?></a> > 
	<a href="posts.php?noFil=<?php echo $filPost['noFil']; ?>"><?php echo $filPost['nom']; ?></a>
	</div>
	<div class="fin"></div>
		<div class="post">
			<span class="postUtilisateur"> <!-- Utilisateur -->
				<?php include('controleur/utilisateur/index.php'); ?>
			</span><!-- 
			--><span class="postTexte"> <!-- Post -->
				<div class="postDate">
					<b><?php echo $post['dateCreation']; ?></b>
				</div>
				<div class="postTexte">
					<?php echo $post['contenu']; ?>
				</div>			
			</span>	
		</div>
<?php
}
else
{?>
	<div class="categorie">
		<a href="categories.php">Forum</a>
	</div>
	<div class="fin"></div>
	<div class="post">
		<b>Il n'y a aucun post pour le moment...</b>
	</div>
<?php
}
?>
</span>
<span class="droite">

<?php
if($photo != false)
{?>
<div class="nouvelle">
	<div class="section">
	Dernière image
	</div>
	<div class="item">
		<img class="image" src="<?php echo $photo['chemin']; ?>" />
		</div>
		</div>
<?php
}
else
{?>
	<div class="item">
		<b>Il n'y a aucune photo pour le moment...</b>
	</div>
<?php
}?>
<?php 
if($video != false)
{?>
<div class="nouvelle">
<div class="section">
	Dernière vidéo
	</div>
	<div class="item">
		<object width="425" height="350" data="http://www.youtube.com/v/<?php echo $video['code']; ?>" type="application/x-shockwave-flash">
			<param name="src" value="http://www.youtube.com/v/<?php echo $video['code']; ?>" />
		</object>
	</div>
	</div>
<?php
}
else
{?>
	<div class="item">
		<b>Il n'y a aucun vidéo pour le moment...</b>
	</div>
<?php
}
?>
</span>
<?php
include_once("vue/commun/footer.php"); ?>
