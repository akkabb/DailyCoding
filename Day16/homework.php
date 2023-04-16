<?php  include('lib/libraryToInclude.php') ?>


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
    <section class="exo21 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>remplacerLesLettres()</strong>. <br> Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :</h3>
            <ul>
                <li>input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s</li>
                <li>input : "Les cours de programmation Web sont trops cools" ==> Output : <span>L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls</span></li>
            </ul>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function remplacerLesLettres($str)
            {
                $search = ["e", "i", "o"];
                $replace = ["3", "1", "0"];
                return str_replace($search, $replace, $str);
            }
            $str = "Bonjour les amis";
            $stro = "Les cours de programmation Web sont trops cools";
            echo remplacerLesLettres($stro);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function remplacerLesLettres($arr)
            { <br>
                $search = ["e", "i", "o"];
                $replace = ["3", "1", "0"];
                return str_replace($search, $replace, $str);
            } <br>
            $str = "Bonjour les amis"; <br>
            $stro = "Les cours de programmation Web sont trops cools"; <br>
            echo remplacerLesLettres($str); <br>
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Voici le lien vers le <a href="https://www.php.net/manual/fr/function.str-replace.php">php.net</a></p>
            <p>J'ai eu du mal à obtenir le résultat voulu parce que je n'ai pas pris en considération les  <span>" "</span> </p>
        </div>
    </section>
    <section class="exo22 pair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>quelleAnnee()</strong>. Elle devra retourner un integer representant l'année actuelle.</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function quelleAnnee()
            {
                return  date("Y");
            }

            echo "Nous sommes en " . quelleAnnee();
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function quelleAnnee()
            {<br>
                return  date("Y"); <br>
            } <br>
            echo "Nous sommes en " . quelleAnnee();
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Pour cette excercice la doc; <a href="https://www.php.net/manual/fr/function.str-replace.php">php.net</a> a encore une fois été d'une très grande aide </p>
        </div>
    </section>
    <section class="exo23 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>quelleDate()</strong>. Elle devra retourner une string representant la date actuelle sous le format suivant DD/MM/YYYY <br>
                Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle. Les valeurs doivent être numérique et non au format String.
            </h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function quelleDate()
            {
                return date("d/m/Y");
            }
            
            echo "Voici la date du jour " . quelleDate();
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function quelleDate()
            { <br>
                return date("d/m/Y"); <br>
            } <br>
            
            echo "Voici la date du jour " . quelleDate();
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Merci <a href="https://www.php.net/manual/fr/function.str-replace.php">php.net</a></p>
        </div>
    </section>
    <footer>
        <p>© 2023 akkabb, Inc. <span class="footer_span">|</span> 2023 l'année de l'algo</p>
    </footer>
</body>
</html>