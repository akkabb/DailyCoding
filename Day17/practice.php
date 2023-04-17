<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coding Game</title>
</head>
<body>
    <div class="container">
        <h2>Exercices-PHP</h2>
        <section class="ex01">
            <div class="wrapper">
                <h2>Les Variables</h2>
                <h3 class="exercice">Exercice 1</h3>
                <p class="enonce">Parmi les variables suivantes, lesquelles ont un nom valide : $a, $_a, $a_a, $AAA, $a!, $1a et $a1 ?</p>
            </div>
            <div class="mysolution_Wrapper">
                <h2>Je m'efforce de répondre :</h2>
                <p>Les variables suivantes ont un nom valide :</p>
                <pre>
                    $a;<br> $_a; <br> $a_a <br>
                </pre>
            </div>
            <div class="correction">
                <h3>Un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
            <div class="comment">
                <h3 class="comment_title">Mon commentaire :</h3>
                <p>Revois tes bases, tu n'as pas juste!</p>
            </div>
        </section>
        <section class="exo2">
            <div class="wrapper">
                <h3 class="exercice">Exercice 2</h3>
                <p>Modifier le code ci-dessous pour calculer la moyenne des notes.</p>
                <?php
                $note_maths = 15;
                $note_francais = 12;
                $note_histoire_geo = 9;
                $moyenne = 0;
                ?>
                <pre class="exo2">
                    <p>
                    &lt?php <br>
                    $note_maths = 15;  <br> 
                    $note_francais = 12; <br>
                    $note_histoire_geo = 9; <br>
                    $moyenne = 0; <br>
                    echo 'La moyenne est de '.$moyenne.' / 20.'; <br>
                    ?&gt; <br>
                    </p>
                </pre>
            </div>
            <div class="mySolWrapper">
                <h2>Let's go !!</h2>
                <?php
                    $notes = [
                        $note_maths = 15,
                        $note_francais = 12,
                        $note_histoire_geo = 9,
                    ];
                    $sum = array_sum($notes);
                    $moyenne = $sum / count($notes);
                    echo 'La moyenne est de '.$moyenne.' / 20.';
                ?>
                <h3>Voici mon code :</h3>
                <p>
                    $notes = [ <br>
                        $note_maths = 15, <br>
                        $note_francais = 12, <br>
                        $note_histoire_geo = 9, <br>
                    ]; <br>
                    $sum = array_sum($notes); <br>
                    $moyenne = $sum / count($notes); <br>
                    echo 'La moyenne est de '.$moyenne.' / 20.';  <br>
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
            </div>
        </section>
        <section class="exo3">
            <div class="wrapper">
                <h3>Exercice 3</h3>
                <p>Calculer le prix TTC du produit.</p>
                <?php
                    $prix_ht = 50;
                    $tva = 20;
                    $prix_ttc = 0;
                    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
                ?>
                <pre class="exo2">
                    <p>
                    &lt?php <br>
                    $prix_ht = 50; <br>
                    $tva = 20; <br>
                    $prix_ttc = 0; <br>
                    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.'; <br>
                    ?&gt; <br>
                    </p>
                </pre>
            </div>
            <div class="mySolWrapper">
                <h2>Je me lance :</h2>
                <?php 
                    $prix_ht = 50;
                    $tva = 20;
                    $prix_ttc = 0;
                    $prix_ttc = $prix_ht + ($prix_ht * $tva / 100);
                    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
                ?>
                <h3>Voici mon code : </h3>
                <p>
                    $prix_ht = 50; <br>
                    $tva = 20; <br>
                    $prix_ttc = 0; <br>
                    $prix_ttc = $prix_ht + ($prix_ht * $tva / 100); <br>
                    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.'; <br>
                </p>
            </div>
            <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
        </section>
        <section class="exo4">
            <div class="wrapper">
                <h3 class="exercice">Exercice 4</h3>
                <p>
                Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.
                </p>
            </div>
            <div class="mySolWrapper">
                <h3>Lets Go !!!</h3>
                <?php
                //DEcalaration de la variable 
                $test;
                //Initialisation :
                $test = "42";

                var_dump($test);
                ?>
                <h3>Voici mon code :</h3>
                <p>
                    $test; <br>
                    $test = '42'; <br>
                    var_dump($test); <br>
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>