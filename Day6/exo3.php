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
            <h3> Quel jour de la semaine était le 6 novembre 1975 :</h3>
            <hr>
            <h3>Je m'exerce à donner le meilleur de moi-même : </h3>
            <pre>
                <?php 
                    $dayToFind = strtotime('1975-11-6');

                    $day = date('l', $dayToFind);

                    echo $day . "<br>";
                
                ?>
            </pre>
            <h3>Voici mon code : </h3>
            <p>
            $dayToFind = strtotime('1975-11-6');<br>

            $day = date('l', $dayToFind);<br>

            echo $day . "&ltbr&gt";<br>
            </p>
            <h3><strong>NOTA BENE</strong> : Mon Commentaire</h3>
            <p>Un <a href="https://www.exelib.net/php/afficher-et-formater-la-date-et-l-heure.html#solution-tab">lien</a> vers la correction qui apporte plus d'information que ce que j'ai pu faire. </p>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>