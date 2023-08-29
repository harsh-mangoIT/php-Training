<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print table class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="form">
        <form action="3.php" method="post">
            <label for="number">Table of : </label>
            <input name="number" type="number" id="number" placeholder="Enter number"><br><br>
            <button type="submit">Print</button><br><br>
        </form>
    </div>
    <?php

    class Table
    {
        //Properties
        private $num;

        //Methods
        public function __construct($num)
        {
            $this->num = $num;
        }

        public function printTable()
        {
            for ($i = 1; $i <= 10; $i++) {
                echo "$this->num * $i = " . ($this->num * $i) . "<br>";
            }
        }
    }

    if (isset($_POST["number"])) {
        $num = $_POST["number"];
        $table = new Table($num);
        $table->printTable();
    }

    ?>
    </h3>
</body>

</html>