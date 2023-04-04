<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>affichage et formatage  | exercice 1</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé</h2>
                <h3>
                   Etant donné le code suivant
                </h3>
                <div class="wrap_code">
                    <p>
                        &lt?php<br>$a = 2; <br> $b = 12; <br> $r = $a + $b;
                    </p>
                </div>
                <ul>
                    <ol>
                        <p>Utiliser l'instruction "echo" afin d'afficher le résultat sous la forme suivante : </p>
                        <div class="roll_up">
                            <p>2+12 "by echo"</p>
                            <p>$a + $b "by echo"</p>
                        </div>
                    </ol>
                    <ol>
                        <p>même question en utilisant l'instruction "print"</p>
                    </ol>
                </ul>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <?php
                   $a = 2;
                   $b = 12;
                   $r = $a + $b;
                ?>
                <div class="pre_display">
                    <pre>
                        <?php
                            echo "<p>". $a . '+' . $b . '=' . $r .  ' "by echo"'. "</p>";
                            // echo "<br>";
                            echo '$a' . '+' . '$b' . '=' . $r .  ' "by echo"';
                        ?>
                    </pre>
                </div>
            </div>
            <div class="answer">
                <pre>
                    <?php
                    print  "<p>". $a . '+' . $b . '=' . $r .  ' "by echo"'. "</p>";
                    print  "<p>". '$a' . '+' . '$b' . '=' . $r .  ' "by echo"'. "</p>";
                    ?>
                </pre>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>