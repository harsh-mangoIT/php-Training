<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of given no.</title>
</head>

<body>
    <h2>
        <?php

        $number = 2;
        if ($number >= 1) {
            $factorial = 1;
            $num = $number;
            for ($i = $num; $i > 1; $i--) {
                $factorial = $factorial * $num--;
            }
            echo "Factorial of $number is $factorial";
        } else echo "Please enter valid no. which is greater than 0";



        ?>
    </h2>
</body>

</html>