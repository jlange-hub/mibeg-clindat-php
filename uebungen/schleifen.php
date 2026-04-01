<?php
function is_palindrom(string $word): bool {
    $lower = strtolower($word);
    return $lower === strrev($lower);
}

$input = "";
print "Tippen Sie Ende um das Programm zu beenden.\n";

while (true) {
    $input = readline("Bitte geben Sie ein Wort ein: ");

    //Abbruchbedingung
    if ($input === "Ende") {
        // Schleife verlassen
        break;
    }

    if (is_palindrom($input)) {
        echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
    } else {
        echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
    }
}


for ($i =  0; $i< 100000; $i++)  {
    print "$i\n";
}

?>