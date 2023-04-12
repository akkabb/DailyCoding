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
    <section class="exo1 red">
        <div class="wrapper">
            <h3>Fonction qui retourne Hello world</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function greetings()
            {
                echo "Hello world";
            }
            greetings();
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function greetings()
            {<br>
                return "Hello world";<br>
            }
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Cet exercice est interessant pour afficher son premier texte en php<br> ça change du simple echo</p>
        </div>
    </section>
    <section class="exo2 almostRed">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). <br> Elle doit retourner <span>Le prof de programmation web</span> </h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function quiEstLeMeilleurProf()
            {
                echo "Le prof de programmation web";
            }

            echo quiEstLeMeilleurProf();
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function quiEstLeMeilleurProf()
            {<br>
                echo "Le prof de programmation web";<br>
            }
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Lorsque la réussite est là , ça fait plaisir</p>
        </div>
    </section>
    <section class="exo3 red">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>jeRetourneMonArgument()</strong>. Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function jeRetourneMonArgument($arg)
            {
                
                return $arg;
            }

            echo jeRetourneMonArgument(123);
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function jeRetourneMonArgument($arg)
            {<br>
                return $arg;<br>
            }

            echo jeRetourneMonArgument(123);
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>Un argument ; un truc dans la parethèse de l afonctio quoi!</p>
        </div>
    </section>
    <section class="exo4 almostRed">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>concatenation()</strong>. Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function concatenation($str, $str1)
            {
                return $str . $str1;
            }

            echo concatenation("Antoine", "Griezmann");
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function concatenation($str, $str1)
            {<br>
                return $str . $str1;<br>
            }

            echo concatenation("Antoine", "Griezmann");
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p>La concaténation : ajoute un élément au premier!??</p>
        </div>
    </section>
    <section class="exo5 red">
        <div class="wrapper">
            <h3>Créer une fonction from scratch qui s'appelle <strong>concatenationAvecEspace()</strong>. Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. <br> Exemple : argument 1 = Ngolo Argument 2 = Kante; Resultat : Ngolo Kante</h3>
        </div>
        <div class="answer">
            <h3>Voici mon essai : </h3>
            <?
            function concatenationAvecEspace($str, $str1)
            {
                return $str . " " .$str1;
            }

            echo concatenationAvecEspace("Ngolo", "Kante");
            ?>
            <h3>Voici mon code :</h3>
            <p class="monCode">
            function concatenationAvecEspace($str, $str1)
            {<br>
                return $str . " " .$str1;<br>
            }

            echo concatenationAvecEspace("Ngolo", "Kante");
            </p>
        </div>
        <div class="comment">
            <h3>Mon point de vue :</h3>
            <p></p>
        </div>
    </section>
</body>
</html>