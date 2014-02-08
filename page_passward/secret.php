<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>page secret</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h2>Affichage de la page secret</h2>
        
       <p>
       

      <?php 
      
    
if (isset($_POST['pass']) AND $_POST['pass']  == "kangourou")
     {
     echo "OUI </br> Vous avez saisi le bon mot de passe";
     }

else
	{
	echo "NON NON et NON </br>votre mot de pass est incorect <a href='formulaire.php'>retour</a>" ;  	 	
	}
   	 	
      ?>

       	 
       	 
       	 
       	 
        </p>
    </body>
</html>