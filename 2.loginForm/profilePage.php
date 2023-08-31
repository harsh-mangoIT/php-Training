<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $name = '';
    $email = '';
    $dob = '';
    $gender = '';

    // Create connection
    $conn = new mysqli("localhost", "root", "root", "myform_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['email'])) {
        $email = $_GET['email'];

        // Fetch user details from the database based on the user ID
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            echo "<h2>Welcome, {$user['firstname']}!</h2>";
            $name = $user['firstname'] . " " . $user['lastname'];
            $email = $user['email'];
            $dob = $user['dob'];
            $gender = $user['gender'];
            // Display other user details here
        } else {
            echo "User not found.";
        }
    } else {
        echo "Invalid request.";
    }
    ?>

    <div class="display-container">
        <h2>Your Profile Details:</h2><br>
        <label for="name">Name:
            <?php echo $name; ?>
        </label><br><br>
        <label for="name">Email:
            <?php echo $email; ?>
        </label><br><br>
        <label for="name">Date of Birth:
            <?php echo $dob; ?>
        </label><br><br>
        <label for="name">Gender:
            <?php echo $gender; ?>
        </label>
    </div>
</body>

</html>
