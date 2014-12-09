<?php 
if($utilisateur != false)
{
?>
	<img class="utilisateur" src="<?php echo $utilisateur['avatar']; ?>" /><br/>
	<div class="utilisateur"><b><?php echo $utilisateur['nom']; ?></b></div>
	<div class="utilisateurRole"><b><i><?php echo $utilisateur['role']; ?></i></b></div>
<?php
}
else
{
	echo "Utilisateur inexistant...";
}
?>
