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
            "firstname" => "Harsh",
            "lastname" => "Raikwar",
            "dob" => "24-08-2000",
            "email" => "harsh@gmail.com"
        ),
        array(
            "firstname" => "Abhishek",
            "lastname" => "Choudhary",
            "dob" => "07-08-2000",
            "email" => "abhishek@gmail.com"
        ),
        array(
            "firstname" => "Vaishali",
            "lastname" => "Mandloi",
            "dob" => "05-07-2002",
            "email" => "vaishali@gmail.com"
        )
    );
    ?>

    <!--Print data in tabular format -->
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email</th>
        </tr>
        <?php foreach ($userData as $user){?>
        <tr>
            <td><?php echo $user["firstname"]; ?></td>
            <td><?php echo $user["lastname"]; ?></td>
            <td><?php echo $user["dob"]; ?></td>
            <td><?php echo $user["email"]; }?></td>
        </tr>
    </table>
</body>

</html>