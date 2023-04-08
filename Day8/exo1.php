<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <? require_once('include/head.php');?>
    <title>Effectuer des opérations sur les tableaux associatifs : </title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper_topic">
                <h2>Énoncé : </h2>
                <h3>on vous propose dans cet exercice un tableau associatif qui contient les notes des étudiants , ce tableau se compose de couples clé=>valeur (les clés sont les noms des étudiant et les valeurs  représentent les notes). 
                </h3>
                <p class="first_topic p_topic">1. Crée et initialiser un tableau $notes avec les valeurs suivantes :</p>
                <!--  plutôt qu'une image , pourquoi pas le faire en html  -->
                <table>
                    <thead>
                        <tr>
                            <th>clé</th>
                            <th>valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>said</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>badr</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>najat</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="answer">
                <h3>Let's go : </h3>
                <?
                    $notes = [
                        'said' => 13,
                        'badr' => 16,
                        'najat' => 15
                    ];
                    var_dump($notes);
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    $notes = [<br>
                        'said' => 13,<br>
                        'badr' => 16,<br>
                        'najat' => 15, <br>
                    ];<br>
                </p>
                <h3>LINKS :</h3>
                <p>Voir la correction proposé sur le site : <a href="https://www.exelib.net/php/effectuer-des-calculs-sur-les-dates.html#solution-tab" class="correction_link"><strong>exelib</strong></a></p>
            </div>
            <div class="wrapper_topic">
                <p class="second_topic p_topic">2.Ajouter au tableau la note 10 de l'étudiant "Karim".</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                    $notes['karim'] = 10;
                    var_dump($notes);
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                $notes['karim'] = 10;<br>
                </p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="third_topic p_topic">3.Supprimer la note de l'étudiant "badr".</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                    unset($notes['badr']);
                    var_dump($notes);
                    
                ?>
                <h3>Voilà mon code :</h3>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="fourth_topic p_topic">4.Déterminer la note maximale et la note minimale du groupe.</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                echo "la note maximale du groupe, s'élève à : ";
                echo max($notes);
                echo '<br>';
                echo "la note minimale du groupe s'élève à : ";
                echo min($notes);
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                echo "la note maximale du groupe, s'élève à : ";<br>
                echo max($notes);<br>
                echo "la note minimale du groupe s'élève à : ";<br>
                echo min($notes);
                </p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="fith_topic p_topic">5.Afficher le tableau après l'avoir tier par ordre alphabétique.</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?

                    var_dump($notes);   
                    asort($notes);
                    foreach ($notes as $key =>$val)
                        echo $key . " => " . $val . '<br>';
                    var_dump($notes);   

                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    var_dump($notes); <br>  
                    asort($notes);<br>
                    foreach ($notes as $key =>$val)
                    <br>
                        echo $key . " => " . $val . '&ltbr&gt';
                    <br>
                    var_dump($notes); <br>
                </p>

                <h3>LINKS</h3>
                <p>
                    <a href="https://www.php.net/manual/fr/array.sorting.php" class="sort_array">tri des tableaux</a>
                </p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="sixth_topic p_topic">6.Classer les étudiants par ordre de mérite et affiche le tableau</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
            <small>G regardé la correction, ne comprenant pas l'énoncé  <br></small>
                <?
                    // arsort() effectue un tri croissant des valeurs
                    arsort($notes);
                    foreach ($notes as $key => $value) {
	                    echo "la note de l’étudiant $key est : $value <br>";
                    }
                    //Source : www.exelib.net
                    
                ?>
                <h3>Voilà mon code :</h3>

                <h3>LINKS :</h3>
                <p>Lien vers la  : <a href="https://www.exelib.net/php/operations-sur-un-tableau-associatif-des-notes.html#solution-tab">correction</a></p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="seventh_topic p_topic">7.Déterminer la moyenne de la classe.</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                    $tot = count($notes);
                    $sum = array_sum($notes);
                    $average = $sum / $tot;
                    echo round($average);
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    $tot = count($notes);<br>
                    $sum = array_sum($notes);<br>
                    $average = $sum / $tot;<br>
                    echo round($average);<br>
                </p>
            </div>
            <hr>
        </main>
        <? require_once('include/footer.php');?>
    </div>  
</body>
</html>