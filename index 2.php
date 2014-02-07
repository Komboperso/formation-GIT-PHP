<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Notre première instruction : echo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <?php include("includes/header.php"); ?>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette lignea été écrite entièrerement en HTML.<br />
            //text en commentaire
            
            
            <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
            <P> 
            
            /* Commmentaire mutiligne
            test de commentaire multiligne
            test 2
            */
            
            <?php include("includes/menu.php");?>
            <?php echo "test ecriture par BD"; ?>
            <P> <P> <P> 
            
            <?php $variable_ben = "benjamin duclos"; ?>
            <?php echo 'mon nom est ' .$variable_ben.    ' d aurec'; ?>
            
            <?php array{2}=test; ?>
            
            <?php $variable_calcul1 = 100.5; ?>
            <?php $variable_calcul2 = (5+3)/2; ?>
            <?php echo $variable_calcul1; ?>
            
                 <P> <P> <P> 
            <?php echo $variable_calcul1 + $variable_calcul2 ?>
            <?php echo 'test'; ?>
            
            Ajout de commentaire 2 sur la branche principale
        </p>
    </body>
</html>