<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Username validation
        ($username === "") ? $errorMsg1 = "Username is required." : $errorMsg1 = '';

        // Password validation
        ($password === "") ? $errorMsg2 = "Password is required." : $errorMsg2 = '';
    }
    ?>
    <div class="form-container">
        <h3>Login Form</h3>
        <form action="3_form.php" method="post">
            <div class="form-input">
                <label for="Username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Please enter username">
            </div><span><?php echo $errorMsg1; ?></span><br><br>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Please enter Password">
            </div><span><?php echo $errorMsg2; ?></span><br><br>

            <div class="submit-button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

</body>

</html>