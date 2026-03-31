<?php
//Palindrom-Checker 
//$testString="Otto"; // => PALINDROM, BOOLE=TRUE

//$rev_otto= strtolower($testString);
//$testString="Anna"; => PALINDROM, BOOLE=TRUE
//$testString="Jaqueline"; => Keine Palindrom, BOOLE=FALSE

//var_dump($rev_otto === strrev($rev_otto));
//

$word = "lagerregal";
$isPalindrom = strtolower(($word)) === strtolower(strrev($word));

if($isPalindrom) {
print " TRUE. Das ist ein Palindrom" . "\n";
}
else {
    print "FALSE. Das ist kein Palindrom" . "\n";
}
?>