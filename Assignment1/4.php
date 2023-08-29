<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of 10</title>
</head>

<body>
    <h2>
        <?php
        echo "Table of 10:<br><br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "10 * $i = " . 10 * $i . "<br>";
        }
        ?>
    </h2>
</body>

</html>