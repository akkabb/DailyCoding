<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les conditions | exercice 3</title>
</head>
<body>
    <div class="container">
        <?php require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <p>
                    3. Utilisez les variables $nombre1 $nombre2 et $operation pour réaliser un script effectuant une opération  parmi les quatre opérations arithmétiques  élémentaires suivant la valeur de la variable  $opération ( utiliser l'instruction switch)
                </p>
            </div>
            <div class="answer">
                <p>
                    Je m'applique à solutionner le problème :
                </p>
                <?php
                    $nbr1;
                    $nbr2;
                    $operation = " ";

                    switch ($operation){
                        case "+":
                            echo $nbr1 + $nbr2;
                            break;
                        case "-":
                            echo $nbr1 - $nbr2;
                            break;
                        case "*":
                            echo $nbr1 * $nbr2;
                            break;
                        case "/":
                            echo $nbr1 / $nb2;
                            break;
                        default:
                            echo "je ne connais pas cette opération";
                    }
                ?>
                            switch ($i) {
                    case 0:
                        echo "i égal 0";
                        break;
                    case 1:
                        echo "i égal 1";
                        break;
                    case 2:
                        echo "i égal 2";
                        break;
                }
            </div>
        </main>
    </div>
    
</body>
</html>