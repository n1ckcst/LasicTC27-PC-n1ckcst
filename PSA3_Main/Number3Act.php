<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function · Triple Parameter</title>
    <link rel="stylesheet" href="Number3ActStyle.css">
</head>
<body>
<div class="main-card">
    <div class="btn-wrapper">
        <a href="index.php" class="back-btn">
            <span>←</span> BACK TO MENU
        </a>
    </div>

    <div class="title-wrapper">
        <h1>⟡ USER DEFINED FUNCTION ⟡</h1>
        <div class="subtitle">calculate(param1, param2, param3)</div>
    </div>

    <?php
   
    function calculate($param1, $param2, $param3) {
      
        $sum = $param1 + $param2 + $param3; // sum
        
      
        $difference = $param1 - $param2 - $param3; // difference
        
        
        $product = $param1 * $param2 * $param3; // product
        $quotient = 0; // initialize quotient
        if($param2 != 0 && $param3 != 0) {
            $quotient = $param1 / $param2 / $param3;
        } else {
            $quotient = "Cannot divide by zero";
        }
        
        // Display parameter values
        echo "<div class='param-box'>";
        echo "MY PARAMETER VALUES: " . $param1 . " , " . $param2 . " , " . $param3;
        echo "</div>";
        
        // Display results in table
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
    }

    calculate(25, 13, 6); // calling the function with example values
    ?>

    <div class="footer">
        Created by Nick Shane S Lasic | 202410346
    </div>
</div>
</body>
</html>