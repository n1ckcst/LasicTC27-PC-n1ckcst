<?php
if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    
    setcookie("firstname", $firstname, time()+10);
    setcookie("middlename", $middlename, time()+20);
    setcookie("lastname", $lastname, time()+30);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Cookies - Personal Info</title>
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
    <h1>Personal Information with Cookies</h1>
    <div class="subtitle">First Name (10s) | Middle Name (20s) | Last Name (30s)</div>

    <form method="post">
        <div style="text-align: left; margin: 20px 0;">
            <label style="display:block; margin:8px 0 2px;">First Name:</label>
            <input type="text" name="firstname" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Middle Name:</label>
            <input type="text" name="middlename" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Last Name:</label>
            <input type="text" name="lastname" required style="width:100%; padding:8px; font-family:inherit;">
        </div>
        
        <div style="text-align: center;">
            <button type="submit" name="submit" class="submit-btn">
                Set Cookies
            </button>
        </div>
    </form>

    <div style="margin-top: 30px; padding-top: 15px; border-top: 1px solid #ddd0bc; text-align: left;">
        <h3 style="font-size: 18px; margin-bottom: 10px;">Cookie Values:</h3>
        
        <p><strong>First Name:</strong> 
            <?php 
            if(isset($_COOKIE['firstname'])) {
                echo $_COOKIE['firstname'];
            } else {
                echo "expired";
            }
            ?>
        </p>
        <p><strong>Middle Name:</strong> 
            <?php 
            if(isset($_COOKIE['middlename'])) {
                echo $_COOKIE['middlename'];
            } else {
                echo "expired";
            }
            ?>
        </p>
        <p><strong>Last Name:</strong> 
            <?php 
            if(isset($_COOKIE['lastname'])) {
                echo $_COOKIE['lastname'];
            } else {
                echo "expired";
            }
            ?>
        </p>
        
        <div class="note" style="font-size:12px; color:#8b775a; margin-top:15px; background:#f7f3ea; padding:10px;">
            <strong>Cookie Expiration:</strong><br>
            - After 10 seconds: First name shows "expired"<br>
            - After 20 seconds: Middle name shows "expired"<br>
            - After 30 seconds: Last name shows "expired"<br>
            - Click submit, then wait and refresh to see "expired"
        </div>
    </div>

    <div class="footer" style="margin-top: 25px;">
        <a href="index.php" style="color:#5a4a34;">← Back to Main Page</a>
    </div>
</div>

</body>
</html>