<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

if ($isSubmitted) {
    $minHeight = filter_input(INPUT_POST, "height");

    // Freies Eingabefeld Benutzer-Alter
    $age = filter_input(INPUT_POST, "age");

    define("DATABASE_FILE", "trees_of_cologne.sqlite");

    $connection = new PDO("sqlite:" . DATABASE_FILE);

    $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
    $stmt = $connection->prepare($sql); // 2
    $stmt->execute(["minHeight" => $minHeight]); // 3

    $sql = "SELECT COUNT(*) FROM trees WHERE height > :minHeight"; // 1
    $stmt2 = $connection->prepare($sql); // 2
    $stmt2->execute(["minHeight" => $minHeight]); // 3
}
?>

<!doctype html>
<head>
    <title>Baumkataster Köln 2020</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        th,
        td {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
        }
        tbody > tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }
    </style>
</head>
<body>
    <h1>Bäume in Köln</h1>

    <p>Suchen Sie nach Bäumen einer bestimmten Größe:</p>
    <form method="post">

<!--Baumhöhe-->
        <input name="height" value="<?= $minHeight ?>" type="number" placeholder="Größe in m">
        <input type="submit">
<!--Benutzeralter-->
        <input name="age" value="<?= $age ?>" type="number" placeholder="Bitte Alter eingeben">
        <input type="submit">

    </form>
<h1>Herzlichen Glückwunsch!</h1>
<p>Sie sind volljährig!</p>

<?php
$fp = fopen("https://yesno.wtf/api?force=yes", "r");
$yes = json_decode(stream_get_contents($fp));
?>

<img src="<?= $yes->{"image"} ?>">
    <!--Alterscheck-->
    <?php if ($age >=18): ?>
        <p><b>Der Benutzer ist volljährig.</b></p>


    <p><b><?= $stmt2->fetchColumn() ?></b> Ergebnisse</p>

    <?php if ($isSubmitted): ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Höhe</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $stmt->fetch()): ?>

                <tr>
                    <td>
                        <?= $row["germanName"] ?>
                    </td>
                    <td>
                        <?= $row["height"] ?>
                        m
                    </td>
                </tr>

            <?php endwhile; ?>

        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>