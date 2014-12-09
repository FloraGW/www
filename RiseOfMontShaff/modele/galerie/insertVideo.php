<?php
function insertVideo($code)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO video VALUES ('', ?)");
	$req->execute(array($code));
}
?>