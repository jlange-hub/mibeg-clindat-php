<?php
/*
Übung: Schreiben Sie eine Funktion, die für das
untenstehende Array die Summe der enthaltenen
Zahlen bestimmt und zurückgibt.
*/

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

foreach ($numbers as $number) { # gehe jedes element im array durch
 $sum = $sum + $number;   
#$sum += $number; Kurzschreibweise aber gleiche Logik
}

print $sum . PHP_EOL;

?>