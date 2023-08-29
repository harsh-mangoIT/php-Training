<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Position</title>
</head>

<body>
    <h2>
        <?php
        $string = "It was a very enriching experience at the University as not only we were actively involved in practical projects";
        $word = "experience";

        $position = strpos($string, $word);
        $pos = $position + 1;
        if ($pos) {
            echo "The '$word' in the string at $pos position.";
        } else {
            echo "The word '$word' was not found in the string.";
        }
        ?>
    </h2>
</body>

</html>