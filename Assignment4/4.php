<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill calculator class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="form">
        <form action="4.php" method="post">
            <label for="units">Total consumption (in units):</label>
            <input name="units" type="number" id="units" placeholder="(Enter electric unit)"><br><br>
            <button type="submit">Calculate</button>
        </form>
    </div>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    class ElectricityBill
    {
        //Properties
        private $units;

        //Methods
        public function __construct($units)
        {
            $this->units = $units;
        }

        public function calculateBill()
        {
            if ($this->units < 100)
                echo "<br>Your total consumed unit is '$this->units', per unit rate is Rs. 6<br><br> Total Generated bill : Rs. " . $this->units * 6;
            else if ($this->units < 250)
                echo "<br>Your total consumed unit is '$this->units', per unit rate is Rs. 10<br><br> Total Generated bill : Rs. " . $this->units * 10;
            else
                echo "<br>Your total consumed unit is '$this->units', per unit rate is Rs. 15 with additional charge of 5% on bill<br><br> Total Generated bill : Rs. " . (($this->units * 15) + (($this->units * 15) * 0.05));
        }
    }

    if (isset($_POST["units"])) {
        $units = $_POST["units"];
        $bill = new ElectricityBill($units);
        $bill->calculateBill();
    }
    ?>

</body>

</html>