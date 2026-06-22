<?php
require('Database.php');

$message = "";
$type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog <strong>'$name'</strong> has been registered successfully!";
        $type = "success";
    } else {
        $message = "Error: " . mysqli_error($conn);
        $type = "danger";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Dog Registration</title>
    <link rel="stylesheet" href="css/DogRegister.css">
</head>
<body>
<div class="main-card">
    <span class="logo-icon">
        <?php require('svg-icons.php'); echo $dog_logo; ?>
    </span>
    <h1>Register New Dog</h1>
    <div class="desc">All fields are required</div>

    <?php if ($message): ?>
        <div class="message <?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endif; ?>

    <form action="DogRegister.php" method="post">
        <div class="form-group">
            <label for="name">Dog Name</label>
            <input type="text" name="name" id="name" placeholder="e.g., Buddy" required>
        </div>
        
        <div class="form-group">
            <label for="breed">Breed</label>
            <input type="text" name="breed" id="breed" placeholder="e.g., Golden Retriever" required>
        </div>
        
        <div class="form-group">
            <label for="age">Age (years)</label>
            <input type="number" name="age" id="age" placeholder="e.g., 3" required min="0">
        </div>
        
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="e.g., 123 Main St, City" required>
        </div>
        
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" name="color" id="color" placeholder="e.g., Golden" required>
        </div>
        
        <div class="form-group">
            <label for="height">Height (cm)</label>
            <input type="number" step="0.01" name="height" id="height" placeholder="e.g., 60.5" required>
        </div>
        
        <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input type="number" step="0.01" name="weight" id="weight" placeholder="e.g., 30.2" required>
        </div>

        <div class="button-group">
            <a href="Index.php" class="project-btn back-btn">
                <span>← Back</span>
            </a>
            <button type="submit" class="project-btn save-btn">
    <span>
        <?php echo $save_icon; ?>
        Save →
    </span>
</button>
        </div>
    </form>

    <div class="footer">© <?= date('Y'); ?> • By Nick Shane S Lasic</div>
</div>
</body>
</html>