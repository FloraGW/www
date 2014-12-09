<link rel="stylesheet" type="text/css" href="vue/accueil/style.css">
<link rel="stylesheet" type="text/css" href="vue/nouvelles/style.css">
<link rel="stylesheet" type="text/css" href="vue/forum/style.css">


<?php include_once("vue/commun/header.php"); ?>

<?php 
if($nouvelle != false)
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
else 
{?>
	<div class="nouvelle">
		<b>Il n'y a aucune nouvelle pour le moment...</b>
	</div>
<?php
}

if($post != false)
{?>
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
	<div class="fin"></div>
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
	<div class="fin"></div>
<?php
}
?>
<?php

if($photo != false)
{?>
<span class="droite">
	<div class="section">
	<div class="item">
		<img src="<?php echo $photo['chemin']; ?>" />
	</div>
	</div>
	</span>
<?php
}
else
{?>
	<span class="droite">
	<div class="section">
	<div class="item">
		<b>Il n'y a aucune photo pour le moment...</b>
	</div>
	</div>
	</span>
<?php
}
if($video != false)
{?>
<span class="droite">
<div class="section">
	<div class="item">
		<object width="425" height="350" data="http://www.youtube.com/v/<?php echo $video['code']; ?>" type="application/x-shockwave-flash">
			<param name="src" value="http://www.youtube.com/v/<?php echo $video['code']; ?>" />
		</object>
	</div>
	</div>
	</span>
<?php
}
else
{?>
	<span class="droite">
	<div class="section">
	<div class="item">
		<b>Il n'y a aucun vidéo pour le moment...</b>
	</div>
	</div>
	</span>
<?php
}
?>
</div>
<?php
include_once("vue/commun/footer.php"); ?>
