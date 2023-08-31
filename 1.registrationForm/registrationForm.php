<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $msg = $firstnameErr = $lastnameErr = $emailErr = $dobErr = $genderErr = $passwordErr = $websiteErr = "";

    function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function validatePassword($password)
    {
        return strlen($password) >= 8;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (empty($_POST["firstname"])) {
            $firstnameErr = "Firstname is required";
        } else {
            $firstname =  $_POST["firstname"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
                $firstnameErr = "Only letters allowed";
            }
        }

        if (empty($_POST["lastname"])) {
            $lastnameErr = "Lastname is required";
        } else {
            $lastname =  $_POST["lastname"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
                $lastnameErr = "Only letters allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!validateEmail($email)) {
                $emailErr = "Invalid email format";
            } else {
                echo $emailErr = '';
            }
        }

        if (empty($_POST["dob"])) {
            $dobErr = "Date Of Birth is required";
        } else {
            $dob = $_POST["dob"];
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = $_POST["password"];
            if (!validatePassword($password)) {
                $passwordErr = "Password should be more than 8 characters";
            } else {
                echo $passwordErr = '';
            }
        }

        // Create connection
        $conn = new mysqli("localhost", "root", "root", "myform_db");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (validateEmail($email) && validatePassword($password)) {
            // prepare, bind and execute
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, dob, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $firstname, $lastname, $email, $dob, $gender, $password);
            $stmt->execute();

            $stmt->close();
            $conn->close();
        }
    }
    ?>
    <div class="form-container">
        <h3>User Registration Form:</h3><br>
        <form action="registrationForm.php" method="post">
            <div class="form-input">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name">
            </div>
            <div class="error"><?php echo $firstnameErr; ?></div>
            <br>

            <div class="form-input">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name">
            </div>
            <div class="error"><?php echo $lastnameErr; ?></div>
            <br>

            <div class="form-input">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="error"><?php echo $emailErr; ?></div>
            <br>

            <div class="form-input">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="error"><?php echo $dobErr; ?></div>
            <br>

            <div class="form-input">
                <label>Gender:</label>
                <div class="gender">
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                </div>

            </div>
            <div class="error"><?php echo $genderErr; ?></div>
            <br>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="error"><?php echo $passwordErr; ?></div>
            <br>

            <div class=buttons>
                <div class="submit-button">
                    <button type="submit">Submit</button>
                </div>

                <div class="show-button">
                    <a href="userDetails.php">Show Users</a>
                </div>
            </div>

        </form>
    </div><br>

</body>

</html>
