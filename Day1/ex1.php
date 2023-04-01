<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exexrcice 1</title>
</head>
<body>
    <?php require_once('./include/nav.php'); ?>
    <div class="container">
        <main>
            <section>
                <div class="wrapper_gray">
                    <h1>Manipuler les Variables et les constantes</h1>
                    <h2>Enoncé :</h2>
                    <p>
                        1. Donner les valeurs des variables $a,$b,$c,$d à la fin des scripts suivants : <br>
                        a.script 1 :<br>
                        <?= '<ul>
                                <li>$a= "Les ";<li>
                                <li>$b= "7 merveilles du monde";</li>
                                <li>$c= $a . $b;</li>
                                <li>$d= $b + 13;</li>
                                <li>$b= &$c;</li>
                                </ul>';
                                ?>
                        <!-- Source : www.exelib.net -->
                    </p>
                </div>
                <h3>Ma réponse au sujet : </h3>
                <?php
                    $a="Les ";
                    $b="7 merveilles du monde";
                    $c=$a . $b;
                    $d=$b + 13;
                    $b= &$c;
                ?>
                <p>
                    <?php
                    echo $a . "<br>";
                    echo $b . "<br>";
                    echo $c . "<br>";
                    echo $d . "<br>";
                    ?>
                </p>
                <p>
                    <?php
                       for  ($i = 0; $i<50; $i++)
                       echo "**";
                       ?>
                 </p>
                 <h2>Enoncé :</h2>
                 <p>
                     b.script 2 : </br>
                     <?= '
                        <ul>
                        <li>$a="5 + 5";</li>
                        <li>$b="2E2";</li>
                        <li>$c=$a + $b;</li>
                        <li>$d=(double)$b;</li>
                        </ul>
                        ';?>
                 </p>
                 <?php 
                    $a="5+5";
                    $b="2E2";
                    $c=$a+$b;
                    $d=(double)$b;
                 ?>
                 <h3>Ma réponse au sujet : </h3>
                 <p><?php
                    echo $a . "<br>";
                    echo $b . "<br>";
                    echo $c . "<br>";
                    echo $d . "<br>";
                  ?></p>
            </section>
        </main>
        <?php require_once('./include/footer.php')?>
    </div>
</body>
</html>