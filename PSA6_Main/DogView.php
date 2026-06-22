<?php
require('database.php');
require('svg-icons.php');


$sql = "SELECT * FROM dogs ORDER BY name";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>View All Dogs</title>
    <link rel="stylesheet" href="css/DogView.css">
</head>
<body>
<div class="main-card">

    <div class="top-nav">
        <a href="index.php" class="back-btn">← Back to Menu</a>
    </div>

    <span class="logo-icon">
        <?php echo $dog_logo; ?>
    </span>
    <h1>ASOsasyon Records</h1>
    <div class="subtitle">— All Registered Member of ASOsasyon —</div>
    
    <div class="header-section">
        <div class="stats">
            <?php
            $count = mysqli_num_rows($result);
            echo $stats_icon; 
            echo " Total: <strong>" . $count . "</strong> dog(s)";
            ?>
        </div>
        <a href="DogRegister.php" class="add-btn">
            <?php echo $plus_icon; ?>
            Add New Dog
            <span class="arrow">→</span>
        </a>
    </div>

    <div class="divider-line"></div>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Color</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['breed']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo number_format($row['height'], 2); ?></td>
                        <td><?php echo number_format($row['weight'], 2); ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <?php else: // else para sa feedback sa user pag empty ang database?> 
        <div class="empty-message">
            <p>No dogs registered yet.</p>
            <p><a href="DogRegister.php">Register your first dog now!</a></p>
        </div>
    <?php endif; ?>

    <div class="divider-line"></div>

    <div class="footer">
        © <?php echo date('Y'); ?> • By Nick Shane S Lasic
    </div>
</div>
</body>
</html>