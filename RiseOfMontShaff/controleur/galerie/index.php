<?php
include_once('modele/galerie/getAllPhotos.php');
$photos = getAllPhotos();

foreach($photos as $cle => $photo)
{
	$photos[$cle]['chemin'] = htmlspecialchars($photo['chemin'], ENT_SUBSTITUTE, "");
}

include_once('modele/galerie/getAllVideos.php');
$videos = getAllVideos();

foreach($videos as $clef => $video)
{
	$videos[$clef]['code'] = htmlspecialchars($video['code'], ENT_SUBSTITUTE, "");
}

include_once('vue/galerie/index.php');
?>