<?php
define('FILENAME', 'data/demo.db');
$connection = new PDO('sqlite:' . FILENAME); #PHP Data Pbjects

$sql = "CREATE TABLE IF NOT EXISTS trees (
id integer PRIMARY KEY,
height float,
germanName text)";
$stmt1 = $connection -> prepare($sql);
$stmt1 ->execute();

?>