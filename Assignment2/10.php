<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge 2 Arrays</title>
</head>

<body>
    <h3>
        <?php
        $array1 = array(10, 30, 80, 20, 60);
        $array2 = array(70, 50, 90, 40, 100);

        echo "Before merging: <pre>";
        print_r($array1);
        print_r($array2);

        // Merge arrays by using array_merge function
        $updatedArray = array_merge($array1, $array2);

        echo "<br>After merging:";
        print_r($updatedArray);
        ?>
    </h3>
</body>

</html>