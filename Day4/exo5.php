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
                <h3>Je n'ai pas su trouver la réponse.</h3>
                <p><strong>J'invoque la force de la correction : </strong></p>
                <?php
                    echo htmlspecialchars("<ul>
                        <li>item 1</li>
                        <li> item 2</li>
                        </ul>");
                    echo htmlentities("<ul>
                        <li>item 1</li>
                        <li> item 2</li>
                        </ul>");
                    //Source : www.exelib.net

                ?>
                <div class="code_correction">
                    <h3>Voici le code : </h3>
                    <pre>
                    echo htmlspecialchars("&ltul&gt
                    &ltli&gtitem 1&ltli&gt
                    &ltli&gt item 2&ltli&gt
                    &ltul&gt");
                    echo htmlentities("&ltul&gt
                    &ltli&gtitem 1&ltli&gt
                    &ltli&gt item 2&ltli&gt
                    &ltul&gt");
                    </pre>
                </div>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>