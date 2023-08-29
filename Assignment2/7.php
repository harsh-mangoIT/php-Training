<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>
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
    <h2>User Data:</h2>

    <?php
    $userData = array(
        array(
            "email" => "harsh@gmail.com",
            "username" => "Harsh Raikwar",
            "phone_numbers" => array("9009261852", "9111372845", "6264495378")
        ),
        array(
            "email" => "abhishek@gmail.com",
            "username" => "Abhishek Choudhary",
            "phone_numbers" => array("9009261852", "9111372845", "6264495378")
        ),
        array(
            "email" => "vaishali@gmail.com",
            "username" => "Vaishali Mandloi",
            "phone_numbers" => array("9009261852", "9111372845", "6264495378")
        )
    );
    ?>

    <!--Print data in tabular format -->
    <table>
        <tr>
            <th>Email</th>
            <th>Username</th>
            <th>Phone number</th>
        </tr>
        <?php foreach ($userData as $user) { ?>
            <tr>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["username"]; ?></td>
                <td><?php foreach ($user["phone_numbers"] as $phoneNumber) { ?>
                <?php echo $phoneNumber . '<br>';
                    }
                } ?></td>
            </tr>
    </table>
</body>

</html>