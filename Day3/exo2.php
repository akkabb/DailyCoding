<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Boucles | exercice 2</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé</h2>
                <p>
                    1. Ecrivez un script qui affiche les multiples du nombre 3 inférieurs à un nombre donné.
                        //Source : www.exelib.net
                </p>
            </div>
            <div class="answer">
                <p>
                    Je m'applique à solutionner le problème :
                </p>
                <ul>
                    <li><p>La variable <strong>$userNumber</strong> est la variable qui contient le nombre donné</p></li>
                    <li><p>La variable <strong>$i</strong> est mon compteur et par la même occasion la variable qui affichera le multiple de 3</p></li>
                </ul>

                <p>
                    <pre>
                        $userNumber = 15;<br>
                        $i = 0;<br>
                        <br>
                        while ($i < $userNumber)<br>
                        {<br>
                            if ($i % 3 == 0)<br>
                            { <br>
                                echo $i . ' est multiple de 3  ';<br>
                            }<br>
                            $i++;<br>
                        }<br>

                    </pre>
                </p>
                <p>Si le nombre donné vaut "15" voilà le résultat : </p>
                <?php
                    $userNumber = 15;
                    $i = 0;

                    while ($i < $userNumber)
                    {
                        if ($i % 3 == 0)
                        { 
                            echo $i . ' est multiple de 3 <br>';
                        }
                        $i++;
                    }
                ?>
                <h4>J'explique mon raisonnement :</h4>
                <p>
                    L'utilisateur entre un nombre donné. <br>
                    Tant que le compteur est inférieur à ce nombre donné le compteur s'incrémente.
                    <br>Il y a une condition qui affiche uniquement les valeurs qui sont multiple de 3.
                </p>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>