<?php define("DATABASE_FILE", "data/trees_of_cologne.sqlite"); //..Ordner verlassen, möglicherweise muss das genutzt werden
$connection = new PDO("sqlite:" . DATABASE_FILE);

$sql ="SELECT germanName, height FROM trees WHERE height >:minHeight"; #mit :Platzhalter
$stmt = $connection ->prepare($sql);
$stmt->execute(["minHeight"=>30]);

while ($row =  $stmt->fetch()) {
    print $row["germanName"] ." hat eine Höhe von {$row["height"]}" . PHP_EOL;
}