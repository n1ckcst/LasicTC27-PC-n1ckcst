<?php

if (!isset($_COOKIE['firstname']) && 
    !isset($_COOKIE['middlename']) && 
    !isset($_COOKIE['lastname']) && 
    !isset($_COOKIE['cookie_started'])) {
    
    setcookie("firstname", "Nick Shane", time() + 10);
    setcookie("middlename", "Shane", time() + 20);
    setcookie("lastname", "Lasic", time() + 30);
    setcookie("cookie_started", time(), time() + 30);
    

    header("Location: Personal_Info_Cookies.php");
    exit();
}


$elapsed = 0;
if (isset($_COOKIE['cookie_started'])) {
    $elapsed = time() - $_COOKIE['cookie_started'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Personal Info - Cookies</title>
    <link rel="stylesheet" href="IndexStyle.css">
    <style>
        .cookie-slot {
            background: #f7f3ea;
            border: 1px solid #b8a88a;
            padding: 20px;
            margin-bottom: 20px;
            text-align: left;
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.1);
        }
        .cookie-title {
            font-size: 20px;
            font-weight: bold;
            color: #3a2c1f;
            margin-bottom: 15px;
            border-bottom: 1px dotted #ddd0bc;
            padding-bottom: 8px;
        }
        .status-active {
            color: #2a4b74;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .status-expired {
            color: #8b3a3a;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .cookie-value {
            background: #e8dfd0;
            padding: 10px;
            font-weight: bold;
            color: #3a2c1f;
            margin: 10px 0;
            border-left: 4px solid #b8a88a;
        }
        .timer {
            font-size: 12px;
            color: #8b775a;
            margin-top: 10px;
        }
        .reset-btn {
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 10px 20px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            font-weight: bold;
            color: #3a2c1f;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        .reset-btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
        }
        .footer-card {
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #3a2c1f;
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>Personal Information with Cookies</h1>
    <div class="subtitle">First name (10s) | Middle name (20s) | Last name (30s)</div>
    <div class="desc">Cookies are set automatically when page loads</div>

    <div class="cookie-slot">
        <div class="cookie-title">FIRST NAME COOKIE</div>
        <?php
        if (isset($_COOKIE['firstname'])) {
            $remaining = 10 - $elapsed;
            if ($remaining < 0) $remaining = 0;
            echo "
                <div class='status-active'>✓ ACTIVE</div>
                <div class='cookie-value'>" . $_COOKIE['firstname'] . "</div>
                <div class='timer'>Expires in $remaining second(s)</div>
            ";
        } else {
            echo "
                <div class='status-expired'>✗ EXPIRED AFTER 10 SECONDS</div>
            ";
        }
        ?>
    </div>

    <div class="cookie-slot">
        <div class="cookie-title">MIDDLE NAME COOKIE</div>
        <?php
        if (isset($_COOKIE['middlename'])) {
            $remaining = 20 - $elapsed;
            if ($remaining < 0) $remaining = 0;
            echo "
                <div class='status-active'>✓ ACTIVE</div>
                <div class='cookie-value'>" . $_COOKIE['middlename'] . "</div>
                <div class='timer'>Expires in $remaining second(s)</div>
            ";
        } else {
            echo "
                <div class='status-expired'>✗ EXPIRED AFTER 20 SECONDS</div>
            ";
        }
        ?>
    </div>

    <div class="cookie-slot">
        <div class="cookie-title">LAST NAME COOKIE</div>
        <?php
        if (isset($_COOKIE['lastname'])) {
            $remaining = 30 - $elapsed;
            if ($remaining < 0) $remaining = 0;
            echo "
                <div class='status-active'>✓ ACTIVE</div>
                <div class='cookie-value'>" . $_COOKIE['lastname'] . "</div>
                <div class='timer'>Expires in $remaining second(s)</div>
            ";
        } else {
            echo "
                <div class='status-expired'>✗ EXPIRED AFTER 30 SECONDS</div>
            ";
        }
        ?>
    </div>

    <div class="footer-card">
        <strong>COOKIE TIMER STATUS</strong><br><br>
        First Name Cookie → 10 Seconds<br>
        Middle Name Cookie → 20 Seconds<br>
        Last Name Cookie → 30 Seconds
    </div>

    <div class="footer" style="margin-top: 25px;">
        <a href="index.php" style="color:#5a4a34;">← Back to Main Page</a>
    </div>
</div>

</body>
</html>