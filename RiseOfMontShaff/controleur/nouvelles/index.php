<?php
include_once('modele/nouvelles/getAllNouvelles.php');
$nouvelles = getAllNouvelles();

foreach($nouvelles as $cle => $nouvelle)
{
	$nouvelles[$cle]['titre'] = htmlspecialchars($nouvelle['titre'], ENT_SUBSTITUTE, "");
	$nouvelles[$cle]['contenu'] = nl2br(htmlspecialchars($nouvelle['contenu'], ENT_SUBSTITUTE, ""));
}

include_once('vue/nouvelles/index.php');
?>