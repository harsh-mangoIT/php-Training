<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator class</title>
</head>

<body>
    <h3>
        <?php
        class Calculator
        {
            private $num1, $num2;

            public function __construct($num1, $num2)
            {
                $this->num1 = $num1;
                $this->num2 = $num2;
            }

            public function add()
            {
                return $this->num1 + $this->num2;
            }
            public function subtract()
            {
                return $this->num1 - $this->num2;
            }
            public function multiply()
            {
                return $this->num1 * $this->num2;
            }
            public function divide()
            {
                if ($this->num2 != 0)
                    return $this->num1 / $this->num2;
                else
                    return "Cannot divide by zero";
            }
        }

        //Taking inputs
        $num1 = 8;
        $num2 = 2;
        $calculator = new Calculator($num1, $num2);
        echo "Addition of '$num1' & '$num2' : " . $calculator->add() . "<br><br>";
        echo "Subtraction of '$num1' & '$num2' : " . $calculator->subtract() . "<br><br>";
        echo "Multiplication of '$num1' & '$num2' : " . $calculator->multiply() . "<br><br>";
        echo "Division of '$num1' &  '$num2' : " . $calculator->divide();
        ?>
    </h3>
</body>

</html>