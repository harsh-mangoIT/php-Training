<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        .chessboard {
            border-collapse: collapse;
            border: 2px solid black;
        }

        .chessboard td {
            width: 40px;
            height: 40px;
        }

        .black {
            background-color: #000;
        }

        .white {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h1>Chessboard</h1>
    <table class="chessboard">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                if (($row + $col) % 2 == 0)
                    $cellClass = "black";
                else
                    $cellClass = "white";
                echo "<td class='$cellClass'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>