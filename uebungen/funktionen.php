<?php
function which_is_smaller(int $n1, int $n2): string{
    if ($n1 == $n2) {
        return "Die Zahlen sind gleich groß";
    } elseif ($n1 < $n2) {
        return $n1;
    }
    else {
        return $n2;
    }
}

print which_is_smaller(13,13) . PHP_EOL;
?>