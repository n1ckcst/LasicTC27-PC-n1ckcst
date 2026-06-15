<?php
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
    
    header("Location: Results_Color.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="IndexStyle.css">
    <style>
        .submit-btn {
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 12px 28px;
            font-family: 'Courier New', monospace;
            font-size: 16px;
            font-weight: bold;
            color: #3a2c1f;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 2px 2px 0 rgba(100, 70, 40, 0.15);
            width: 100%;
        }
        .submit-btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.2);
        }
        .submit-btn:active {
            transform: translate(1px, 1px);
            box-shadow: 1px 1px 0 rgba(100, 70, 40, 0.15);
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>Enter Your Favorite Colors</h1>
    <div class="subtitle">Session will remember them on the next page</div>
    <div class="desc">Colors are stored in $_SESSION</div>

    <form method="post">
        <div style="text-align: left; margin: 20px 0;">
            <label style="display:block; margin:8px 0 2px;">Favorite color 1:</label>
            <input type="text" name="color1" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Favorite color 2:</label>
            <input type="text" name="color2" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Favorite color 3:</label>
            <input type="text" name="color3" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Favorite color 4:</label>
            <input type="text" name="color4" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Favorite color 5:</label>
            <input type="text" name="color5" required style="width:100%; padding:8px; font-family:inherit;">
        </div>
        
        <div style="text-align: center;">
            <button type="submit" name="submit" class="submit-btn">
                Submit Colors
            </button>
        </div>
    </form>

    <div class="footer" style="margin-top: 25px;">
        <a href="index.php" style="color:#5a4a34;">← Back to Main Page</a>
    </div>
</div>

</body>
</html>