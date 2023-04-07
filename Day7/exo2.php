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
                <h3>Vérifier si la date du 29 février 2010 est valide.</h3>
            </div>
            <hr>
            <div class="answer">
                <h3>Je m'efforce de rendre un travail correct : </h3>
                <?
                    // checkdate(int $month, int $day, int $year): bool
                    $month = 02;
                    $day = 29;
                    $year = 2010;
                    if (checkdate(02, 29, 2010))
                        echo "La date est valide";
                    else
                        echo "La date n'est pas du tout valide";
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                // checkdate(int $month, int $day, int $year): bool
                <br>   
                    $month = 02;<br>
                    $day = 29;<br>
                    $year = 2010;<br>
                    if (checkdate(02, 29, 2010)){
                        <br>
                            echo "La date est valide";<br>
                    }
                    else{
                        <br>
                            echo "La date n'est pas du tout valide";<br>
                    }
                </p>
                <h3>LINKS :</h3>
                <p>Voir la correction proposé sur le site : <a href="https://www.exelib.net/php/effectuer-des-calculs-sur-les-dates.html#solution-tab" class="correction_link"><strong>exelib</strong></a></p>
            </div>
        </main>
        <? require_once('include/footer.php');?>
    </div>  
</body>
</html>