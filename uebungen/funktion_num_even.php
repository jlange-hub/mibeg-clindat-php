<?php
/*Schreiben Sie eine Funktion is_even_or_odd(int $num): string die für eine Zahl bestimmt, 
ob diese gerade oder ungerade ist*/

function is_even_or_odd () {
$num = readline("Ist die Zahl gerade oder ungerade? Geben Sie bitte eine Zahl zur Überprüfung ein: ");

        if($num % 2 === 0) { //Gerade Zahl durch zwei teilbar und dann bleibt kein Rest (=0)
    print "$num ist gerade" . "\n";
    }
    else {
    print "$num ist ungerade" . "\n";
    }
}

is_even_or_odd();

$num = (int)readline("Ist die Zahl gerade oder ungerade? Geben Sie bitte eine Zahl zur Überprüfung ein: ");
function is_even(int $num): string {
    if($num % 2 === 0) { //Gerade Zahl durch zwei teilbar und dann bleibt kein Rest (=0)
    return "$num ist gerade." . "\n";
    }
    else {
    return "$num ist ungerade." . "\n";
    }
}

print is_even($num);
