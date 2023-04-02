<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les conditions | exercice 1</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <p>1. Écrivez une expression conditionnelle utilisant une variable $note et affiche un grade à un intervalle de note : <br> grade A pour une note entre [18–20],  B[14-18], C [10–14], et D [0–0].</p>
            </div>
            <hr>
            <div class="answer">
                <p>Je m'applique à solutionner ce problème : </p>
                <p>
                    <pre>
                        <?php
                            $note = 0;

                            if ($note >= 18 && $note <= 20){
                                echo "grade A";
                            }
                            elseif($note >= 14 && $note < 18){
                                echo "grade B";   
                            }
                            elseif ($note >= 10 && $note < 14) {
                                echo "grade C";
                            }
                            elseif ($note === 0) {
                                echo "grade D";
                            }
                        ?>
                    </pre>
                </p>
                <p>Par exemple si <strong>$note</strong> vaut : </p>
                <br>
                        <p>
                            $note = 0;<br>

                            if ($note >= 18 && $note <= 20){<br>
                                echo "grade A";<br>
                            }<br>
                            elseif($note >= 14 && $note < 18){<br>
                                echo "grade B";<br>
                            }<br>
                            elseif ($note >= 10 && $note < 14) {<br>
                                echo "grade C";<br>
                            }<br>
                            elseif ($note === 0) {<br>
                                echo "grade D";<br>
                            }<br>
                        </p>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>