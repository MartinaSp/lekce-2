<?php

//Obdelnik
$a = 4;
$b = 5;
$obdelnikobsah = $a * $b;
echo ('Obsah obdelníku o stranách a: '. $a . ' cm, b: ' . $b . ' cm je: ' . $obdelnikobsah . ' cm2');

echo "<br>";

//Trojuhelnik
$strana = 6;
$uhel = 60;
$uhel_radians = deg2rad ($uhel);
$vyska = sin ($uhel_radians) * $strana;
$trojuhelnikobsah = ceil($strana * $vyska / 2);
echo ('Rovnostranný trojúhelník o straně délky ' . $strana . ' cm' . ' a úhlu ' . $uhel . ' stupňů je ' . $trojuhelnikobsah . ' cm2');

?>

