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
    <section class="exo11 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>plusPetit()</strong>. <br> Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function plusPetit($int, $num)
            {
                if ($int < $num)
                    return $int;
                else
                    return $num;
            }
            echo plusPetit(1, 7);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function plusPetit($int, $num)
            {<br>
                if ($int < $num) <br>
                    return $int; <br>
                else  <br>
                    return $num; <br>
            }
            <br>
            echo plusPetit(1, 7);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Varainte de l'exercice précédent</p>
        </div>
    </section>
    <section class="exo12 pair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function plusPetitDesTrois($a, $b, $c)
            {
                if (($a < $b) && ($a < $c))
                    return $a;
                else if (($b < $a) && ($b < $c))
                    return $b;
                else
                    return $c;
            }

            echo plusPetitDesTrois(9, 7, 5);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function plusPetitDesTrois($a, $b, $c)
            {<br>
                if (($a < $b) && ($a < $c)) <br>
                    return $a; <br>
                else if (($b < $a) && ($b < $c)) <br>
                    return $b; <br>
                else <br>
                    return $c;
            } <br>
            echo plusPetitDesTrois(9, 7, 5);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>variante de l'exercice précédent et comme l'on ne peut avoir deux fonctions avec le même nom sur la même page, <br> j'ai modifié le nom de la fonction demandée</p>
        </div>
    </section>
    <section class="exo13 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle premierElementTableau(). <br> Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function premierElementTableau($arr)
            {
                if (!$arr)
                    return null;
                else
                    return $arr[0];
            }
            $arr = [
                7,5,8,9
            ];
            echo premierElementTableau($arr);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function premierElementTableau($arr)
            {<br>
                if (!$arr) <br>
                    return null; <br>
                else <br>
                    return $arr[0]; <br>
            } <br>

            $arr = [7,5,8,9]; <br>

            echo premierElementTableau($arr);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>mélange de function avec argument et array, whaoo ça commence à devenir intéressant</p>
        </div>
    </section>
    <section class="exo14 pair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>dernierElementTableau()</strong>. <br> Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function dernierElementTableau($str)
            {
                if(!$str)
                    return null;
                else
                    return end($str);
            }
            $str = [5, 2, 6, 8, 9];
            echo dernierElementTableau($str);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function dernierElementTableau($str)
            {<br>
                if(!$str) <br>
                    return null; <br>
                else <br>
                    return end($str);   <br>
            } <br>
            $str = [5, 2, 6, 8, 9];
            <br>
            echo dernierElementTableau($str);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Je me suis seervi d'une fonction existante à php , je ne sais pas si cela était permis</p>
        </div>
    </section>
    <section class="exo15 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>plusGrand()</strong>. <br> Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function plusGrand($str)
            {
                if (!$str)
                    return null;
                else
                    return max($str);
            }

            $arr = [9, 11, 142];
            echo plusGrand($arr);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function plusGrand($str)
            {<br>
                if (!$str) <br>
                    return null; <br>
                else <br>
                    return max($str); <br>
            } <br>
            $arr = [9, 11, 142]; <br>
            echo plusGrand($arr);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Je me suis seervi d'une fonction existante à php , je ne sais pas si cela était permis</p>
        </div>
    </section>
    <footer>
        <p>© 2023 akkabb, Inc. <span class="footer_span">|</span> 2023 l'année de l'algo</p>
    </footer>
</body>
</html>