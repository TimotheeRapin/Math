<?php
$a = 0;
$b = 1.5;


$x = ($a + $b) / 2;
$tolerance = 0.001;

$f = $x^-4 - $x^4 - $x^3 + 4;

/*
 * f(x)>0 ?
 * $B = $X;
 *
 * dsc
 * $A = $X;
 *
 * while($B - $A > $tolerance)
 */

// Trouver f de x si x = 0
while 

while (abs($x) > $tolerance) {
    $x = ($a + $b) / 2;

    if ($x >= 0) {
        $b = $x;
    }
    else {
        $a = $x;
    }

    echo "x = " . $x . "\n";
    echo "a = " . $a . "\n";
    echo "b = " . $b . "\n\n";
}


/*
$n = ($X*3*3*3)-($X*2*2)+($X*3)-1;
$tolerance = 0.000001; // tolérance d'erreur acceptable

if ($n == 0) { // vérification si n est exactement égal à zéro
    echo "La valeur de x est : " . $X . "\n";
} else {
    while (abs($n) > $tolerance) { // utilisation de la valeur absolue de n
        $n = ($X*3*3*3)-($X*2*2)+($X*3)-1;
        if ($n>0) {
            $X+=$tolerance;
        } else if ($n<0) {
            $X-=$tolerance;
        }
        echo "\n" . "x = " . $X . "\n";
        echo "n = " . $n . "\n";
    }
    echo "La valeur de x est : " . $X . "\n";
}
*/

/*
$f($x) = $x^7 - $x^4 - $x^3 + 4;*/

