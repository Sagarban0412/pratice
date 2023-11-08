<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
</head>

<body>
    <form action="lab30.php" method="post">
        <h2>Table Design</h2>
        <p><samp>* Starting value must be less than ending value.</samp></p>
        <hr>
        <input type="number" placeholder="Enter the starting value" name="start" required><br>
        <input type="number" placeholder="Enter the ending value" name="end" required><br><br>
        <input type="submit" value="Generate Table" name="submit"><br>
        <hr><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['start'];
        $b = $_POST['end'];

        echo "<table border='1' cellspacing='0'>";
        echo "<tr id='head'>";
        echo "<th>N</th><th>10 x N</th><th>100 x N</th><th>1000 x N</th></tr>";

        for ($i = $a; $i <= $b; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ($i * 10) . "</td>";
            echo "<td>" . ($i * 100) . "</td>";
            echo "<td>" . ($i * 1000) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>