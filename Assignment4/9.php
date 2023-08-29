<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial class</title>
</head>

<body>
    <h3>
        <?php
        // error_reporting(E_ALL);
        // ini_set("display_errors",1);

        //Initiate Class
        class Factorial
        {
            //Properties
            private $num;

            //Methods
            public function __construct($num)
            {
                $this->num = $num;
            }

            public function calculateFactorial()
            {
                $f = 1;
                for ($i = $this->num; $i > 1; $i--) {
                    $f = $f * $this->num--;
                }
                return $f;
            }
        }

        //Take input to calculate factorial
        $num = 5;
        $factorial = new Factorial($num);
        echo "Factorial of number '$num' : " . $factorial->calculateFactorial();
        ?>
    </h3>
</body>

</html>