<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contrôler une chaine de caractères  | exercice 3</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <h3>
                    Utiliser les expressions régulières pour vérifier si une chaîne de caractères correspond à :
                </h3>
                <p>
                    <ul>
                        <li>Un numéro de téléphone sous la forme : 00 00 00 00 00 ou 00-00-00-00-00</li>
                        <li>Un matricule qui commence par 3 lettres et se termine par 2 chiffres (exemple "abc12").</li>
                    </ul>
                </p>
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <p>
                $num1="06-66-66-66-66";<br>
                $num2="06 66 66 66 66";<br>
                $pattern="/^[0-9]{2}((\-[0-9]{2}){4}|(\s[0-9]{2}){4})$/";// \s représente l'espace<br>
                if(preg_match($pattern, $num1) && preg_match($pattern, $num2)){<br>
                    echo "$num1 et $num2 sont 2 numeros corrects";<br>
                }<br>
                else echo "$num1 ou $num2 incorrect";<br>
                //Source : www.exelib.net
                </p>
                
            </div>
            <div class="answer">
                <h3>La résolution concernant le matricule : </h3>
                <p>
                $matricule="Abz32";<br>
                $pattern="/^[a-z]{3}[0-9]{2}$/i";// i pour ignorer la casse<br>
                if(preg_match($pattern, $matricule)){<br>
                    echo "$matricule matricule correct";<br>
                }<br>
                else echo "$matricule matricule incorrect";<br>
                //Source : www.exelib.net
                </p>
            </div>
            <div class="comment">
                <h3>NOTA BENE : </h3>
                <p class="danger">
                    Je dois m'entrainer sur les expressions régulières
                </p>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>