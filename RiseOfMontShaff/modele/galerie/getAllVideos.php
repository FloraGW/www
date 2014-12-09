<?php
function getAllVideos()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noVideo, code
			FROM video");
	$req->execute();
	
	$videos = $req->fetchAll();
	
	return $videos;
}
?>