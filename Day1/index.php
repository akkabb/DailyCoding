<?php

/*
1. Donner les valeurs des variables $a,$b,$c,$d à la fin des scripts suivants : 
a.script 1
<?php
	$a="Les ";
	$b="7 merveilles du monde"
	$c=$a.$b;
	$d=$b+13;
	$b=&$c;
?> 
//Source : www.exelib.net
*/

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