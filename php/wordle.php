<?php
#Aufgabe: Code das Spiel Wordle. 
# Ein Wort mit fünf Buchstaben, sechs Versuche es zu erraten.
# Farbcodierung basierend auf Genauigkeit:
# grün: korrekter Buchstabe an richtiger Stelle
# gelb: korrekter Buchstabe an falscher Stelle
# grau: Buchstabe kommt im Wort nicht vor

# 1. Einlesen  einer Textdatei mit Worten (vllt randomnumber
# um bei jeder Runde ein anderes Wort zu erraten)
# Wort: length

# Textdatei/ CSV einlesen mit Worten
#file(string$filename) # Liest eine komplette Datei in ein Array
#rand() 

# Wir können ein Raster erstellen
#Dazu müssen den Buchstaben Felder im Grit zugewiesen werden
# [Buchstabe 1= Feld 1] usw. / und oder length-Definition (=5)

#Überprüfung, ob Buchstabe im Grit = Buchstabe in meinr Textdat ist

# [Buchstabe_Grid]=[Buchstabe_Text] = Boole (wahr(stimmt überein)
                                    #Boole (falsch keine Übereinstimmung

$txt_file = "uebungen/worte.txt";

$words = file($txt_file);        #Datei in Array einlesen
$words = array_map('trim', $words); #\n entfernen
$words = array_map('strtolower', $words); #alles klein schreiben

$randomKey = array_rand($words);   #zufälligen Index wählen
$secretWord = $words[$randomKey];  #zufälliges Wort auswählen

print $secretWord. PHP_EOL;

# äußere j Zeitschleife bauen weil 6 Versuche (wegen Iteratorbeginn bei 0 <6)
for($j = 0; $j < 6; $j++) {
$tipWord = strtolower(readline ("Hallo Wordler! Gib ein Wort ein:"));
# Leeres Array um Ergebnis auszugeben
$result =[];

# Innere Zählschleife zur Buchstabenüberprüfung
for ($i=0; $i<strlen($secretWord); $i++) { #Loop beginnt bei 0, 5 Buchstaben aber Index 4 also <, Hochzählung) 
    if ($secretWord[$i] === $tipWord[$i]) { #Wörter stimmen überein
        $result[] = "🤗";
        continue;
    }
    if (str_contains($secretWord, $tipWord[$i])) {
        $result[]= "🟨"; # man kann auch \033 NUTZEN
        continue;
    }
    else {
        $result[]= "🟥";
        continue;
    }

} #  Ende innere i Zählschleife

print implode (" ", $result) . "\n";

# wenn Worte direkt übereinstimmen wird das Spiel gestoppt
# die Zeitschleife muss dann aber unterbrochen werden!
if($tipWord === $secretWord) {
    print "🥇 Du hast das Wort richtig erraten!";
    break;
}

} # Ende j Zeitschleife
?>