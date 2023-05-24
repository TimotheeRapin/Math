<?php
$a = 0;
$b = 1.5;
$tolerance = 0.001;

function f($x) {
    $f = pow($x, -4) - pow($x, 4) - pow($x, 3) + 4;
    return $f;
}

// Trouver f(x) si x = 0
if (f($a) == 0) {
    echo "La valeur de x est : " . $a . "\n";
} else {
    while (abs($b - $a) > $tolerance) {
        $x = ($a + $b) / 2;

        if (f($x) == 0) {
            break;
        }

        if (f($x) * f($a) < 0) {
            $b = $x;
        } else {
            $a = $x;
        }
    }
    echo "La valeur de a est : " . $a . "\n";
    echo "La valeur de b est : " . $b . "\n";
    echo "La valeur de x est : " . $x . "\n";
    echo "La valeur de f(x) est : " . f($x) . "\n";
}
