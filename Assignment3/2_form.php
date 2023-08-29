<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
    <h3>User Registration Form:</h3><br>
        <form action="home.php" method="post">
            <div class="form-input">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Please enter your name">
            </div><br>

            <div class="form-input">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email">
            </div><br>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Please provide password">
            </div><br>

            <div class="form-input">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div><br>

            <div class="form-input">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div><br>

            <div class="form-input">
                <label for="phone">Contact no:</label>
                <input type="tel" id="phone" name="phone">
            </div><br>

            <div class="submit-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div><br>
</body>
</html>