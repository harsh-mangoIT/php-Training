<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13.Star print - c.</title>
</head>

<body>
    <h2>
        <?php
        $n = 7;

        // Print star pattern
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </h2>
</body>

</html>