<?php
$animals=["lion", "pig", "eagle"];
#prinnt var_dump($animals[3]) . PHP_EOL; #Um auf einzelne Elemente zuzugreifen [num]
#print count($animals) . PHP_EOL; #Um Max-Index ausgeben zu lassen

array_push($animals, true, "tiger",42, "Das ist kein Tier"); # zum einfügen neuer Elemente in das  Array
#array_pop($animals); #last-in-first-out-prinzip beim aufruf; wegnehmen vom ende des arrays
#print var_dump($animals) . PHP_EOL;

#unset($animals[2]) #entfernt ein element ABER PROBLEM weil Lücke in der Indizierung entsteht

#print var_dump(array_is_list($animals)); #checked ob es eine liste ist, da diese nur bei kompletter 
#Indizierung ausgeführt wird
#$animals[0]="mouse"; # array ändern bzw. einzelne elemente überschreiben

for ($i=0; $i < count($animals); $i++) { #start=0, bedingung durchlauf aller elemente kleiner arraymax, durchlauf +1 
    print $animals[$i];
}

foreach ($animals as $animal) { # gehe jedes element im array $animals durch "für jedes element im array"
    print $animal . PHP_EOL;
}

# assoziatives Array

$num =[34, 127, 45];

$animalSounds = ["lion" => "roar", "cat" => "meow", "dog" => "wuff"];

print var_dump($animalSounds);
$animalSounds["lion"];

foreach ($animalSounds as $animal => $sound) {
print ("The $key makes: $value. \n");

}

##gleichheitstest auf arrays
$a=[1,2,3,4];
$b=[1,2,3,4];
vardump(a == b);

$a = [0 => 0, 1=>1, 2=>4, 3=>9];
$b = [0 => 0, 1=>1, 3=>9, 2=>4];
var_dump($a == $b);
var_dump($a != $b);
var_dump($a !==$b);

# funktional programmiert
function sqr($num) {
    return $num * $num;
}

$numbers = [237, 29, 34, 12, 1245];

// foreach ($numbers as $number) {
//     print sqr($number) . PHP_EOL;
// }

array_map('sqr', $numbers);

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

function makeSum($acc, $value) {
    return $acc + $value;
}

print var_dump(array_reduce($numbers, "makeSum", 0));
?>