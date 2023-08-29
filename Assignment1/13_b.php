<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13.Star print - b.</title>
</head>

<body>
    <h2>
        <?php
        $n = 6;

        //Print downward triangle star
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $n; $j >= $i; $j--) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </h2>
</body>

</html>