<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$nameSearch  = "";

define("DATABASE_FILE", "trees.sqlite");
$connection = new PDO("sqlite:" . DATABASE_FILE);

// Dropdown-Menu
$sql = "SELECT DISTINCT germanName FROM trees";
$stmt = $connection->prepare($sql);
$stmt->execute();

if ($isSubmitted) {
    $nameSearch = filter_input(INPUT_POST, "germanName");

    $sql = "SELECT germanName, height FROM trees WHERE germanName = ?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$nameSearch]);

    $sql = "SELECT COUNT(*) FROM trees WHERE germanName = ?";
    $stmtResults = $connection->prepare($sql);
    $stmtResults->execute([$nameSearch]);
}
?>

<!doctype html>
<head>
    <title>Baumkataster Köln 2020</title>
</head>

<body>
    <h1>Bäume in Köln</h1>
    <p>Suchen Sie nach einer Baumart:</p>

    <form method="post">
        <select name="germanName">
            <?php while ($row = $stmt->fetch()): ?>
                <option value="<?= $row["germanName"] ?>">
                    <?= $row["germanName"] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <input type="submit" value="Suchen">
    </form>

    <?php if ($isSubmitted): ?>
        <p><b><?= $stmtResults->fetchColumn() ?></b> Ergebnisse</p>

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
                        <td><?= $row["germanName"] ?></td>
                        <td><?= $row["height"] ?> m</td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>