<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace word</title>
</head>

<body>
    <h2>
        <?php
        $string = "I have been working as a position for x years.";
        $replaceWord = "Associate Software Engineer";
        $replaceYear = 2;

        $newString = str_replace("position", $replaceWord, $string);
        $newString = str_replace("x", $replaceYear, $newString);

        echo $newString;
        ?>
    </h2>
</body>

</html>