<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
</head>

<body>
    <h3>
        <?php
        $numbers = array(5, 6, 2, 8, 1, 3, 4, 7);
        echo "Unsorted order: <pre>";
        print_r($numbers);

        // Sort arrays by using sort function in ascending order
        sort($numbers);
        echo "<br>Sorted in ascending order: <pre>";
        print_r($numbers);

        // Sort arrays by using rsort function in descending order
        rsort($numbers);
        echo "<br>Sorted in descending order: <pre>";
        print_r($numbers);
        ?>
    </h3>
</body>

</html>