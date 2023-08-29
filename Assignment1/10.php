<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select gender by switch-case</title>
</head>

<body>
    <h2>
        <?php
        $gender = "Male";
        $gender = strtolower($gender);
        switch ($gender) {
            case "male":
                echo "Gender selected is - Male";
                break;
            case "female":
                echo "Gender selected is - Female";
                break;
            default:
                echo "Select Gender";
        }
        ?>
    </h2>
</body>

</html>