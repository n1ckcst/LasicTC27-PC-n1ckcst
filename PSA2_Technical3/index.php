<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Combinations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Two-Digit Combinations (00 to 99)</h2>
        <div class="output">
            <?php
            
            for ($i = 0; $i <= 9; $i++) {
                for ($j = 0; $j <= 9; $j++) {
                    echo $i . $j;
                    if ($i == 9 && $j == 9) {
                        echo "";
                    } else {
                        echo ", ";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>