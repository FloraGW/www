<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
//if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
//{
	// Testons si le fichier n'est pas trop gros (2 Mo)
	if ($_FILES['image']['size'] <= 2097152)
	{
		// Testons si l'extension est autorisée
		$infosfichier = pathinfo($_FILES['image']['name']);
		$extension_upload = $infosfichier['extension'];
		$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		if (in_array($extension_upload, $extensions_autorisees))
		{
			include_once('modele/galerie/insertImage.php');
			$dossier = 'vue/galerie/image/';
			$chemin = insertImage($dossier, $extension_upload);
			
			// On peut valider le fichier et le stocker définitivement
			move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
		}
	}
//}
?>