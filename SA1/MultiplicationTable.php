<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Multiplication Table | Nick Shane S Lasic</title>
    <style>
        /* Simple reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', 'Lucida Sans Typewriter', monospace;
            background: #f0ebe0;
            min-height: 100vh;
            padding: 30px 20px;
        }

        /* Simple card container - matches main page */
        .main-card {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            background: #fffef7;
            border: 1px solid #ccc5b5;
            padding: 2rem 1.8rem;
            text-align: center;
            box-shadow: 5px 5px 0 rgba(0,0,0,0.05);
        }

        /* Title styling */
        h1 {
            font-size: 24px;
            font-weight: normal;
            color: #3a2c1f;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .desc {
            color: #2a4b74;
            font-weight: 500;
            font-size: 13px;
            margin: 15px 0 25px 0;
            background: #f7f3ea;
            display: inline-block;
            padding: 4px 12px;
        }

        /* Back button */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 8px 20px;
            font-family: 'Courier New', monospace;
            font-size: 13px;
            font-weight: bold;
            color: #3a2c1f;
            text-decoration: none;
            margin-bottom: 25px;
            transition: all 0.2s ease;
            box-shadow: 2px 2px 0 rgba(100, 70, 40, 0.15);
        }

        .back-btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.2);
        }

        /* Table wrapper for scroll on small screens */
        .table-wrapper {
            overflow-x: auto;
            margin: 20px 0;
        }

        /* Simple table style */
        table {
            border-collapse: collapse;
            margin: 0 auto;
            font-family: 'Courier New', monospace;
            font-size: 13px;
        }

        th, td {
            border: 1px solid #c9bc9e;
            padding: 8px 12px;
            text-align: center;
        }

        /* Red cells */
        .red {
            background-color: #e87c5e;
            color: white;
        }

        /* Blue cells */
        .blue {
            background-color: #5f9dc9;
            color: white;
        }

        /* Corner cell */
        .corner {
            background-color: #8b7355;
            color: white;
            font-weight: bold;
        }


        /* Footer */
        .footer {
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #e2d8c8;
            font-size: 11px;
            color: #8b775a;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .main-card {
                padding: 1.2rem;
            }
            th, td {
                padding: 5px 8px;
                font-size: 11px;
            }
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>✖ Multiplication Table</h1>
    <div class="desc">Applications Development and Emerging Technologies</div>

    <div class="table-wrapper">
        <?php
        $size = 10;
        $counter = 1;
        
        echo "<table>\n";
        
        // Header row
        echo "<tr>";
        echo "<th class='corner'>×</th>";
        for($col = 1; $col <= $size; $col++) {
            $class = ($counter % 2 == 0) ? "blue" : "red";
            echo "<th class='$class'>" . $col . "</th>";
            $counter++;
        }
        echo "</tr>\n";
        
        // Data rows
        for($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            
            // Row header
            $class = ($counter % 2 == 0) ? "blue" : "red";
            echo "<th class='$class'>" . $row . "</th>";
            $counter++;
            
            // Data cells
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
    <br>
    <a href="Index.php" class="back-btn">← Back to Main Page</a>
    
    
    <div class="footer">
        © 2026 Nick Shane S Lasic | 202410346
    </div>
</div>

</body>
</html>