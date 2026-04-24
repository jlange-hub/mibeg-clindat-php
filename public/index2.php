<?php
function sum($a, $b) {
    return $a + $b;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einfache Client-Server-Kommunikation</title>
</head>
<body>
    <h1>Hallo, Welt!</h1>
    <p><?= sum(42, 17) ?></p>
</body>
</html>