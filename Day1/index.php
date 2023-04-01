<?php
$a="Les ";
$b="7 merveilles du monde";
$c=$a.$b;
$d=$b+13;
$b=&$c;

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";

for ($i = 0; $i<50; $i++)
    echo "******************************************************************************";
/*
1. Donner les valeurs des variables $a,$b,$c,$d à la fin des scripts suivants : 
b.script 2
<?php
	$a="5+5";
	$b="2E2";
	$c=$a+$b;
	$d=(double)$b;
?>
//Source : www.exelib.net
*/

$a="5+5";
$b="2E2";
$c=$a+$b;
$d=(double)$b;

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manipuler les variables et les constantes</title>
</head>
<body>
    <?php require_once('./include/nav.php'); ?>
    <div class="container">
        <main>
            <section class="main_content">
                <h1 class="main_title">Manipuler les Variables et les constantes</h1>
                <h2>Enoncé :</h2>
            </section>
        </main>
    </div>
    
</body>
</html>