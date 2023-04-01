<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exexrcice 3</title>
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
                        3. On considère la fonction bool suivante : <br>
                       
                        <?= '
                            function bool($var){
                                if ($var) echo "TRUE<br>";
                                else echo "FALSE<br>";
                            }
                        ';
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
                  ?></p>
            </section>
        </main>
        <?php require_once('./include/footer.php')?>
    </div>
</body>
</html>