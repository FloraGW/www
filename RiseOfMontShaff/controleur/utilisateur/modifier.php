<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//ERREURS DANS $_REQUEST
// errNom
// errMotDePasse
// errImageExtension
// errImageSize
if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] != null)
{
	$nom = htmlspecialchars($_SESSION['utilisateur']['nom'], ENT_SUBSTITUTE, "");
	$motDePasse = htmlspecialchars($_SESSION['utilisateur']['motDePasse'], ENT_SUBSTITUTE, "");
	$avatar = htmlspecialchars($_SESSION['utilisateur']['avatar'], ENT_SUBSTITUTE, "");
	
	if(isset($_POST['nom']) && !empty($_POST['nom']))
	{
		include_once('modele/utilisateur/getUtilisateurByNom.php');
		$utilisateurExiste = getUtilisateurByNom($_POST['nom']);
		if($utilisateurExiste == false)
		{
			$nom = htmlspecialchars($_POST['nom'], ENT_SUBSTITUTE, "");
			$_REQUEST['MAJ'] = true;
		}
		else 
		{
			$_REQUEST['errNom'] = true;
			$_REQUEST['err'] = true;
		}
	}
	if(isset($_POST['motDePasse']) && !empty($_POST['motDePasse']) 
		&& isset($_POST['motDePasse2']) && !empty($_POST['motDePasse2']))
	{
		if($_POST['motDePasse'] == $_POST['motDePasse2'])
		{
			$motDePasse = $_POST['motDePasse'];
			$_REQUEST['MAJ'] = true;
		}
		else
		{
			$_REQUEST['errMotDePasse'] = true;
			$_REQUEST['err'] = true;
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
				// On peut valider le fichier et le stocker définitivement
				unlink($avatar);
				$avatar = "vue/utilisateur/image/" . $_SESSION['utilisateur']['nom'] . '.' . $extension_upload;
				move_uploaded_file($_FILES['image']['tmp_name'], $avatar);
				$_REQUEST['MAJ'] = true;
			}
			else 
			{
				$_REQUEST['errImageExtension'] = true;
				$_REQUEST['err'] = true;
			}
		}
		else
		{
			$_REQUEST['errImageSize'] = true;
			$_REQUEST['err'] = true;
		}
	}
	if(isset($_REQUEST['MAJ']) && $_REQUEST['MAJ'])
	{
		include_once('modele/utilisateur/updateUtilisateur.php');
		updateUtilisateur($_SESSION['utilisateur']['noUtilisateur'], $nom, $motDePasse, $avatar);
		include('modele/utilisateur/getUtilisateur.php');
		$_SESSION['utilisateur'] = getUtilisateur($_SESSION['utilisateur']['noUtilisateur']);
	}
	
	include_once('vue/utilisateur/modifierCompte.php');
}
else 
{
	header('Location: pageInexistante.php');
	exit();
}
?>