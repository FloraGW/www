<?php 
$_POST['lienYoutube'] = htmlspecialchars($_POST['lienYoutube'], ENT_SUBSTITUTE, "");
$code = substr(stristr($_POST['lienYoutube'], 'v='), 2, 11);
include_once('modele/galerie/insertVideo.php');
insertVideo($code);
?>