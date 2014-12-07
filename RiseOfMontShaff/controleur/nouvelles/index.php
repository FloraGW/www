<?php
include_once('modele/nouvelles/getAllNouvelles.php');
$nouvelles = getAllNouvelles();

foreach($nouvelles as $cle => $nouvelle)
{
	echo $nouvelles[$cle]['titre'] . "<br/>" . $nouvelles[$cle]['contenu'];
	$nouvelles[$cle]['titre'] = htmlspecialchars($nouvelle['titre']);
	$nouvelles[$cle]['contenu'] = nl2br(htmlspecialchars($nouvelle['contenu']));
	echo $nouvelles[$cle]['titre'] . "<br/>" . $nouvelles[$cle]['contenu'] . "TABARNAK !";
}

include_once('vue/nouvelles/index.php');
?>