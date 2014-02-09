

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



<head>
<h2> voici le fomrumaire d'inscription'</h2>

<form method="POST"action="minichat_post.php">
<input type='text' name='pseudo' value='pseudo'>
<input type='text' name='message' value='message'>
<input type='submit' value='envoyer'>
</head>