<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les conditions | exercice 2</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <p>
                    2. Rédigez une expression conditionnelle qui teste si un nombre est à la fois multiple de 3 et de 7.
                </p>
            </div>
            <div class="answer">
                <p>
                    Je m'applique à solutionner le problème :
                </p>
                <?php
                    $nbr = 0;

                    if ($nbr % 3 == 0 && $nbr % 7 == 0)
                    { 
                        echo $nbr . 'est multiple à la fois de 3 et de 7';
                    }
                ?>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>