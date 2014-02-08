<?php 
try
{
	&bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}

catch (exeption $e)
{
die('erreur : ' . $e->getMessage()):
}


$reponse = $bdd->query(SELECT * FROM jeux_video');


while ($donnees = $reponse->fetch())
{
	?>
	
	<strong> jeux Videos </strong>
	<?php echo $donnees['nom']; ?>
	
	
	<?php
}

$reponse->closeCursor();
?>
 
