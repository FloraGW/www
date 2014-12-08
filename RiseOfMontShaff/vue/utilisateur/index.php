<?php 
if($utilisateur != false)
{
?>
	<img src="<?php echo $utilisateur['avatar']; ?>" /><br/>
	<h3><?php echo $utilisateur['nom']; ?></h3>
	<h5><?php echo $utilisateur['role']; ?></h5>
<?php
}
else
{
	echo "Utilisateur inexistant...";
}
?>
