<?php
$a = 0.0;
$b = 1.0;
$e = 2.718282;
$tolerance = 0.0000001;

function f($x) {
    //$f = pow($x, 3) - 5 * pow($x, 2) + 2;// $x-cos($x)
    $f = pow(2.718282, -$x) - $x; //2.718282 = $e
    return $f;
}

// Trouver f(x) si x = 0
if (f($a) > 0) {
    $i = $b;
    $b = $a;
    $a = $i;
}

echo "La valeur de f(a) est : " . f($a) . "\n";
while (abs($b - $a) > $tolerance) {
    $x = ($a + $b) / 2.0;

    if (f($x) > 0) {
        $b = $x;
    }
    else {
        $a = $x;
    }
}
echo "La valeur de a est : " . $a . "\n";
echo "La valeur de b est : " . $b . "\n";
echo "La valeur de x est : " . $x . "\n";
echo "La valeur de f(x) est : " . f($x) . "\n";

