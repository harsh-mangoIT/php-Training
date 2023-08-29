<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <form action="1_form.php" method="get">
            <div class="form-input">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter your Firstname">
            </div><br>

            <div class="form-input">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" placeholder="Enter your Lastname">
            </div><br>

            <div class="form-input">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div><br>

            <div class="form-input">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email">
            </div><br>

            <div class="form-input">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="2" placeholder="Additional Comments"></textarea>
            </div><br>

            <div class="submit-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div><br>
        <div class="display-container">
            <h3>Submitted Data:</h3>
            <label>First Name:</label>
            <?php echo trim($_GET['firstName']) . "<br><br>"; ?>
            <label>Last Name:</label>
            <?php echo trim($_GET['lastName']) . "<br><br>"; ?>
            <label>Gender:</label>
            <?php echo $_GET['gender'] . "<br><br>"; ?>
            <label>Email:</label>
            <?php echo trim($_GET['email']) . "<br><br>"; ?>
            <label>Comment:</label>
            <?php echo trim($_GET['comment']) . "<br><br>"; ?>
        </div>
</body>

</html>