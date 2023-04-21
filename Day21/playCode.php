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
            <section class="exo1">
                    <div class="wrapperResume">
                        <h3 class="title_ex">Exercice 1:</h3>
                        <p>Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »</p>
                        <p><strong>Sortie prévue:</strong></p>
                        <div class="display_xemple">
                            <span class="board">
                                4 <br> 5 <br> 6 <br> 7 <br> 8 <br> 9 <br> 10 <br> 11 <br> 12 <br>
                            </span>
                        </div>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            echo 'avec la boucle for : ' . '<br>';
        
                            for ($i = 4; $i <= 12; $i++)
                            {
                                echo $i . '<br>';
                            }
                            echo 'avec la boucle while : ' . '<br>';
        
                            $i = 4;
        
                            while($i <= 12)
                            {
                                echo $i . '<br>';
                                $i++;
                            }
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                            echo 'avec la boucle for : ' . '&ltbr&gt'; <br>
        
                            for ($i = 4; $i <= 12; $i++) <br>
                            { <br>
                                echo $i . '&ltbr&gt'; <br>
                            } <br>
                            echo 'avec la boucle while : ' . '&ltbr&gt'; <br>
        
                            $i = 4; <br>
        
                            while($i <= 12) <br>
                            { <br>
                                echo $i . '&ltbr&gt'; <br>
                                $i++; <br>
                            } <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>Je me sens à l'aise avec ces simples boucles !</p>
                    </div>
                </div>
            </section>
            <section class="exo2">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 2:</h3>
                        <p>Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.</p>
                        <p><strong>Exemple:</strong></p>
                        <div class="display_xemple">
                            <span class="board">
                                10 <br> 9 <br> 8 <br> 7 <br> 6 <br> 5 <br> 4 <br> 3 <br> 2 <br> 1 <br>
                            </span>
                        </div>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                         function decrement($n)
                         {
                            if ($n > 0)
                            {
                                echo "$n" . '<br>';
                                decrement($n - 1);
                            }
                         }

                         decrement(10);
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                        function decrement($n) <br>
                         { <br>
                            if ($n > 0) <br>
                            { <br>
                                echo "$n" . '&ltbr&gt'; <br>
                                decrement($n - 1); <br>
                            } <br>
                         }

                         decrement(10);
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>La recursive est vraiment une compétence utile que je devrai connaitre</p>
                         <p>Sans la correction, je n'y serai jamais arrivé.</p>
                    </div>
            </section>
            <section class="exo3">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 3:</h3>
                        <p>Écrivez un script PHP, pour vérifier si la page est appelée depuis ‘HTTPS’ ou ‘HTTP’.</p>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            $page = isset($_SERVER['HTTPS']) ? 'https' : 'http';
                            echo $page;
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                            $page = isset($_SERVER['HTTPS']) ? 'https' : 'http'; <br>
                            echo $page; <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p></p>
                    </div>
            </section>
            <section class="exo4">
                    <div class="wrapperResume">
                        <h3  class="title_ex">Exercice 4:</h3>
                        <p>Écrivez un script PHP pour rediriger un utilisateur vers une autre page.</p>
                        <p><strong>Exemple :</strong></p>
                        <div class="display_xemple">
                            <span class="board">
                                Redirigez l’utilisateur vers https://waytolearnx.com/
                            </span>
                        </div>
                    </div>
                    <div class="wrapperMySol">
                        <h3>Ma répone au sujet :</h3>
                        <?php
                            //header('Location: https://waytolearnx.com/');
                            echo 'J\'ai commenté mon script sinon je suis redirigé !';
                        ?>
                        <h3>Voici mon code :</h3>
                        <p>
                        &lt?php <br>
                            header('Location: https://waytolearnx.com/'); <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>Commentaire</h3>
                        <p>Je n'était pas sur du résultat, content de savoir que j'ai compris ce qui était demandé.</p>
                    </div>
            </section> 
            <footer>
                <p>© 2023 akkabb, Inc.</p>
            </footer>  
        </div>
</body>
</html>