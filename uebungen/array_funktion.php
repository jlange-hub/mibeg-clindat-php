<?php
#Schreiben Sie eine Funktion, die einen String als Argument nimmt und die Spiegelung des String zurückgibt; 
#also zum Beispiel soll aus Hallo dann ollaH werden. Sie dürfen strrev NICHT verwenden.

#Länge eines String bestimmen Sie mit strlen (https://www.php.net/manual/en/function.strlen.php)
#Einzelne Buchstaben eines Strings können Sie—genau wie bei Arrays—mit eckigen Klammern ermitteln


$str = "Das ist ein schoener Tag"; #Zeichenlänge, Leerzeichen werden auch mitgezählt (Bytes-Ausgabe)
print strlen($str) . PHP_EOL; # Anzeige der Zeichenlänge

function mirror(string $str): string {#String als Argument, String als Output
$rueckwaerts =""; #sonst PHP Warning:  Undefined variable $rueckwaerts
for ($i= strlen($str)-1; $i>=0 ; $i--) { //Start: Wort 6 aber Index (0,1,2,3,4,5), Beding:Schleife muss stoppen wenn Index fertig =0 , Rückwärtslaufen der Schleife
    $rueckwaerts.=$str[$i]; //concatenate
}
return $rueckwaerts;
}
print mirror($str) . PHP_EOL;
?>
