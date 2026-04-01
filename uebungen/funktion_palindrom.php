<?php
/* Aufgabe: Schreiben Sie eine Funktion, die ein Wort einliest und prüft, ob dieses ein Palindrom ist.
Antworten Sie mit einem entsprechenden Text.*/

function fun_pali()  {
    $wort = readline("Geben Sie ein Wort ein: ");

    $isPalindrom = strtolower($wort) === strtolower(strrev($wort));

        if($isPalindrom) {
    print " TRUE. Das ist ein Palindrom" . "\n";
    }
    else {
    print "FALSE. Das ist kein Palindrom" . "\n";
    }
}

fun_pali();