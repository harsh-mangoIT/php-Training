<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="form-container">
        <h3>User Registration Form:</h3><br>
        <form action="registrationForm.php" method="post">
            <div class="form-input">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name">
            </div><br>

            <div class="form-input">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name">
            </div><br>

            <div class="form-input">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email">
            </div><br>

            <div class="form-input">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div><br>

            <div class="form-input">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other's</label>
            </div><br>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div><br>

            <div class = buttons>
                <div class="submit-button">
                    <button type="submit">Submit</button>
                </div>

                <div class="show-button">
                    <a href="userDetails.php">Show</a>
                </div>
            </div>

        </form>
    </div><br>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myform_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // set parameters
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // prepare, bind and execute
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, dob, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstname, $lastname, $email, $dob, $gender, $password);

    $stmt->execute();

    // if ($stmt->execute() === TRUE) {
    //     echo "Registration successful!";
    // } else {
    //     echo "";
    // }

    $stmt->close();
    $conn->close();
    ?>

</body>

</html>