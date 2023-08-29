<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <h2>
        <?php
        function add($num1, $num2)
        {
            return $num1 + $num2;
        }
        function subtract($num1, $num2)
        {
            return $num1 - $num2;
        }
        function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }
        function divide($num1, $num2)
        {
            return $num1 / $num2;
        }

        $number1 = 8;
        $number2 = 2;
        $result = add($number1, $number2);
        echo "Addition of '$number1' & '$number2' is $result <br><br>";
        $result = subtract($number1, $number2);
        echo "Subtraction of '$number1' & '$number2' is $result<br><br>";
        $result = multiply($number1, $number2);
        echo "Multiplication of '$number1' & '$number2' is $result<br><br>";
        $result = divide($number1, $number2);
        echo "Division of '$number1' & '$number2' is $result";
        ?>
    </h2>
</body>

</html>