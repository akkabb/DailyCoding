<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coding daily</title>
</head>
<body>
    <div class="container">
        <h2>Exercices-PHP</h2>
        <section class="exo9">
            <div class="wrapper">
                <h2>LES BOUCLES</h2>
                <h3 class="exercice">Exercice 9</h3>
                <p>En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 77.</p>
            </div>
            <div class="mysolution_Wrapper">
                <h2>Je m'efforce de répondre :</h2>
                <span class="pre">
                    <?php
                       //$i = 0;
                       $depart = 77000;
                       while ( $depart <= 77534)
                       {
                        echo $depart . ' ';
                        $depart++;
                       }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                    $depart = 77000; <br>
                    while ( $depart <= 77534) 
                    {   <br> 
                    echo $depart . ' '; <br>
                    $depart++; <br>
                    } <br>
                </p>
            </div>
            <div class="correction">
                <h3>Un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
            <div class="comment">
                <h3 class="comment_title">Mon commentaire :</h3>
                <p>Je me suis arrêté à 77534 parce que sur le net, c'est ce que j'ai trouvé comme réponse</p>
            </div>
        </section>
        <section class="exo10">
            <div class="wrapper">
                <h3 class="exercice">Exercice 10</h3>
                <p>En utilisant la boucle for, afficher la table de multiplication du chiffre 5.</p>
            </div>
            <div class="mySolWrapper">
                <h2>Let's go !!</h2>
                <span class="pre">
                    <?php
                    $sum = 1;
                    for ($i = 1; $i <= 10; $i++) { 
                        # code...
                        $sum = 5 * $i;
                        echo "5 * $i = $sum" . '<br>';
                    }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                    $sum = 1; <br>
                    for ($i = 1; $i < 10; $i++) {  <br>
                        $sum = 5 * $i; <br>
                        echo "5 * $i = $sum" . '&ltbr&gt'; <br>
                    } 
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Merci au dailycoding, ça m'a pris du temps de le réaliser. Je suis un grand débutant et je devrai répéter cela afin que ça devienne une seconde nature.</p>
                </div>
            </div>
        </section>
        <section class="exo11">
            <div class="wrapper">
                <h3>Exercice 11</h3>
                <p>En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.</p>
                <p class="resutlTitle_exo11">Résultat : </p>
                <span class="resultboard">
                    1 <br>
                    22 <br>
                    333 <br>
                    4444 <br>
                    55555 <br>
                </span>
                <?php
                    $age = 18;
                ?>
            </div>
            <div class="mySolWrapper">
                <h2>Je me lance :</h2>
                <span class="pre">
                    <?php 
                       for ($i=1; $i <= 5; $i++) { 
                        for ($k = 1; $k <= $i; $k++) {
                            echo $i;
                        }
                        echo '<br>';
                       }
                    ?>
                </span>
                <h3>Voici mon code : </h3>
                <p>
                    for ($i=1; $i <= 5; $i++) {  <br> 
                        for ($k = 1; $k <= $i; $k++) { <br>
                            echo $i; <br>
                        } <br>
                        echo &ltbr&gt;
                       }
                </p>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Sans la Correction je n'y serai jamais arrivé</p>
                    <p>Je ne suis pas à l'aise avec les boucles. Alors les boucles imbriquées, je n'en parle même pas!!!</p>
                </div>
            </div>
            <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
        </section>
        <section class="exo12">
            <div class="wrapper">
                <h3 class="exercice">Exercice 12</h3>
                <p>
                Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :
                </p>
                <ul>
                    <li>l'afficher;</li>
                    <li>incrémenter sa valeur de 2;</li>
                </ul>
                <p>Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.</p>
            </div>
            <div class="mySolWrapper">
                <h3>Lets Go !!!</h3>
                <span class="pre">
                    <?php
                        $i = 0;
                        while ($i < 21)
                        {
                            // echo $i;
                            if ($i === 10)
                            {
                                echo "<span class=\"value\">$i</span>" . " ";
                            }
                            else{
                                echo $i . " ";
                            }
                            $i = $i + 2;
                        }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                $i = 0; <br>
                while ($i < 21) <br>
                { <br>
                    if ($i === 10) <br>
                    { <br>
                        echo "<span class=\"value\">$i</span>" . " "; <br>
                    } <br>
                    else{ <br>
                        echo $i . " "; <br>
                    } <br>
                    $i = $i + 2; <br>
                }
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Je ne savais plus comment incrémenter de 2!</p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>© 2023 akkabb, Inc.</p>
    </footer>
</body>
</html>