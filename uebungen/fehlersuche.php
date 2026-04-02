<?php

/*
Zahlenratespiel
===============

Der Computer wählt zufällig eine Zahl zwischen 1 und 100 und der Spieler muss diese Zahl erraten.

Sobald der Spieler die Zahl erraten hat, soll sich das Programm beenden.
*/

print "Ich denke an eine Zahl zwischen 1 und 100. Erraten Sie sie!\n" ;
$secret = rand(1, 100); #vorher 0 und 101 anders als in Aufgabenstellung

while (true) { #treu statt true
    #print $secret; Rausnehmen sonst wird die Zahl direkt verraten
    $guess = readline("Ist die Zahl vielleicht: ");

    if ($guess > $secret) { #nicht <= sondern > dann stimmt auch der print
        print "Ihre Zahl ist zu groß!\n"; # Semikolon fehlte
    }
    elseif ($guess < $secret) { #nicht > sondern < dann stimmt auch der print; { fehlte
        print "Ihre Zahl ist zu klein!\n";
    }
    else {
    print "Sie haben die Zahl erraten 🎉\n";
    break; #Abbruch muss rein nach Schleifenende
    }
}

?>