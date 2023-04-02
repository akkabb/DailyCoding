<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exexrcice 4</title>
</head>
<body>
    <?php require_once('./include/nav.php'); ?>
    <div class="container">
        <main>
            <section>
                <div class="wrapper_gray">
                    <h1>Manipuler les Variables et les constantes</h1>
                    <h2>Enoncé :</h2>
                    <p>
                        4. En utilisant les constantes magiques du php écrire un script qui permet d'afficher la version du php <br>, le système d'exploitation du serveur , le fichier courant ,le host et la langue du navigateur client.
                    </p>
                </div>
                <h3>Ma réponse au sujet : </h3>
                <p>
                    <?php
                        // var_dump($_SERVER['SERVER_NAME']);
                        echo PHP_VERSION . "<br>";
                        echo PHP_OS . "<br>";
                        echo __FILE__ . "<br>";
                        var_dump($_SERVER['HTTP_HOST']);
                        echo "<br>";
                        var_dump( $_SERVER['HTTP_ACCEPT_LANGUAGE']);
                        echo "<br>";
                    ?>
                </p>
                
            </section>
        </main>
        <?php require_once('./include/footer.php')?>
    </div>
</body>
</html>