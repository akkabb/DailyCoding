<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contrôler une chaine de caractères  | exercice 1</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <h3>
                Rédigez un script qui permet de tester si une chaîne ne contient que de lettres
                //Source : www.exelib.net
                </h3>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <p>Voici la phrase donnée :<p>
                <br>
                <p><strong>Tout travail mérite salaire</strong></p>
                <br>
                <?php
                    $str = "Tout travail merite salaire";
                    
                    function verif_alpha($str){
                        // On cherche tt les caractères autre que [A-z]
                        preg_match("/([^A-Za-z\s])/",$str,$result);
                        // si on trouve des caractère autre que A-z
                        if(!empty($result)){
                          return false;
                        }
                        return true;
                      }
                    if (verif_alpha($str) == true)
                    {
                        echo "La chaine contient que des lettres";
                    }else{
                        echo "La chaine ne contient pas que des lettres";
                    }
                ?>
                <br>
                <h3>Voici mon code : </h3>
                <br>
                <pre>
                $str = "Tout travail merite salaire";<br>
                    
                    function verif_alpha($str){<br>
                        // On cherche tt les caractères autre que [A-z]<br>
                        preg_match("/([^A-Za-z\s])/",$str,$result);<br>
                        // si on trouve des caractère autre que A-z<br>
                        if(!empty($result)){<br>
                          return false;<br>
                        }<br>
                        return true;<br>
                      }<br>
                    if (verif_alpha($str) == true)<br>
                    {<br>
                        echo "La chaine contient que des lettres";<br>
                    }else{<br>
                        echo "La chaine ne contient pas que des lettres";<br>
                    }
                </pre>
                <br>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>