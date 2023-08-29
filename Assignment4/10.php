<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting of an array</title>
</head>

<body>
    <h3>
        <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        class ArraySorting
        {
            public function arraySort($arr, $op)
            {   
                echo "<pre>Unsorted Order : <br>";
                print_r($arr);
                echo "<br>Sorted Order : <br>";
                {($op == "D")?(rsort($arr)):sort($arr);
                print_r($arr);
                echo "</pre>";}
            }
        }
        //Taking inputs
        $arr = array(11, -2, 4, 35, 0, 8, -9);

        $array = new ArraySorting();
        $array->arraySort($arr, "D");
        ?>
    </h3>
</body>
</html>