<?php
// Trouver l'aire sous la courbe de f(x) = x^2 entre $a et $b

//$a = 0.0;
$a = -6.0;
//$b = 4.0;
//$b = 3.14159;
$b = 6.0;
$nbColonnes = 100000;

$largeurColonne = ($b - $a) / $nbColonnes;
$aire = 0.0;

if (f($a) < 0) {
    $i = $b;
    $b = $a;
    $a = $i;
}

function f($x) {
    //$f = pow($x, 2) + 2;
    //$f = sin($x);
    $f = -pow($x, 2) + 36;
    return $f;
}

for ($i = 0; $i < $nbColonnes; $i++) {
    $aire += f($a + $i * $largeurColonne) * $largeurColonne;
}

echo "L'aire sous la courbe de f(x) = entre $a et $b est : " . $aire . "\n";