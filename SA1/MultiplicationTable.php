<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Multiplication Table | Nick Shane S Lasic</title>
    <link rel="stylesheet" href="MultiplicationTableStyle.css">
</head>
<body>
<div class="container">
    <a href="Index.php" class="btn">← Back to Main Page</a>
    
    <h1>✖ Multiplication Table</h1>
    <div class="sub">Applications Development and Emerging Technologies</div>

    <div class="table-wrap">
        <?php
        $size = 10;
        $counter = 1;
        
        echo "<table>\n";
        

        echo "<tr>";
        echo "<th class='corner'>×</th>";
        for($col = 1; $col <= $size; $col++) {
            $class = ($counter % 2 == 0) ? "blue" : "red";
            echo "<th class='$class'>" . $col . "</th>";
            $counter++;
        }
        echo "</tr>\n";

        for($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            
  
            $class = ($counter % 2 == 0) ? "blue" : "red";
            echo "<th class='$class'>" . $row . "</th>";
            $counter++;
            
            for($col = 1; $col <= $size; $col++) {
                $product = $row * $col;
                $class = ($counter % 2 == 0) ? "blue" : "red";
                echo "<td class='$class'>" . $product . "</td>";
                $counter++;
            }
            
            echo "</tr>\n";
        }
        
        echo "</table>\n";
        ?>
    </div>

    <div class="footer">
        © 2026 Nick Shane S Lasic | 202410346
    </div>
</div>
</body>
</html>