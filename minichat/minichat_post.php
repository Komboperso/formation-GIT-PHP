


<?php
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
?>




<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'LEloBA42');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


header('Location:minichat.php')


<head>
<h2> Post du message</h2>
<?php echo $_POST['pseudo'];?></br><?php echo $_POST['message'];?>

</head>