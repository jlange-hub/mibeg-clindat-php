<?php

$land = "Syrien";

switch ($land) {
    case "Syrien":
        print "Damaskus" . PHP_EOL;
        break;
    case "Russland":
        print "Moskau" . PHP_EOL;
        break;
    case "Ukraine":
        print "Kiew" . PHP_EOL;
        break;
    case "Kamerun":
        print "Yaoundé" . PHP_EOL;
        break;
    case "Deutschland":
        print "Berlin" . PHP_EOL;
        break;
    default:
        print "Sorry, dieses Land ist nicht mit im Videocall." . PHP_EOL;
}