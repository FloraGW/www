<?php
if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] != null)
{
	$nom = htmlspecialchars($_SESSION['utilisateur']['nom'], ENT_SUBSTITUTE, "");
	$motDePasse = htmlspecialchars($_SESSION['utilisateur']['motDePasse'], ENT_SUBSTITUTE, "");
	$avatar = htmlspecialchars($_SESSION['utilisateur']['avatar'], ENT_SUBSTITUTE, "");
	
	if(isset($_POST['nom']) && !empty($_POST['nom']))
	{
		include_once('modele/utilisateur/getUtilisateurByNom.php');
		$utilisateurExiste = getUtilisateurByNom($_POST['nom']);
		if(utilisateurExiste == false)
		{
			$nom = htmlspecialchars($_POST['nom'], ENT_SUBSTITUTE, "");
		}
		else 
		{
			$_REQUEST['errNom'] = true;
		}
	}
	if(isset($_POST['motDePasse']) && !empty($_POST['motDePasse']) 
		&& isset($_POST['motDePasse2']) && !empty($_POST['motDePasse2']))
	{
		if($_POST['motDePasse'] == $_POST['motDePasse2'])
		{
			$motDePasse = $_POST['motDePasse'];
		}
		else
		{
			$_REQUEST['errMotDePasse'] = true;
		}
		
	}
	// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
	if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
	{
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
				
				//IL FAUT SUPPRIMER L'ANCIENNE PHOTO DE LA BASE DE DONNÉES ET DES FICHIERS !!!
			}
			else 
			{
				$_REQUEST['errImageExtension'] = true;
			}
		}
		else
		{
			$_REQUEST['errImageSize'] = true;
		}
	}
}
include_once('vue/utilisateur/modifierCompte.php');
?>