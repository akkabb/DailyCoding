<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Boucles | exercice 3</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé</h2>
                <p>
                    3. Utiliser la boucle for pour tester si un nombre donné est premier
                    //Source : www.exelib.net
                </p>
            </div>
            <div class="info">
                <div class="info_header">
                    <p>Note</p>
                </div>
                <div class="info_content">
                    <p>
                    Un nombre premier est un entier naturel qui admet exactement deux diviseurs distincts entiers et positifs (qui sont alors 1 et lui-même).
                    //Source : www.exelib.net
                    </p>
                </div>
            </div>
            <div class="answer">
                <p>
                    Je m'applique à solutionner le problème :
                </p>
                <?php
                    $userNumber = 15;
                    $i = 0;

                    while ($i < $userNumber)
                    {
                        if ($i % 3 == 0)
                        { 
                            echo $i . 'est multiple de 3 <br>';
                        }
                        $i++;
                    }
                ?>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>