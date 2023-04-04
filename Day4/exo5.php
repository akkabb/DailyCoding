<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>affichage et formatage  | exercice 5</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé :</h2>
                <h3>
                    <!-- écriture spécifique pour que html ne soit pas interprété par le navigateur -->
                Rédigez le script qui permet d'afficher la chaîne ":&ltul&gt&ltli&gtitem1</li>&ltli&gtitem2</li>&ltul&gt" telle quelle.
                  <!-- <ul>
                    <li>item1</li>
                    <li>item2</li>
                  </ul> -->
                //Source : www.exelib.net
                </h3>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <?php
                    $ul = "ul";
                    $li = "li";
                    $item1 = "item1";
                    $item2 = "item2";
                    echo '<'.$ul.'><'.$li.'>'.$item1.'</'.$li.'><'.$li.'>'.$item2.'</'.$li.'></'.$ul .'>';
                ?>
                
            </div>
            <div class="answer">
                
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>