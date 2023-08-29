<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word replace in string</title>
</head>

<body>
    <h3>
        <?php
        class WordReplacement
        {
            public function wordReplace($oldWord, $replaceWord, $string)
            {
                $string = str_replace($oldWord, $replaceWord, $string) . "<br>";
                return $string;
            }
        }
        //Taking inputs
        $string = "I have been working as a position for x years";
        echo "Previous string : " . $string . "<br><br>";
        $wordReplacement = new WordReplacement();
        $string = $wordReplacement->wordReplace("position", "Developer", $string);
        echo "Updated string : " . $wordReplacement->wordReplace("x", "2", $string);
        ?>
    </h3>
</body>

</html>