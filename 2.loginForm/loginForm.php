<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    function authenticateUser($email, $password, $conn)
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            return $user;
        }

        return false;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Create connection
        $conn = new mysqli("localhost", "root", "root", "myform_db");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Email validation
        ($email === "") ? $error1 = "Email is required." : $error1 = '';

        // Password validation
        ($password === "") ? $error2 = "Password is required." : $error2 = '';

        if ($email && $password) {
            $user = authenticateUser($email, $password, $conn);
            if ($user) {
                // Redirect to the profile page
                header('Location: profilePage.php?email=' . $user['email']);
                exit;
            } else {
                $error = "Invalid email or password entered.";
            }
        }
    }
    ?>

    <div class="form-container">
        <h3>Login Form</h3><br>

        <form action="loginForm.php" method="post">
            <div class="form-input">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Please enter Email">
            </div>
            <div>
                <div class="error">
                    <?php if (isset($error1)) {
                        echo $error1;
                    }
                    ?>
                </div>
            </div><br>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Please enter Password">
            </div>
            <div>
                <div class="error">
                    <?php if (isset($error2)) {
                        echo $error2;
                    }
                    ?>
                </div>
                <div class="error">
                    <?php if (isset($error)) {
                        echo $error;
                    } ?>
                </div>
            </div><br>

            <div class="submit-button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

</body>

</html>
