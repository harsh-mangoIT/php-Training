<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse the String</title>
</head>

<body>
    <h3>
        <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        class ReverseString
        {
            public function reverseStr($str)
            {
                echo strrev($str);
            }
        }
        //Taking inputs

        $string = "elgoogmorfmargorpsihtdeipoc ton evaheW";
        echo "String : " . $string . "<br><br>";
        $reverseStr = new ReverseString();
        $reverseStr->reverseStr($string);
        ?>
    </h3>
</body>

</html>