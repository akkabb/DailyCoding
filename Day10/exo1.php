<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <? require_once('include/head.php');?>
    <title>Créer et instancier une classe - Classe Complexe</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper_topic">
                <h2>Énoncé : </h2>
                <h3> 1.Ecrire une classe <strong>Complexe</strong> permettant de représenter des nombres complexes.
                </h3>
                <div class="exo1_tab">
                    <div class="head_note"><p>Note</p></div>
                    <div class="content_note">
                        <article>
                            <p>Un nombre complexe est un nombre qui peut s'écrire sous la forme :</p> 
                            <p>Z = PartieRéelle + PartieImaginaire * i</p>
                            <p>Où PartieRéelle  et PartieImaginaire  sont des nombres réels et i un nombre imaginaire tel que i²=-1.</p>
                            <p>Calcul avec des nombres complexes :</p>  
                                <div>
                                    Soit les deux nombres complexes suivants : z1=a+ib et z2=x+iy.  <br>
                                    Addition :  z1+z2=(a+x)+i*(b+y)    <br>
                                    Soustraction : z1-z2=(a-x)+i*(b-y)   <br>
                                    Produit : z1*z2= (a*x)-(b*y)+i*(x*b+a*y) <br>
                                    Division : z1/z2=((a*x+b*y)/(x2+y2)) +i *((b*x-a*y)/(x2+y2)) <br>
                                </div>  
                        </article>
                    </div>
                </div>
            </div>
            <hr>
            <div class="answer">
                <h3>Let's go : </h3>
                <?
                    
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                   
                </p>
                <h3>LINKS :</h3>
                <p>Voir la correction proposé sur le site : <a href="https://www.exelib.net/php/effectuer-des-calculs-sur-les-dates.html#solution-tab" class="correction_link"><strong>exelib</strong></a></p>
            </div>
            <div class="wrapper_topic">
                <p class="second_topic p_topic">2.Définir les méthodes d'accès aux attributions de la classe</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
                
                </p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="third_topic p_topic">3.Définir un constructeur d'initialisation pour la classe.</p>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
                   
                ?>
                <h3>Voilà mon code :</h3>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="fourth_topic p_topic">4.Ajouter les méthodes suivantes :.</p>
                <pre>
                Ajouter(Complexe) : Elle permet de renvoyer  le nombre complexe obtenu en ajoutant au nombre en cours un nombre complexe passé en argument.

                Soustraire(Complexe) 

                Multiplier(Complexe).

                Diviser(Complexe).

                la méthode magique __toString() : qui permet de  représenter le nombre complexe sous la forme : a+b*i. 
                //Source : www.exelib.net
                </pre>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?
               
                    
                ?>
                <h3>Voilà mon code :</h3>
                <p>
               
                </p>
            </div>
            <hr>
            <div class="wrapper_topic">
                <p class="fith_topic p_topic">5.Ecrire un script permettant de tester la classe Complexe :</p>
                <p><span>|</span>Exemple d'exécution :</p>
                <pre class="blackboard">
                le premier nombre complexe est :
                    <br>
                3+1*I
                    <br>
                le deuxieme nombre complexe est :
                <br>
                1+2*I
                <br>
                L'Addition des deux nombres renvoie :
                <br>
                4+3*I
                <br>
                La soustraction des deux nombres renvoie :
                <br>
                2-1*I
                <br>
                La multiplication des deux nombres renvoie :
                <br>
                1+7*I
                <br>
                La division des deux nombres renvoie :
                <br>
                1-0.2*I
                //Source : www.exelib.net
                </pre>
            </div>
            <div class="answer">
            <h3>Let's go : </h3>
                <?

                      

                ?>
                <h3>Voilà mon code :</h3>
                <p>
                    
                </p>

                <h3>LINKS</h3>
                <p>
                    <a href="https://www.php.net/manual/fr/array.sorting.php" class="sort_array">tri des tableaux</a>
                </p>
            </div>
        </main>
        <? require_once('include/footer.php');?>
    </div>  
</body>
</html>