<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The Rise of Mont-Shäff</title>
        <link rel="stylesheet" type="text/css" href="vue/commun/style.css">
    </head>
 
    <body>
    
    <div id="wrap">
	    <header>
	    	<div class="header">
	       		<?php include_once("vue/utilisateur/login.php"); ?>
	       	</div>  	
	    </header>
	    <div class="body">
	    	<div class="titre">
	       		<b>THE RISE OF
	       		<br>MONT-SHÄFF</b>
	       	</div>
	    
	    <?php include_once("menu.php"); ?>
	    
	    <div class="module">