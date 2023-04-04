<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>affichage et formatage  | exercice 4</title>
</head>
<body>
    <div class="container">
        <? require_once('include/header.php'); ?>
        <main>
            <div class="wrapper">
                <h2>Enoncé : </h2>
                <p>
                    Ecrivez une boucle qui affiche le code ASCII de chaque lettre de la chaîne "PHP 7 news" sur une ligne différente .
                    //Source : www.exelib.net
                </p>
                <p>Exemple d'exécution : </p>
                <div class="wrap_ASCII">
                    <div>
                        <p>le code ASCII du caractere " P " est: 80</p>
                        <p>le code ASCII du caractere " H " est: 72</p>
                        <p>le code ASCII du caractere " P " est: 80</p>
                        <p>le code ASCII du caractere " " est: 32</p>
                      <p>le code ASCII du caractere " 7 " est: 55</p>
                          <p>le code ASCII du caractere " " est: 32</p>
                      <p>le code ASCII du caractere " n " est: 110</p>
                        <p>le code ASCII du caractere " e " est: 101</p>
                        <p>le code ASCII du caractere " w " est: 119</p>
                        <p>le code ASCII du caractere " s " est: 115</p>
                        //Source : www.exelib.net
                    </div>
                   
                </div>
                
            </div>
            <div class="answer">
                <h3>
                    Je m'applique à solutionner le problème :
                </h3>
                <?php
                   $str = "PHP 7 news";
                   $i = 0;
                   $len = strlen($str);
                   while ($i < $len)
                   {
                    $char = substr($str, $i, 1);
                    echo "le code ASCII du caractere ". '"'. $char .'"' . " est: " . ord($char) ."<br>";
                    $i++;
                   }
                ?>
            </div>
            <div class="answer">
                <h3>Voici mon code : </h3>
                <pre>
                    $str = "PHP 7 news";<br>
                   $i = 0;<br>
                   $len = strlen($str);<br>
                   while ($i < $len)<br>
                   {<br>
                    $char = substr($str, $i, 1);<br>
                    echo "le code ASCII du caractere ". '"'. $char .'"' . " est: " . ord($char) ."&ltbr&gt";
                    $i++;<br>
                   }<br>
                </pre>
                <p>La fonction <strong>ord</strong> retourne le code ASCII d'un caractère.</p>
                <p>La fonction <strong>strlen</strong> calcule la taille d'un chaîne.</p>
                <p>La fonction <strong>substr</strong> retourne un ségment d'un chaîne.</p>
            </div>
        </main>
        <? require_once('include/footer.php'); ?>
    </div>
</body>
</html>