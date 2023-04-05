<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contrôler une chaine de caractères  | exercice 2</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <h3>
                Ecrire un script qui teste si une chaîne de caractères contient le caractère '@' (le cas d'une adresse e-mail)
                //Source : www.exelib.net
                </h3>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <p>Voici la phrase donnée :<p>
                <p><strong>j'invoque @php </strong></p>
                <?php
                    $phrase = "j'invoque @ php";
                    $test = '@';
                    // echo $test;

                    if (str_contains( $phrase, $test) === true)
                    {
                        echo "'@' existe";
                    }else{
                        echo "'@' n'existe pas dans la phrase";
                    }
                ?>
            </div>
            <div class="correction">
                <h3>La correction : </h3>
                <p>La correction utilise <strong><a href="https://www.php.net/manual/fr/function.strpos.php">strpos</a></strong> <br> mais ça n'a pas fonctionné </p>
                <p>En continuant mes recherches, je me suis tourné vers <strong><a href="https://www.php.net/manual/fr/function.str-contains.php">str_contains</a></strong> :</p>
                <p><strong>str_contains</strong> : Le str_contains est une nouvelle fonction qui a été introduite dans PHP 8. Cette méthode est utilisée pour vérifier si une chaîne PHP contient une sous-chaîne.

La fonction vérifie la chaîne et renvoie un booléen true s'il existe et false sinon. Cependant, gardez à l'esprit que str_contains est sensible à la casse. Assurez-vous que la sous-chaîne utilisée pour la recherche est dans la bonne casse, ou vous pouvez utiliser la méthode strtolower().</p>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>