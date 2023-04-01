<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exexrcice 2</title>
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
                        2. Donner la valeur et le type des variables  après chaque instruction du script suivant : <br>
                        a.script 1 :<br>
                        <?= '<ul>
                                <li>$x= "3 fois";<li>
                                <li>$x*= 5.2;</li>
                                <li>$z= $x%5;</li>
                                <li>$x= "0" || 1;</li>
                                <li>$y= is_string($x);</li>
                                </ul>';
                                ?>
                        <!-- Source : www.exelib.net -->
                    </p>
                </div>
                <h3>Ma réponse au sujet : </h3>
                <?php
                    $x="3 fois";
                    $x *= 5.2;
                    $z=$x%5;
                    $x= "0" || 1;
                    $y=is_string($x);
                    //Source : www.exelib.net
                    ?>
                <p>
                    <?php
                    $x="3 fois";
                    var_dump($x);
                    echo "<br>";
                    $x *= 5.2;
                    echo var_dump($x) . PHP_EOL;
                    echo "<br>";
                    $z=$x%5;
                    var_dump($z) . "<br>";
                    echo "<br>";
                    $x= "0" || 1;
                    var_dump($x) . "<br>";
                    echo "<br>";
                    $y=is_string($x);
                    var_dump($y) . "<br>";
                    echo "<br>";
                    
                    ?>
                </p>
            </section>
        </main>
        <?php require_once('./include/footer.php')?>
    </div>
</body>
</html>