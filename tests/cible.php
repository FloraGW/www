<?php
if (isset($_POST['mot_de_passe']))
{
	if ($_POST['mot_de_passe'] == 'kangourou')
	{
		echo 'Les codes secrets de la NASA sont :';
		echo 'Bonjour et Toto';
	}
	else if ($_POST['mot_de_passe'] == '')
	{
		echo 'Il faut entrer un mot de passe un mot de passe petit malin !';
	}
	else 
	{
		echo 'Ce n\'est pas le bon mot de passe...';
	}
}
?>