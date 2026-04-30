<?php

//Konstanten für Bequemlichkeit und weniger Tippen
define("DATA_SOURCE", "data/baumbestand_koeln_2020.csv");
define("DATA_TARGET", "data/trees_of_cologne.sqlite");

//SQLite-Datenbank anlegen
$connection = new PDO("sqlite:". DATA_TARGET); #PDO PHP

$sql = "CREATE TABLE IF NOT EXISTS trees (id integer PRIMARY KEY, height integer, germanName text)";
$statement = $connection->prepare($sql);
$statement->execute();

define("KEY_ID",0);
define("KEY_HEIGHT",15);
define("KEY_NAME",22);
define("SKIP_ROWS",1);

$file = fopen(DATA_SOURCE, "r");

//Wiederholung erfordert Schleifen zum Auslesen einiger Werte

$rows =0;
while (($data =fgetcsv($file, separator: ";")) !==false) {
    $rows++;

    if ($rows <= SKIP_ROWS) {
        continue; //überspringen
    }
//interessiert uns nicht => continue übersprungen

$id = $data[KEY_ID];
$height = $data[KEY_HEIGHT];
$name = $data[KEY_NAME];

$sql = "INSERT INTO trees (id, height, germanName) VALUES (?,?,?)";
$statement2 = $connection->prepare($sql);
$statement2->execute([
$id,
$height,
$name
]);

print "Stored '$germanName' with height '$height' m." . PHP_EOL;
}
?>