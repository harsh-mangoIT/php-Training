<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation on variables</title>
</head>

<body>
    <h2>
        <?php
        $num1 = 10;
        $num2 = 2;
        echo "First number is $num1 & Second number is $num2 <br>";
        echo "Addition : " . ($num1 + $num2) . "<br>";
        echo "Multiply : " . ($num1 * $num2) . "<br>";
        if ($num2) {
            echo "Division : " . ($num1 / $num2);
        } else {
            echo "Cannot divide by zero.";
        }
        ?>
    </h2>
</body>

</html>