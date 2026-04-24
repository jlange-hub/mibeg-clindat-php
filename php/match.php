<?php

$land = "Syrien";

$hauptstadt = match ($land) {
    "Syrien" => "Damaskus",
    "Russland" => "Moskau",
    "Kamerun" => "Yaoundé",
    default => "Sorry, das Land ist nicht im Videocall."

};
print $hauptstadt . PHP_EOL;