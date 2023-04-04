<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>affichage et formatage  | exercice 3</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <p>
                Utiliser la fonction "str_pad()" afin de formater l'affichage d'un sommaire composé d'une suite de titres et leurs numéros de page de la façons suivante :
                //Source : www.exelib.net
                </p>
                <p>Exemple d'exécution : </p>
                <div class="wrap_exo3">
                    <div>
                        <p>Chapitres</p>
                        <p class="wrap_page">Pages</p>
                    </div>
                    <p>Structures de base ..................... 1</p>
                    <p>Les classes  ........................... 5</p>
                </div>
                <p>Compéter le code :</p>
                <div class="wrap_Code">
                    <p>$titre1= "Structures de base";</p>
                    <p>$titre2= "Les classes";</p>
                    <p>$page1="1";</p>
                    <p>$page2="5";</p>
                </div>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <?php
                    $titre1= "Structures de base";
                    $titre2= "Les classes";
                    $page1="1";
                    $page2="5";
                    // $len1 = strlen($titre1);
                    // $len2 = strlen($titre2);
                    // echo $len1 . " et " . $len2;
                   echo str_pad($titre1, 26, ".") . $page1;
                   echo "<br>";
                   echo str_pad($titre2, 30, ".") . $page2;
                ?>
            </div>
            <div class="answer">
                <p>Voici mon code : </p>
                <pre>
                   echo str_pad($titre1, 26, ".") . $page1;
                   echo str_pad($titre2, 30, ".") . $page2;
                </pre>
            </div>
            <div class="correction correction_exo3">
                <h3>La correction : </h3>
                <p><em>Très interessante et plus complète que ce que j'ai pu réaliser : </em></p>
                <pre>
                <!-- on complète par des espaces pour la première ligne jusqu'à arriver à 20 caractères -->
                <!-- pour les numéros de pages on complète sur le coté gauche. -->
                echo str_pad("Chapitres",20," "),str_pad("Pages",20," ",STR_PAD_LEFT),"&ltbr&gt";

                echo str_pad($titre1,20,"."),str_pad($page1,20,".",STR_PAD_LEFT),"&ltbr&gt";
                
                echo str_pad($titre2,20,"."),str_pad($page2,20,".",STR_PAD_LEFT),"&ltbr&gt";
                //Source : www.exelib.net
                </pre>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>