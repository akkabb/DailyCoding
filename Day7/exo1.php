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
                <h3>Calculez votre âge à l'instant en cours.</h3>
            </div>
            <hr>
            <div class="answer">
                <h3>Je m'efforce de rendre un travail correct : </h3>
                <?
                    echo "<p>Voici mon age à l'instant en cours : </p>";
                    
                    $birthD = new DateTimeImmutable('1979-11-13');
                    
                    $today = new DateTimeImmutable('2023-04-07');
                    $interval = $birthD->diff($today);
                    echo $interval->format('%y ans');
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    echo "&ltp&gtVoici mon age à l'instant en cours : &lt/p&gt";<br>
                    
                    $birthD = new DateTimeImmutable('1979-11-13');<br>
                    
                    $today = new DateTimeImmutable('2023-04-07');<br>
                    $interval = $birthD->diff($today);<br>
                    echo $interval->format('%y ans');<br>
                </p>
                <h3>LINKS :</h3>
                <p>Voir la correction proposé sur le site : <a href="https://www.exelib.net/php/effectuer-des-calculs-sur-les-dates.html#solution-tab" class="correction_link"><strong>exelib</strong></a></p>
            </div>
        </main>
        <? require_once('include/footer.php');?>
    </div>  
</body>
</html>