<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    <div class="display-container">
        <h3>Registration Details:</h3><br>
        <label>Name:</label>
        <?php echo $_POST['name'] . "<br><br>"; ?>
        <label>Email:</label>
        <?php echo $_POST['email'] . "<br><br>"; ?>
        <label>Password:</label>
        <?php echo $_POST['password'] . "<br><br>"; ?>
        <label>Date of Birth:</label>
        <?php echo $_POST['dob'] . "<br><br>"; ?>
        <label>Gender:</label>
        <?php echo $_POST['gender'] . "<br><br>"; ?>
        <label>Contact no:</label>
        <?php echo $_POST['phone']; ?>
    </div>
</body>

</html>