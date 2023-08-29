<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check position of word in String</title>
</head>

<body>
    <h3>
        <?php
        class PositionChecker
        {
            public function positionCheck($string, $word)
            {
                $position = strpos($string, $word);

                if ($position) {
                    echo "The word '$word' in the string at $position position.";
                } else {
                    echo "The word '$word' was not found in the string.";
                }
            }
        }
        //Taking inputs
        $string = "It was a very enriching experience at the University as not only we were actively involved in practical projects";
        echo "String : " . $string . "<br><br>";
        $positionCheck = new PositionChecker();
        $positionCheck->positionCheck($string, "experience");
        ?>
    </h3>
</body>

</html>