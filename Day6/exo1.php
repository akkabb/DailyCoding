<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Utiliser les fonctions d'affichage des dates | Exercice 1</title>
</head>
<body>
    <div class="container">
        <?php require_once('./include/header.php')?>
        <main>
            <h2>Enonce : </h2>
            <h3>Ecrire un script qui affiche la date et l'heure courantes sous les formes suivantes :</h3>
            <p>Exemple d'exécution :</p>
            <div class="code_wrap">
                <pre>
                Mon, 25 Jan 2016 23:31:01 +0100<br>
                Monday/January/2016<br>
                25/Jan/2016<br>
                25-01-16<br>
                23h: 31m: 01s<br>
                //Source : www.exelib.net
                </pre>
            </div>
            <hr>
            <h3>Je m'exerce à donner le meilleur de moi-même : </h3>
            <pre>
                <?php 
                echo date("D, j M Y H:i:s") . "<br>";
                echo date("l/F/Y") . "<br>";
                echo date("j/M/Y") . "<br>";
                echo date("j-m-y") . "<br>";
                echo date('H\h: i\m: s\s');
                
                ?>
            </pre>
            <h3>Voici mon code : </h3>
            <p>
                echo date("D, j M Y H:i:s") . "&ltbr&gt";<br>
                echo date("l/F/Y") . "&ltbr&gt";<br>
                echo date("j/M/Y") . "&ltbr&gt";<br>
                echo date("j-m-y") . "&ltbr&gt";<br>
                echo date('H\h: i\m: s\s');<br>
            </p>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>