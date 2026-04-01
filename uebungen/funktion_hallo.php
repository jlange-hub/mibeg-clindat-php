<?php
/*Aufgabe: Schreiben Sie eine Funktion, die den Namen einliest und diesen dann mit "Hallo, <Name>!" begrüßt.
*/

function fun_hell($greeting = "Hallo") {
    $name = readline("Geben Sie Ihren Namen ein: ");
    print $greeting, . $name! . PHP_EOL;
}

fun_hell();
fun_hell("Moin");
fun_hell("Willkommen");