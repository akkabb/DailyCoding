<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <? require_once('include/head.php');?>
    <title>Effectuer des calculs sur les dates</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper_topic">
                <h2>Énoncé : </h2>
                <h3>Rédigez le script qui teste si le 1 Mai 2016 est un vendredi ou un lundi , si oui il affiche « Week-end prolongé !».</h3>
            </div>
            <hr>
            <div class="answer">
                <h3>Je m'efforce de rendre un travail correct : </h3>
                <?
                    $dayFirstMay = date("l", gmmktime(0, 0, 0, 5, 1, 2016));
                    //echo "May 1, 2016 is on a " . date("l", gmmktime(0, 0, 0, 5, 1, 2016));
                    if ($dayFirstMay != "monday" || $dayFirstMay != "friday")
                        echo "Mince on reprend lundi";
                    else
                        echo "Week-end prolongé";
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    $dayFirstMay = date("l", gmmktime(0, 0, 0, 5, 1, 2016));
                    <br>
                    //echo "May 1, 2016 is on a " . date("l", gmmktime(0, 0, 0, 5, 1, 2016));
                    <br>  
                    if ($dayFirstMay != "monday" || $dayFirstMay != "friday")
                    {
                        <br>  
                        echo "Mince on reprend lundi"; <br>  
                    }
                    else
                    {
                        <br>  
                        echo "Week-end prolongé"; <br>  
                    }
                <br>   
                   
                </p>
                <h3>LINKS :</h3>
                <p>Voir la correction proposé sur le site : <a href="https://www.exelib.net/php/effectuer-des-calculs-sur-les-dates.html#solution-tab" class="correction_link"><strong>exelib</strong></a></p>
            </div>
        </main>
        <? require_once('include/footer.php');?>
    </div>  
</body>
</html>