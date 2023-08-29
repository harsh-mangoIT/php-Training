<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perform operations by switch-case</title>
</head>

<body>
    <h2>
        <?php
        $operator = "+";
        $num1 = 8;
        $num2 = 2;

        
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                echo "Addition: $result";
                break;
            case "*":
                $result = $num1 * $num2;
                echo "Multiplication: $result";
                break;
            case "/":
                if ($num2) {
                    $result = $num1 / $num2;
                    echo "Division: $result";
                } else {
                    echo "Cannot divide by zero.";
                }
                break;
            default:
                echo "Invalid operation.";
            }
        
        ?>
    </h2>
</body>

</html>