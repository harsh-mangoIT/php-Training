<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State | City List</title>
    <style>
        table {
            width: 35%;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>State wise City table: </h3>
    <?php
    $states = array("mp" => "MP", "raj" => "Rajasthan", "maha" => "Maharastra", "guj" => "Gujrat");
    $cities = array(
        "mp" => array("Indore", "Dewas", "Ujjain"),
        "maha" => array("Mumbai", "Pune", "Nashik", "Nagpur"),
        "raj" => array("Jaipur", "Udaipur"),
        "guj" => array("Ahmedabad", "Surat", "Vadodara")
    );
    ?>

    <!--Print data in tabular format -->
    <table>
        <tr>
            <th>State</th>
            <th>City List</th>
        </tr>
        <?php foreach ($states as $stateKey => $stateName) { ?>
            <tr>
                <td><?php echo $stateName; ?></td>
                <td>
                <?php foreach ($cities as $cityKey => $city) {
                    if ($cityKey == $stateKey) {
                        foreach ($city as $key => $cityname) {
                            echo $cityname . "<br>";
                        }
                    }
                }
            } ?></td>
            </tr>
    </table>
</body>

</html>