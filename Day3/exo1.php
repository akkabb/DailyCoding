<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Boucles | exercice 1</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé</h2>
                <p>
                    1. Déclarer un nombre $initial avec une valeur supérieure à 100 et inférieure à 1000  en utilisant la boucle " while"  <br>
                    effectuer des tirages aléatoires des nombres jusqu'à obtenir la même valeur du $initial  et afficher le nombre d'itérations réalisées.<br>
                    Donnez une variante avec la boucle do ....while
                    //Source : www.exelib.net
                </p>
            </div>
            <div class="answer">
                <p>
                    Je m'applique à solutionner le problème :
                </p>
                <?php
                    $initial = 200;
                    $alt = rand(100, 1000);
                    $i = 1;
                    // $count = 0;

                    while($alt != $initial)
                    {
                         $alt = rand(100, 1000);
                        $i++;
                    }
                    echo "Le nombre d'itérations réalisés s'élève a : " . $i;
                ?>
                <h3>
                    A REFAIRE ( sans avoir regarder la solution je n'y arrivait pas)
                </h3>
            </div>
            <div class="answer">
                <p>La variante</p>
                <?php
                    $initial =495;
                    //compteur
                    $i=0;
                    do{
                        $r=mt_rand(100,1000);
                        $i++;	
                    }while($r!=$initial);
                    echo "$initial trouvé après $i itérations";
                    //Source : www.exelib.net

                ?>
                <h3>
                    A REFAIRE ( sans avoir regarder la solution je n'y arrivait pas)
                </h3>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>