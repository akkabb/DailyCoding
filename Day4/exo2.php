<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>affichage et formatage  | exercice 2</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <h3>
                Ecrire un script qui permet d'afficher les mots d'une phrase donnée avec une initiale en majuscule .
                //Source : www.exelib.net
                </h3>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <p>Voici la phrase donnée :<p>
                <p> <span class="exo2_sentence">Je travaille tous les jours pour ne pas oublier de repéter mon daily coding</span></p>
                <p>voici le code : </p>
                <pre>
                    $s = "Je travaille tous les jours pour ne pas oublier de repéter mon daily coding";<br>
                    $upper = ucwords($s);<br>
                    echo $upper;<br>
                </pre>
                <?php
                    //ucfirst() => pour mettre en majuscule la première lettre d'une chaine.
                    //ucwords() => pour mettre en majuscule la première lettre de chaque mot dans une chaine.
                   $s = "Je travaille tous les jours pour ne pas oublier de repéter mon daily coding";
                   $upper = ucwords($s);
                   echo $upper;
                ?>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>