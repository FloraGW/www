<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0)
{
	// Testons si le fichier n'est pas trop gros (1 Mo)
	if ($_FILES['avatar']['size'] <= 1048576)
	{
		// Testons si l'extension est autorisée
		$infosfichier = pathinfo($_FILES['avatar']['name']);
		$extension_upload = $infosfichier['extension'];
		$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		if (in_array($extension_upload, $extensions_autorisees))
		{
			// On peut valider le fichier et le stocker définitivement
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'vue/utilisateur/image/' . $_POST['nom'] . '.' . $extension_upload);
			$avatar = "vue/utilisateur/image/" . $_POST['nom'] . '.' . $extension_upload;
		}
	}
}
?>