<?php

# Array mit Zahlen
$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

# Reduce the array to a single value
var_dump(array_reduce(
$nums, # Iteration über Array
fn($c, $n)=>[ #$n=Wert, der dran ist; $c=Aktuelles Ergebnis, "Carry-Bit" Zwischenstatus
    "max"=>$n>$c["max"]?$n:$c["max"], # Welcher Wert ist größer (a=max), ?: ternärer Operator,einfache if-Abfrage
    "min"=>$n<$c["min"]?$n:$c["min"], # Welcher Wert ist kleiner
    "avg"=>$c["avg"]+$n/count($nums)], #Durchschnitt (div Anzahl der Elemente)
    
    #Startwerte initialisieren
    ["max"=>$nums[0],
    "min"=>$nums[0],
    "avg"=>0
    ]
    
    ));

    // Klassisch
//function sumMaker1($a, $b) {
    //return $a + $b;
///}

// Anonym
//$sumMaker2 = function($a, $b) {
    //return $a + $b;
//};

// Fat Arrow besser bei höherwertigen Funktionen
//$sumMaker3 = fn($a, $b) => $a + $b;

?>