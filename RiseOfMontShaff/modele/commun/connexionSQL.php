<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=RiseOfMontShaff', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch(Exception $exception) {
	die('Erreur : ' . $exception->getMessage());
}