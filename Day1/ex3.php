<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exexrcice 3</title>
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
                        3. On considère la fonction bool suivante : <br>
                       
                        <?= '
                            function bool($var){
                                if ($var) echo "TRUE<br>";
                                else echo "FALSE<br>";
                            }
                        ';
                        ?>
                        <!-- Source : www.exelib.net -->
                    </p>
                    <p>Donner le résultat envoyé par les instructons suivantes : </p>
                    <p>
                        <pre>
                            <?='
                                bool("" == FALSE);<br>
                                bool("0" ==  "");<br>    
                                bool(0 == "");<br>    
                                bool(0 === FALSE);<br>    
                                bool("0" == FALSE);<br>;    
                            '?>
                        </pre>
                    </p>
                </div>
                <h3>Mes réponses au sujet : </h3>
                <p>Pour l'instruction  <strong>bool("" == FALSE)</strong> : </p>
                <p>
                    <pre>
                        <?php  
                        var_dump((bool)"" == FALSE);
                        ?>
                    </pre>
                </p>
                <p>Pour l'instruction   <strong>bool("0" ==  "")</strong> : </p>
                <p>
                    <pre>
                        <?php  
                        var_dump((bool) "0" == "");
                        ?>
                    </pre>
                </p>
                <p>Pour l'instruction  <strong>bool(0 == "")</strong> : </p>
                <p>
                    <pre>
                        <?php  
                        var_dump((bool) 0 == "");
                        ?>
                    </pre>
                </p>
                <p>Pour l'instruction  <strong>(0 === FALSE)</strong> : </p>
                <p>
                    <pre>
                        <?php  
                        var_dump((bool) 0 === FALSE);
                        ?>
                    </pre>
                </p>
                <p>Pour l'instruction  <strong>bool("0" == FALSE)</strong> : </p>
                <p>
                    <pre>
                    <?php
                        var_dump((bool)"0" === FALSE);
                    ?>
                    </pre>
                </p>
            </section>
        </main>
        <?php require_once('./include/footer.php')?>
    </div>
</body>
</html>