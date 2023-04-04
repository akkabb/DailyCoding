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
                <h3>
                    Utiliser la boucle for pour tester si un nombre donné est premier<br>
                    <small>Source : www.exelib.net</small>
                </h3>
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
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <?php
                   $n=23;
                   $count=1;
                   //la fonction sqrt($n) renvoie la racine du nombre $n
                   $racine=sqrt($n);
                   for($i=2; $i<=$racine;$i++) {
                       if($n % $i == 0) $count++;
                   }
                   if($count==1)
                       echo"$n est un nombre premier";
                   else 
                       echo"$n n'est pas un nombre premier";
                    //Source : www.exelib.net
                ?>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>