<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daily Coding</title>
</head>
<body>
    <div class="container">
        <h1>Exercices du site waytolearnx</h1>
        <div class="container">
            <section class="exo5">
                    <div class="wrapperResume">
                        <h3 class="title_ex">Exercice 5:</h3>
                        <p>Écrivez un programme PHP pour supprimer les doublons d’un tableau triée.</p>
                        <p><strong>Exemple:</strong></p>
                        <p>[1,2,2,3,3,3,4,5,5]</p>
                        <p><strong>Sortie prévue :</strong></p>
                        <p>[1,2,3,4,5]</p>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            $arr = [1,2,2,3,3,3,4,5,5];
                            $unik = array_unique($arr);
                            echo '[';
                            foreach ($unik as $value) {
                                # code...
                                
                                echo $value . ', ';
                            };
                            echo ']'
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                            $arr = [1,2,2,3,3,3,4,5,5]; <br>
                            $unik = array_unique($arr); <br>
                            echo '['; <br>
                            foreach ($unik as $value) { <br>
                                # code... <br>
                                
                                echo $value . ', '; <br>
                            }; <br>
                            echo ']' <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>Je dois encore bosser la chose pour que la virgule ne s'affcihe pas à la fin</p>
                    </div>
                </div>
            </section>
            <section class="exo6">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 6:</h3>
                        <p>Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for en PHP</p>
                        <p><strong>Sortie prévue:</strong></p>
                        <p>La factorielle de 3 est 6</p>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                         function facto($n)
                         {
                             $f = 1;
                            for ($i= $n; $i >= 1 ; $i--) { 
                                # code...
                                $f = $f * $i;
                            }
                            return $f;
                         }
                         echo facto(3);

                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                        function facto($n) <br>
                         { <br>
                             $f = 1; <br>
                            for ($i= $n; $i >= 1 ; $i--) {  <br>
                                # code... <br>
                                $f = $f * $i; <br>
                            } <br>
                            return $f; <br>
                         } <br>
                         echo facto(3); <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>J'ai essayé, je m'en suis approché mais je n'ai jamais réussi à trouver la solution.</p>
                         <p>Sans la correction, je n'y serai jamais arrivé.</p>
                    </div>
            </section>
            <section class="exo7">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 7:</h3>
                        <p>Écrivez un programme PHP pour trouver la factorielle d’un nombre en utilisant une fonction récursive.</p>
                        <p><strong>Sortie prévue :</strong></p>
                        <p>La factorielle de 3 est 6</p>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                           function reCall($n)
                           {
                            if ($n < 0)
                                return null;
                            else
                               return reCall($n - 1);
                           }
                           echo facto(3);
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                        function reCall($n) <br>
                           { <br>
                            if ($n < 0) <br>
                                return null; <br>
                            else <br>
                               return reCall($n - 1); <br>
                           } <br>
                           echo facto(3); <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>La recursive est quelque chose que je ne maitrise pas. A reproduire le plus souvent possible.</p>
                    </div>
            </section>
            <section class="exo8">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 8:</h3>
                        <p>Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.</p>
                        <p><strong>Exemple :</strong></p>
                        <div class="display_xemple">
                            <span class="board">
                                * <br>
                                ** <br>
                                *** <br>
                                **** <br>
                                ***** <br>
                                ****** <br>
                                ******** <br>
                                ********* <br>
                                ********** <br>
                            </span>
                        </div>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            for ($i=0; $i <= 10; $i++) { 
                                for ($k=0; $k < $i; $k++) { 
                                    # code...
                                    echo "*";
                                }
                                echo "<br>";
                            }
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                        for ($i=0; $i <= 10; $i++) {  <br>
                                for ($k=0; $k < $i; $k++) {  <br>
                                    # code...
                                    echo "*"; <br>
                                } <br>
                                echo "<br>";
                            } <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>Je n'était pas sur du résultat, content de savoir que j'ai compris ce qui était demandé.</p>
                    </div>
            </section> 
            <section class="exo9">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 9:</h3>
                        <p>Écrivez un programme PHP pour afficher la table de multiplication jusqu’à 5 * 5.</p>
                        <p><strong>Exemple :</strong></p>
                        <div class="display_xemple">
                            <span class="board">
                                <p>1  2  3  4  5</p>
                                <p>2  4  6  8 10</p>
                                <p>3  6  9 12 15</p>
                                <p>4  8 12 16 20</p>
                                <p>5 10 15 20 25</p>
                            </span>
                        </div>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            $n = 5; 
                           for ($i=1; $i <= $n; $i++) { 
                            # code...
                                for ($k=1; $k <= $n; $k++) { 
                                    # code...
                                    echo $k * $i . ' ';
                                }
                                echo '<br>';
                           }
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                        $n = 5; <br>
                           for ($i=1; $i <= $n; $i++) { <br>
                            # code... <br>
                                for ($k=1; $k <= $n; $k++) {  <br>
                                    # code... <br>
                                    echo $k * $i . ' '; <br>
                                } <br>
                                echo '<br>';
                           }
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>Je ne maitrise rien , j'ai fait des essais et ça a marché. A moi de refaire et de chercher la logique.</p>
                    </div>
            </section> 
            <footer>
                <p>© 2023 akkabb, Inc.</p>
            </footer>  
        </div>
</body>
</html>