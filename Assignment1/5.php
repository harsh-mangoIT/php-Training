<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill by if-else</title>
</head>

<body>
    <h2>
        <?php
        $unit = 260;
        if ($unit <= 0) {
            echo "No electricity bill is generated";
        } else if ($unit <= 100) {
            echo "Your consumption unit is : $unit, per unit rate is Rs.6<br><br>";
            echo "Total Generated Bill : " . $unit * 6;
        } else if ($unit <= 250) {
            echo "Your consumption unit is : $unit, per unit rate is Rs.10<br><br>";
            echo "Total Generated Bill : " . $unit * 10;
        } else {
            echo "Your consumption unit is : $unit, per unit rate is Rs.15 with additional charge of 5%<br><br>";
            echo "Total Generated Bill : " . (($unit * 15) + (($unit * 15) * 0.05));
        } ?>
    </h2>
</body>

</html>