<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array · Arithmetic Operations</title>
    <link rel="stylesheet" href="Number2ActStyle.css">
</head>
<body>
<div class="main-card">
    <div class="btn-wrapper">
        <a href="index.php" class="back-btn">
            <span>←</span> BACK TO MENU
        </a>
    </div>

    <div class="title-wrapper">
        <h1>⟡ ARRAY ARITHMETIC ⟡</h1>
        <div class="subtitle">10 numbers</div>
    
    </div>

    <?php

    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo "<div class='array-box'>";
    echo "ARRAY LIST: ";
    for($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i];
        if($i < count($numbers) - 1) {
            echo " , ";
        }
    }
    echo "</div>";


    $sum = 0;
    for($i = 0; $i < count($numbers); $i++) {
        $sum = $sum + $numbers[$i];
    }


    $difference = $numbers[0];
    for($i = 1; $i < count($numbers); $i++) {
        $difference = $difference - $numbers[$i];
    }


    $product = 1;
    for($i = 0; $i < count($numbers); $i++) {
        $product = $product * $numbers[$i];
    }

    $quotient = $numbers[0];
    for($i = 1; $i < count($numbers); $i++) {
        if($numbers[$i] != 0) {
            $quotient = $quotient / $numbers[$i];
        }
    }

    echo "<table class='result-table'>";
    echo "<tr>";
    echo "<td>ADDITION</td>";
    echo "<td>" . $sum . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>SUBTRACTION</td>";
    echo "<td>" . $difference . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>MULTIPLICATION</td>";
    echo "<td>" . $product . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>DIVISION</td>";
    echo "<td>" . $quotient . "</td>";
    echo "</tr>";
    echo "</table>";
    ?>

    <div class="footer">
        Created by Nick Shane S Lasic | 202410346
    </div>
</div>
</body>
</html>