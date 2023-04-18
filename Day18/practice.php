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
    <div class="container">
        <h2>Exercices-PHP</h2>
        <section class="ex05">
            <div class="wrapper">
                <h2>LES CONDITIONS (IF, ELSE ET ELSEIF)</h2>
                <h3 class="exercice">Exercice 5</h3>
                <p class="enonce">Déclarer une variable $sexe qui contient une chaîne de caractères. <br> Créer une condition qui affiche un message différent en fonction de la valeur de la variable.</p>
            </div>
            <div class="mysolution_Wrapper">
                <h2>Je m'efforce de répondre :</h2>
                <span class="pre">
                    <?php
                        $sexe = "F";

                        if ($sexe === "F")
                            echo "femme";
                        elseif ($sexe === "H")
                            echo "homme";
                        else 
                            echo "Je ne connais pas ";
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                $sexe = "F"; <br>
                if ($sexe === "F") <br>
                    echo "femme"; <br>
                elseif ($sexe === "H") <br>
                    echo "homme"; <br>
                else <br>
                    echo "Je ne connais pas "; <br>
                </p>
            </div>
            <div class="correction">
                <h3>Un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
            <div class="comment">
                <h3 class="comment_title">Mon commentaire :</h3>
                <p>Je dois améliorer et faire cela sous forme de mini programme où j'intègre de l'interaction</p>
            </div>
        </section>
        <section class="exo6">
            <div class="wrapper">
                <h3 class="exercice">Exercice 6</h3>
                <p>Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.</p>
                <?php
                $budget = 1553.89;
                $achats = 1554.76;
                ?>
            </div>
            <div class="mySolWrapper">
                <h2>Let's go !!</h2>
                <span class="pre">
                    <?php
                    $budget = 1553.89;
                    $achats = 1554.76;
                    if ($budget >= $achats)
                            echo "le budget permet de payer les achats";
                        else
                            echo "Impossible de régler les achats";
                        
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                    $budget = 1553.89;  <br> 
                    $achats = 1554.76; <br>
                    if ($budget >= $achats) <br>
                        echo "le budget permet de payer les achats"; <br>
                    else <br>
                        echo "Impossible de régler les achats"; <br>
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
            </div>
        </section>
        <section class="exo7">
            <div class="wrapper">
                <h3>Exercice 7</h3>
                <p>Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure.</p>
                <?php
                    $age = 18;
                ?>
            </div>
            <div class="mySolWrapper">
                <h2>Je me lance :</h2>
                <span class="pre">
                    <?php 
                        $ageUtilisateur = 16;
                        $age = 18;
                        if ($ageUtilisateur >= $age)
                            echo "est majeur";
                        else
                            echo "est mineur";
                    ?>
                </span>
                <h3>Voici mon code : </h3>
                <p>
                    $ageUtilisateur = 16; <br>
                    $age = 18; <br>
                    if ($ageUtilisateur >= $age) <br>
                        echo "est majeur"; <br>
                    else <br>
                        echo "est mineur"; <br>
                </p>
            </div>
            <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
            </div>
        </section>
        <section class="exo8">
            <div class="wrapper">
                <h3 class="exercice">Exercice 8</h3>
                <p>
                Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
                </p>
            </div>
            <div class="mySolWrapper">
                <h3>Lets Go !!!</h3>
                <span class="pre">
                    <?php
                        $heure = 10;
                        
                        switch ($heure) {
                            case $heure < 12:
                                echo "c'est le matin";
                                break;
                            case $heure > 12:
                                echo "c'est l'après-midi";
                                break;
                            case $heure > 20:
                                echo "c'est la nuit";
                                break;
                            default:
                                echo "je ne connais pas cette heure";
                                break;
                        }
                    ?>
                </span>
                <h3>Voici mon code :</h3>
                <p>
                $heure = 10; <br>
                
                switch ($heure) { <br>
                    case $heure < 12: <br>
                        echo "c'est le matin"; <br>
                        break; <br>
                    case $heure > 12: <br>
                        echo "c'est l'après-midi"; <br>
                        break; <br>
                    case $heure > 20: <br>
                        echo "c'est la nuit"; <br>
                        break; <br>
                    default: <br>
                        echo "je ne connais pas cette heure"; <br>
                        break; <br>
                } <br>
                </p>
                <div class="correction">
                    <h3>Voici un lien vers la <span><a href="https://aymeric-auberton.fr/academie/php/exercices#e3">correction</a> </span> :</h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>