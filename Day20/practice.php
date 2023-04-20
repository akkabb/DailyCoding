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
        <section class="exo13">
            <div class="wrapper">
                <h2>LES TABLEAUX</h2>
                <h3 class="exercice">Exercice 13</h3>
                <p>Déclarer une variable de type array qui stocke les informations suivantes :</p>
                <ul>
                    <li>France : Paris</li>
                    <li>Allemagne : Berlin</li>
                    <li>Italie : Rome</li>
                </ul>
                <p>Afficher les valeurs de tous les éléments du tableau en utilisant la boucle <span class="foreach">foreach</span> .</p>
            </div>
            <div class="mysolution_Wrapper">
                <h2>Je m'efforce de répondre :</h2>
                <span class="pre">
                    <?php
                       $land = [
                        'France' => 'Paris',
                        'Allemagne' => 'Berlin',
                        'Italie' => 'Rome',
                       ];
                       
                       foreach($land as $C)
                       {
                            echo  $C . '<br>';
                       }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                        $land = [ <br>
                            'France' => 'Paris', <br>
                            'Allemagne' => 'Berlin', <br>
                            'Italie' => 'Rome', <br>
                       ]; <br>
                       
                       foreach($land as $C) <br>
                       {
                            echo  $C . '&ltbr&gt'; <br>
                       }
                </p>
            </div>
            <div class="correction">
                <h3>Un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
            <div class="comment">
                <h3 class="comment_title">Mon commentaire :</h3>
                <p>Je ne suis pas familier avec foreach, à utiliser et ré-utiliser</p>
            </div>
        </section>
        <section class="exo14">
            <div class="wrapper">
                <h3 class="exercice">Exercice 14</h3>
                <p>En utilisant la fonction <span>rand()</span> , remplir un tableau avec <strong>10 nombres aléatoires</strong>. Puis, tester si le chiffre <strong>42</strong> est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec <span>var_dump</span>.</p>
            </div>
            <div class="mySolWrapper">
                <h2>Let's go !!</h2>
                <span class="pre">
                    <?php
                    $i = 0;
                    $arr = [];
                    while ($i <= 10) {
                        $arr[] = rand() ;
                        $i++;
                    }

                    $k = 0;
                    while ($k < count($arr))
                    {
                        echo $arr[$k];
                        if ($arr[$k] == 42)
                            echo "42 se trouve dans le tableau";
                        else 
                            echo "no 42";
                        $k++;
                    }
                    echo '<br>';

                    var_dump($arr);
                    echo '<br>';
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                    $i = 0; <br>
                    $arr = []; <br>
                    while ($i <= 10) { <br>
                        $arr[] = rand() ; <br>
                        $i++; <br>
                    } <br>

                    $k = 0; <br>
                    while ($k < count($arr)) <br>
                    { <br>
                        echo $arr[$k]; <br>
                        if ($arr[$k] == 42) <br>
                            echo "42 se trouve dans le tableau"; <br>
                        else <br>
                            echo "no 42"; <br>
                        $k++; <br>
                    }
                    echo '&ltbr&gt'; <br>

                    var_dump($arr); <br>
                    echo '&ltbr&gt'; <br>
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>En ayant jeté un oeil à la correction, je comprends que je pouvais utiliser une fonction php qui faisait le bouleau mieux que ce que j'ai fait</p>
                </div>
            </div>
        </section>
        <section class="exo15">
            <div class="wrapper">
                <h3>Exercice 15</h3>
                <p>En utilisant la fonction <span>rand()</span>, remplir un tableau avec <strong>10 nombres aléatoires.</strong> Puis, trier les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.</p>
                
            </div>
            <div class="mySolWrapper">
                <h2>Je me lance :</h2>
                <span class="pre">
                    <?php 
                        $tableau = array();
                        $tableau1 = array();
                        $tableau2 = array();
                       $i = 0;

                       while ($i < 10)
                       {
                        $tableau[] = rand(0, 100);
                        $i++;
                       }
                       foreach($tableau as $t) {
                        if($t < 50) {
                           $tableau1[] = $t;
                        } else {
                           $tableau2[] = $t;		  
                        }
                     }
                     
                     echo 'Tableau 1 : ';
                     foreach($tableau1 as $t1) {
                        echo $t1.' ';
                     }
                     
                     echo '<br />Tableau 2 : ';
                     foreach($tableau2 as $t2) {
                        echo $t2.' ';
                     }

                    ?>
                </span>
                <h3>Voici mon code : </h3>
                <p>
                $tableau = array(); <br>
                        $tableau1 = array(); <br>
                        $tableau2 = array(); <br>
                       $i = 0; <br>

                       while ($i < 10) <br>
                       { <br>
                        $tableau[] = rand(0, 100); <br>
                        $i++; <br>
                       } <br>
                       foreach($tableau as $t) { <br>
                        if($t < 50) { <br>
                           $tableau1[] = $t; <br>
                        } else { <br>
                           $tableau2[] = $t; <br>		  
                        } <br>
                     } <br>
                     
                     echo 'Tableau 1 : '; <br>
                     foreach($tableau1 as $t1) { <br>
                        echo $t1.' '; <br>
                     } <br>
                     
                     echo '&ltbr /&gtTableau 2 : '; <br>
                     foreach($tableau2 as $t2) { <br>
                        echo $t2.' '; <br>
                     }
                </p>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Sans la Correction je n'y serai jamais arrivé</p>
                    <p>Trier des tableaux je ne sais pas faire du tout!</p>
                </div>
            </div>
            <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
        </section>
        <section class="exo16">
            <div class="wrapper">
                <h3 class="exercice">Exercice 16</h3>
                <p>En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.</p>
                <span class="board">
                    &qlt?php
                    $pays_population = array(
                        'France' => 67595000,
                        'Suede' => 9998000,
                        'Suisse' => 8417000,
                        'Kosovo' => 1820631,
                        'Malte' => 434403,
                        'Mexique' => 122273500,
                        'Allemagne' => 82800000,
                    );
                    ?&gt
                </span>
            </div>
            <div class="mySolWrapper">
                <h3>Lets Go !!!</h3>
                <span class="pre">
                    <?php
                        $pays_population = array(
                            'France' => 67595000,
                            'Suede' => 9998000,
                            'Suisse' => 8417000,
                            'Kosovo' => 1820631,
                            'Malte' => 434403,
                            'Mexique' => 122273500,
                            'Allemagne' => 82800000,
                         );

                         foreach ($pays_population as $country => $value) {
                            # code...
                            if ($value >= 20000000)
                            {
                                echo $country . '<br>';
                            }
                         }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                    foreach ($pays_population as $country => $value) { <br>
                            # code... <br>
                            if ($value >= 20000000) <br>
                            { <br>
                                echo $country . '&ltbr&gt'; <br>
                            } <br>
                         }
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Content d'avoir a travailler avec la boucle foreach</p>
                </div>
            </div>
        </section>
        <section class="exo17">
            <div class="wrapper">
                <h3 class="exercice">Exercice 17</h3>
                <p>En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.</p>
                <span class="board">
                &qlt?php
                $pays_population = array(
                    'France' => 67595000,
                    'Suede' => 9998000,
                    'Suisse' => 8417000,
                    'Kosovo' => 1820631,
                    'Malte' => 434403,
                    'Mexique' => 122273500,
                    'Allemagne' => 82800000,
                );
                ?&gt
                </span>
            </div>
            <div class="mySolWrapper">
                <h3>Let's Go</h3>
                    <?php
                    $pays_population = array(
                        'France' => 67595000,
                        'Suede' => 9998000,
                        'Suisse' => 8417000,
                        'Kosovo' => 1820631,
                        'Malte' => 434403,
                        'Mexique' => 122273500,
                        'Allemagne' => 82800000,
                    );

                    echo 'Il y a ' . count($pays_population) . 'éléments du tableau';
                    ?>
                <h3>Voici mon code :</h3>
                <p>
                    echo 'Il y a ' . count($pays_population) . ' éléments du tableau';
                </p>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Content d'avoir a travailler avec la boucle foreach</p>
                </div>
            </div>
        </section>
        <section class="exo18">
            <div class="wrapper">
                <h3 class="exercice">Exercice 18</h3>
                <p>Quelle syntaxe permet d'afficher le deuxième élément du tableau $cocktails ?</p>
                <span class="board">
                &qlt?php
                    $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
                    ?&gt
                </span>
            </div>
            <div class="mySolWrapper">
                <h3>Let's Go</h3>
                <?php
                    $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
                    echo $cocktails[1] . '<br>';
                    ?>
                <h3>Voici mon code :</h3>
                <p>
                    $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
                    echo $cocktails[1] . '<br>';
                </p>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Abordable</p>
                </div>
            </div>
        </section>
        <section class="exo19">
            <div class="wrapper">
                <h3 class="exercice">Exercice 19</h3>
                <p>Quelle syntaxe permet d'afficher l'âge de <strong>Manuel</strong> ?</p>
                <span class="board">
                    &qlt?php
                    $personnes = array(
                        'Jean' => 16,
                        'Manuel' => 19,
                        'André' => 66
                    );
                    ?&gt
                </span>
            </div>
            <div class="mySolWrapper">
                <h3>Let's Go</h3>
                <?php
                    $personnes = array(
                        'Jean' => 16,
                        'Manuel' => 19,
                        'André' => 66
                    );
                    echo $personnes['Manuel'] . '<br>';
                    ?>
                <h3>Voici mon code :</h3>
                <p>
                    $personnes = array(
                        'Jean' => 16,
                        'Manuel' => 19,
                        'André' => 66
                    ); <br>
                    echo $personnes['Manuel'] . '&ltbr&gt';
                </p>
                <div class="comment">
                    <h3 class="comment_title">Mon commentaire :</h3>
                    <p>Abordable</p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>© 2023 akkabb, Inc.</p>
    </footer>
</body>
</html>