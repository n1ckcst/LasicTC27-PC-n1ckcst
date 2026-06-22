<?php require('svg-icons.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>ASOsasyon | Main Menu</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="main-card">
    <span class="logo-icon">
        <?= $dog_logo; ?>
    </span>
    <h1>ASOsasyon</h1>
    
    <div class="desc">Pre-Summative Assessment 6</div>
    
    <div class="divider-line"></div>

    <div class="button-group">
        <a href="DogRegister.php" class="project-btn register-btn">
            <span>
                <?= $register_icon; ?>
                Register New Dog
            </span>
            <span>→</span>
        </a>
        <a href="DogView.php" class="project-btn view-btn">
            <span>
                <?= $view_icon; ?>
               ASOsasyon Records
            </span>
            <span>→</span>
        </a>
    </div>

    <div class="divider-line"></div>

    <div class="footer">
        © <?= date('Y'); ?> <span class="student-id">Nick Shane S. Lasic</span> | 202410346<br>
        Applications Development and Emerging Technologies
    </div>
</div>

</body>
</html>