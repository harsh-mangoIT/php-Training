<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime checker</title>
</head>

<body>
    <h3>
        <?php
        $number = 7;
        function checkPrime($n)
        {
            for ($i = 2; $i <= ($n / 2); $i++) {
                if ($n % $i == 0) {
                    return 1;
                }
            }
        }
        $result = checkPrime($number);

        if ($result)
            echo "Number '$number' is non-prime";
        else
            echo "Number '$number' is prime";
        ?>
    </h3>
</body>

</html>