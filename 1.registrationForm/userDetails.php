<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    // Create connection
    $conn = new mysqli("localhost", "root", "root", "myform_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT firstname, lastname, email, dob, gender FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <div class="table-container">
            <table>
                <h3>User Details:</h3><br>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                </thead>
                <!-- output data of each row -->
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["firstname"] . " " . $row["lastname"]; ?>
                        </td>
                        <td>
                            <?php echo $row["email"]; ?>
                        </td>
                        <td>
                            <?php echo $row["dob"]; ?>
                        </td>
                        <td>
                            <?php echo $row["gender"]; ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php
    } else {
        echo "<h4>User Details are empty</h4>";
    }
    $conn->close();
    ?>
</body>

</html>
