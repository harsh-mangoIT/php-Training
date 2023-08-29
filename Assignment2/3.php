<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial program</title>
</head>

<body>
    <h3>
        <?php
        $number = 7;
        function factorial($n)
        {
            $f = 1;
            for ($i = $n; $i > 1; $i--) {
                $f = $f * $n--;
            }
            return $f;
        }
        $result = factorial($number);

        echo "Factorial of $number is: $result";
        ?>
    </h3>
</body>

</html>