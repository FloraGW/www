<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=RiseOfMontShaff', 'root', '');
} catch(Exception $exception) {
	die('Erreur : ' . $exception->getMessage());
}