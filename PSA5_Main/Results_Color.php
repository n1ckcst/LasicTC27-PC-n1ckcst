<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorite Colors - Result</title>
    <link rel="stylesheet" href="IndexStyle.css">
    <style>
        .color-grid {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin: 20px 0;
        }
        .color-row {
            display: flex;
            align-items: center;
            background: #f7f3ea;
            padding: 12px 15px;
            border-left: 4px solid #b8a88a;
            transition: all 0.2s ease;
        }
        .color-row:hover {
            background: #efe6d8;
            transform: translateX(5px);
        }
        .color-label {
            width: 100px;
            font-weight: bold;
            color: #3a2c1f;
        }
        .color-value {
            flex: 1;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .color-swatch {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #b8a88a;
            margin-left: 15px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .submit-btn {
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 10px 20px;
            font-family: 'Courier New', monospace;
            font-size: 16px;
            font-weight: bold;
            color: #3a2c1f;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 2px 2px 0 rgba(100, 70, 40, 0.15);
            text-decoration: none;
            display: inline-block;
        }
        .submit-btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.2);
        }
        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>🎨 My Favorite Colors</h1>
    <div class="subtitle">Stored in session - from previous page</div>

    <?php if(isset($_SESSION['color1'])): ?>
        <div class="color-grid">
            <div class="color-row">
                <div class="color-label">Color 1:</div>
                <div class="color-value" style="color: <?= $_SESSION['color1'] ?>;">
                    <?= $_SESSION['color1'] ?>
                </div>
                <div class="color-swatch" style="background: <?= $_SESSION['color1'] ?>;"></div>
            </div>
            
            <div class="color-row">
                <div class="color-label">Color 2:</div>
                <div class="color-value" style="color: <?= $_SESSION['color2'] ?>;">
                    <?= $_SESSION['color2'] ?>
                </div>
                <div class="color-swatch" style="background: <?= $_SESSION['color2'] ?>;"></div>
            </div>
            
            <div class="color-row">
                <div class="color-label">Color 3:</div>
                <div class="color-value" style="color: <?= $_SESSION['color3'] ?>;">
                    <?= $_SESSION['color3'] ?>
                </div>
                <div class="color-swatch" style="background: <?= $_SESSION['color3'] ?>;"></div>
            </div>
            
            <div class="color-row">
                <div class="color-label">Color 4:</div>
                <div class="color-value" style="color: <?= $_SESSION['color4'] ?>;">
                    <?= $_SESSION['color4'] ?>
                </div>
                <div class="color-swatch" style="background: <?= $_SESSION['color4'] ?>;"></div>
            </div>
            
            <div class="color-row">
                <div class="color-label">Color 5:</div>
                <div class="color-value" style="color: <?= $_SESSION['color5'] ?>;">
                    <?= $_SESSION['color5'] ?>
                </div>
                <div class="color-swatch" style="background: <?= $_SESSION['color5'] ?>;"></div>
            </div>
        </div>
        
        
        <div class="button-group">
            <a href="favorite_colors.php" class="submit-btn">
                Enter New Colors
            </a>
            <a href="index.php" class="submit-btn">
                Back to Main Page
            </a>
        </div>
        
    <?php else: ?>
        <div class="desc" style="margin: 30px 0; text-align:center;">No colors found. Please go back and submit your favorite colors first.</div>
        <div style="text-align: center;">
            <a href="favorite_colors.php" class="submit-btn">
                Enter Colors
            </a>
        </div>
    <?php endif; ?>

</div>

</body>
</html>