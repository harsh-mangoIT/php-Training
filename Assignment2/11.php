<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array merge recursive function</title>
</head>

<body>
    <h3>
        <?php
        $array1 = array("a" => "red", "b" => "green", "e" => "White", "d" => "Brown",);
        $array2 = array("c" => "blue", "b" => "yellow", "d" => " ");
        echo "Before recursively merge array: <pre>";
        print_r($array1);
        print_r($array2);

        echo "<br>After recursively merge array:";

        // Recursively merge arrays using array_merge_recursive() function
        print_r(array_merge_recursive($array1, $array2));
        foreach($array1 as $array2){
            
        }
?>
    </h3>
</body>

</html>