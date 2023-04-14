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
    <a href="index.php">back to the Reason Why</a>
    <h2>Exercices pour débutant</h2>
    <section class="exo6 ">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>somme()</strong>. <br> Elle prendra deux arguments de type int. Elle devra retourner la somme des deux. Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 10</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function somme($a, $b)
            {
                return $a + $b;
            }
            echo somme(5,10);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function somme($a, $b)
            { <br>
                return $a + $b; <br>
            }
            echo somme(5,10);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Deux arguments et cette fois, de int au lieu de string</p>
        </div>
    </section>
    <section class="exo7 ">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>soustraction()</strong>. <br> Elle prendra deux arguments de type int. Elle devra retourner la soustraction des deux. Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 0</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function soustraction($a, $b)
            {
                return $a - $b;
            }

            echo soustraction(5, 5);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function soustraction()
            {<br>
                return $a - $b; <br>
            }
            <br>
            echo soustraction(5, 5);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Variante de l'exercice précédent, et avec le signe (-) cette fois.</p>
        </div>
    </section>
    <section class="exo8">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>multiplication()</strong>. <br> Elle prendra deux arguments de type int. Elle devra retourner la multiplication des deux. Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 25</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function multiplication($num, $num1)
            {
                return $num * $num1;
            }

            echo multiplication(1, 5);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function multiplication($num, $num1)
            {<br>
                return $num * $num1;<br>
            }

            echo multiplication(1, 5);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Variante de l'exercice précédent, et avec le signe (*) cette fois.</p>
        </div>
    </section>
    <section class="exo9">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>estIlMajeure()</strong>. Elle prendra un argument de type int. Elle devra retourner un boolean. <br> Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function estIlMajeure($age)
            {
                if($age >= 18)
                    echo "true";
                else
                    echo "false";
            }

            estIlMajeure(5);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function estIlMajeure($age)
            {<br>
                if($age >= 18) <br>
                    echo "true"; <br>
                else  <br>
                    echo "false"; <br>
            }

            estIlMajeure(5);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Je dois encore répéter le return et le echo dans les fonctions; ce n'est pas encore une seconde nature</p>
        </div>
    </section>
    <section class="exo10">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle plusGrand(). <br> Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function plusGrand($int, $num)
            {
                if ($int > $num)
                    return $int;
                else
                    return $num;
            }

            echo plusGrand(9, 5);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function plusGrand($int, $num)
            {<br>
                if ($int > $num) <br>
                    return $int; <br>
                else  <br>
                    return $num; <br>
            }

            echo plusGrand(9, 5);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p> Continuer à s'exercer</p>
        </div>
    </section>
</body>
</html>