<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String uppercase and lowercase</title>
</head>

<body>
    <h2>
        <?php
        function toUppercase($str){
            echo strtoupper($str);
            echo "<br>";
        }
        function toLowercase($str){
            echo strtolower($str);
        }

        $string = "hello world";
        echo "Your original string is: $string <br><br>";
        toUppercase($string);
        toLowercase($string);
?>
    </h2>
</body>

</html>