<?php
$errors = array();
$firstname = $middlename = $lastname = $dob = $address = "";

if(isset($_GET['submit'])) {
    $firstname = $_GET['firstname'];
    $middlename = $_GET['middlename'];
    $lastname = $_GET['lastname'];
    $dob = $_GET['dob'];
    $address = $_GET['address'];
    

    if(!preg_match("/^[A-Za-z\s]+$/", $firstname)) {
        $errors[] = "First name should only contain letters and spaces";
    }
    

    if(!preg_match("/^[A-Za-z\s]+$/", $middlename)) {
        $errors[] = "Middle name should only contain letters and spaces";
    }
    
    
    if(!preg_match("/^[A-Za-z\s]+$/", $lastname)) {
        $errors[] = "Last name should only contain letters and spaces";
    }
    
   
    if(!preg_match("/^[A-Za-z0-9\s]+$/", $dob)) {
        $errors[] = "Date of birth should only contain letters, numbers, and spaces (no punctuation)";
    }
    
   
    if(!preg_match("/^[A-Za-z\s]+$/", $address)) {
        $errors[] = "Address should only contain letters and spaces";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Personal Info – GET</title>
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
        .error-box {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            text-align: left;
            border-radius: 0px;
        }
        .error-box p {
            margin: 5px 0;
            font-size: 13px;
        }
        .success-data {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #ddd0bc;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>Personal Information</h1>
    <div class="subtitle">Using $_GET method</div>
    

    <?php if(isset($_GET['submit']) && !empty($errors)): ?>
        <div class="error-box">
            <?php foreach($errors as $error): ?>
                <p>❌ <?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="get">
        <div style="text-align: left; margin: 20px 0;">
            <label style="display:block; margin:8px 0 2px;">First Name:</label>
            <input type="text" name="firstname" value="<?= $firstname ?>" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Middle Name:</label>
            <input type="text" name="middlename" value="<?= $middlename ?>" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Last Name:</label>
            <input type="text" name="lastname" value="<?= $lastname ?>" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Date of Birth:</label>
            <input type="text" name="dob" value="<?= $dob ?>" placeholder="May 1 1985" required style="width:100%; padding:8px; font-family:inherit;">

            <label style="display:block; margin:8px 0 2px;">Address:</label>
            <input type="text" name="address" value="<?= $address ?>" required style="width:100%; padding:8px; font-family:inherit;">
        </div>
        
        <div style="text-align: center;">
            <button type="submit" name="submit" class="submit-btn">
                Submit Using $_GET
            </button>
        </div>
    </form>

    <?php if(isset($_GET['submit']) && empty($errors) && !empty($firstname)): ?>
        <div class="success-data">
            <h3 style="font-size: 18px; margin-bottom: 10px;">Submitted Data (GET):</h3>
            <p><strong>First Name:</strong> <?= $firstname ?></p>
            <p><strong>Middle Name:</strong> <?= $middlename ?></p>
            <p><strong>Last Name:</strong> <?= $lastname ?></p>
            <p><strong>Date of Birth:</strong> <?= $dob ?></p>
            <p><strong>Address:</strong> <?= $address ?></p>
        </div>
    <?php endif; ?>

    <div class="footer" style="margin-top: 25px;">
        <a href="index.php" style="color:#5a4a34;">← Back to Main Page</a>
    </div>
</div>

</body>
</html>