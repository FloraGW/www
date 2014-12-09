<?php
function getLatestVideo()
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT noVideo, code
				FROM video ORDER BY noVideo DESC LIMIT 1");
	$req->execute();
	
	$video = $req->fetch();
	
	return $video;
}
?>