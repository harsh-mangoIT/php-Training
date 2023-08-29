<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print pyramid</title>
</head>

<body>
    <h2>
        <?php
        $n = 6;

        // Print pyramid upto 6 row at last
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $n; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </h2>
</body>

</html>