<?php
// Schreiben Sie eine Funktion `factorial`, die die Fakultät einer Zahl `n` berechnet.
// 5! = 5 * 4 * 3 * 2 * 1 = 120
// 3! = 3 * 2 * 1 = 6
// 0! = 1

$n=0; //Zahlen eintippen

function factorial(int $n): int { 
    if ($n===0) {
    return 1;
    }

    $fakultaet = 1;
for ($i=1; $i<=$n; $i++) { //Start bei 1, Loop läuft bis $num-1, Durchlauf:Erhöhung
    $fakultaet = $fakultaet * $i; // Nimm Wert mal Laufwert i
    }
    return $fakultaet;
}

var_dump(factorial($n));

#Es geht auch
$result = array_reduce(
    $nums,
    fn($carry, $num) => $carry * $num,
    1
);
/** Rekursion, rekursive Funktionen
 * = die Kunst, etwas durch sich selbst auszudrücken. Angewendet z.B. bei Entscheidungsbäumen, Taxonomie...
 * 5! = 5*4!
 *    = 5*4*3!
 *    = 5*4*3*2!
 *    = 5*4*3*2*1!
 *    = 5*4*3*2*1*1
 *    = 120
 * 
 * function factorial ($n) {
 * if ($n<= 0) [
 * return 1;
 * }
 * else {
 * return $n * factorial ($n-1);
 * }
 * 

 */
?>

