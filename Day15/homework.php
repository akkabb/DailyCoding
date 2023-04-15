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
    <section class="exo15 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>plusPetit()</strong>. <br> Elle prendra un argument de type array. Elle devra retourner le plus petit des élements présent dans l'array. Si l'array est vide, il faudra retourner null;</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function plusPetit($arr)
            {
                if (!$arr)
                    return null;
                else
                    return min($arr);
            }
            $str = [8, 2, 15];
            echo plusPetit($str);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function plusPetit($arr)
            { <br>
                if (!$arr) <br>
                    return null; <br>
                else <br>
                    return min($arr); <br>
            } <br>
            $str = [8, 2, 15]; <br>
            echo plusPetit($str); <br>
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Varainte de l'exercice précédent</p>
        </div>
    </section>
    <section class="exo17 pair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>verificationPassword()</strong>. <br> Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function verificationPaswword($pwd)
            {
                if (strlen($pwd) >= 8)
                    return "true";
                else 
                    return "false";
            }

            echo verificationPaswword("cold");
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function verificationPaswword($pwd)
            {<br>
                if (strlen($pwd) >= 8) <br>
                    return "true"; <br>
                else  <br>
                    return "false"; <br>
            } <br>
            echo verificationPaswword("cold");
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>variante de l'exercice précédent et comme l'on ne peut avoir deux fonctions avec le même nom sur la même page, <br> j'ai modifié le nom de la fonction demandée</p>
        </div>
    </section>
    <section class="exo18 impair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>verifPassword()</strong>. <br> Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :</h3>
            <ul>
                <li>Faire au moins 8 caractères</li>
                <li>Avoir au moins 1 chiffre</li>
                <li>Avoir au moins une majuscule et une minuscule</li>
            </ul>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function verifPassword($arr)
            {
                // if ((strlen($arr) >= 8) && (preg_match('/\d/', $arr)) && (preg_match('[a-zA-Z] {1}', $arr)))
                //     return "true";
                // else
                //     return "false";
            }
            $arr = [
                
            ];
            echo verifPassword($arr);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Je n'ai pas réussi à le faire</p>
        </div>
    </section>
    <section class="exo19 pair">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>capital()</strong>. <br> Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :</h3>
            <ul>
                <li>France ==> <span class="exo19_capital">Paris</span></li>
                <li>Allemagne ==> <span class="exo19_capital">Berlin</span></li>
                <li>Italie ==> <span class="exo19_capital">Rome</span></li>
                <li>Maroc ==> <span class="exo19_capital">Rabat</span></li>
                <li>Espagne ==> <span class="exo19_capital">Madrid</span></li>
                <li>Portugal ==> <span class="exo19_capital">Lisbonne</span></li>
                <li>Angleterre ==> <span class="exo19_capital">Londres</span></li>
                <li>Tout autre pays ==> <span class="exo19_capital">Inconnu</span></li>
            </ul>
            <p>Il faudra utiliser la structure <strong>SWITCH</strong> pour faire cet exercice</p>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function capital($state)
            {
                switch ($state) {
                    case 'France':
                        echo 'Paris';
                        break;
                    case 'Allemagne':
                        echo 'Berlin';
                        break;
                    case 'Italie':
                        echo 'Rome';
                        break;
                    case 'Maroc':
                        echo 'Rabat';
                        break;
                    case 'Espagne':
                        echo 'Madrid';
                        break;
                    case 'Portugal':
                        echo 'Lisbonne';
                        break;
                    case 'Angleterre':
                        echo 'Londres';
                        break;
                    default:
                        echo 'Inconnu';
                        break;
                }
            }
            $str = "Ghana";
            echo capital($str);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function capital($str)
            {<br>
                switch ($state) { <br>
                    case 'France': <br>
                        echo 'Paris'; <br>
                        break; <br>
                    case 'Allemagne': <br>
                        echo 'Berlin'; <br>
                        break; <br>
                    case 'Italie': <br>
                        echo 'Rome'; <br>
                        break; <br>
                    case 'Maroc': <br>
                        echo 'Rabat'; <br>
                        break; <br>
                    case 'Espagne': <br>
                        echo 'Madrid'; <br>
                        break; <br>
                    case 'Portugal': <br>
                        echo 'Lisbonne'; <br>
                        break; <br>
                    case 'Angleterre': <br>
                        echo 'Londres'; <br>
                        break; <br>
                    default: <br>
                        echo 'Inconnu'; <br>
                        break; <br>
                } <br>
            } <br>
            $str = "Ghana";
            <br>
            echo capital($str);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Cette varainte du if else me plait bien </p>
        </div>
    </section>
    <section class="exo20 impair">
        <div class="wrapper">
            <h3> Créer une fonction from scratch qui s'appelle <strong>listHTML()</strong>. Elle prendra deux arguments :</h3>
            <ul>
                <li>Un string représentant le nom de la liste</li>
                <li>Un array représentant les éléments de cette liste</li>
            </ul>
            <div class="exo20_content">
            <p>Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.</p>
            <div class="example_exo20">Exemple : Paramètre : Titre : Capitale Liste : ["Paris", "Berlin", "Moscou"] <br> Résultat : <span class="resultat_ex020"><h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul></span></div>
            <p>Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste. Pas d'espace non plus entre le titre et la liste.</p>
            <p>Si le titre est null et vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction retourne null.</p>
            </div>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function listHtml($title ,$format)
            {
                if (empty($title) && empty($format))
                {
                    return null;
                } else{
                    echo "&lth3&gt" .$title."&lt/h3&gt";
                    echo "&ltul&gt";
                    foreach ($format as $capital) {
                        echo "&ltli&gt$capital&lt/li&gt";
                    }
                    echo "&lt/ul&gt";
                }
            }
            $title = "Capitale";
            $format = ["Paris", "Berlin", "Moscou"];
             listHtml($title, $format);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function listHtml($str)
            {<br>
                if (empty($title) && empty($format)) <br>
                { <br>
                    return null; <br>
                } else{ <br>
                    echo "&lth3&gt" .$title."&lt/h3&gt"; <br>
                    echo "&ltul&gt"; <br>
                    foreach ($format as $capital) { <br>
                        echo "&ltli&gt$capital&lt/li&gt"; <br>
                    } <br>
                    echo "&lt/ul&gt"; <br>
                } <br>
            } <br>
            $title = "Capitale"; <br>
            $format = ["Paris", "Berlin", "Moscou"];
             listHtml($title, $format);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p> &-l-t ( sans les tiret donne : <span class="chevron_ouvrant">&lt</span>) et &-g-t (sans les tirets donne : <span class="chevron_fermant">&gt </span>) m'ont très bien servi ! </p>
        </div>
    </section>
    <footer>
        <p>© 2023 akkabb, Inc. <span class="footer_span">|</span> 2023 l'année de l'algo</p>
    </footer>
</body>
</html>