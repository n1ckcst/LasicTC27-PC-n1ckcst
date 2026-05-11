<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | Nick Shane S Lasic</title>
    <link rel="stylesheet" href="StudentRegistrationFormStyle.css">
</head>
<body>
<div class="main-card">
    <div class="title-wrapper">
        <h1>Student Registration Form</h1>
        <div class="subtitle">Fill out the form below</div>
    </div>
    <a href="index.php" class="back-btn">← Back to Main Page</a>

<?php

$submitted = false;
$first_name = $last_name = $middle_name = $dob = $gender = $age = '';
$address = $city = $province = $postal = '';
$prev_school = $prev_school_address = $prev_grade = $transfer_reason = '';
$guardian_name = $guardian_phone = $guardian_email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submitted = true;
    

    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $middle_name = trim($_POST['middle_name'] ?? '');
    $dob = trim($_POST['dob'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    
    $address = trim($_POST['address'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $province = trim($_POST['province'] ?? '');
    $postal = trim($_POST['postal'] ?? '');
    
    $prev_school = trim($_POST['prev_school'] ?? '');
    $prev_school_address = trim($_POST['prev_school_address'] ?? '');
    $prev_grade = trim($_POST['prev_grade'] ?? '');
    $transfer_reason = trim($_POST['transfer_reason'] ?? '');
    
    $guardian_name = trim($_POST['guardian_name'] ?? '');
    $guardian_phone = trim($_POST['guardian_phone'] ?? '');
    $guardian_email = trim($_POST['guardian_email'] ?? '');
    

    if (!empty($dob)) {
        $birth = new DateTime($dob);
        $today = new DateTime();
        $age = $today->diff($birth)->y;
    }
    
  
    $full_name = ucwords(strtolower($first_name)) . ' ' . 
                 ucwords(strtolower($middle_name)) . ' ' . 
                 ucwords(strtolower($last_name));
    $full_name = trim(preg_replace('/\s+/', ' ', $full_name));
    
    // Format full address
    $full_address = $address;
    if (!empty($city)) $full_address .= ', ' . $city;
    if (!empty($province)) $full_address .= ', ' . $province;
    if (!empty($postal)) $full_address .= ' ' . $postal;
    $full_address = trim($full_address, ', ');
}
?>

<?php if ($submitted): ?>

    <div class="output-area">
        <h3 style="margin-bottom:12px;">✓ Registration Successful!</h3>
        <div class="output-line"><span class="output-label">Full Name:</span> <?php echo !empty($full_name) ? $full_name : '—'; ?></div>
        <div class="output-line"><span class="output-label">Date of Birth:</span> <?php echo !empty($dob) ? $dob : '—'; ?></div>
        <div class="output-line"><span class="output-label">Age:</span> <?php echo !empty($age) ? $age . ' years old' : '—'; ?></div>
        <div class="output-line"><span class="output-label">Gender:</span> <?php echo $gender == 'male' ? 'Male' : ($gender == 'female' ? 'Female' : '—'); ?></div>
        <div class="output-line"><span class="output-label">Address:</span> <?php echo !empty($full_address) ? $full_address : '—'; ?></div>
        <div class="output-line"><span class="output-label">Previous School:</span> <?php echo !empty($prev_school) ? $prev_school : '—'; ?></div>
        <div class="output-line"><span class="output-label">Previous School Address:</span> <?php echo !empty($prev_school_address) ? $prev_school_address : '—'; ?></div>
        <div class="output-line"><span class="output-label">Grade at Previous School:</span> <?php echo !empty($prev_grade) ? $prev_grade : '—'; ?></div>
        <div class="output-line"><span class="output-label">Reason for Transfer:</span> <?php echo !empty($transfer_reason) ? $transfer_reason : '—'; ?></div>
        <div class="output-line"><span class="output-label">Guardian Name:</span> <?php echo !empty($guardian_name) ? ucwords(strtolower($guardian_name)) : '—'; ?></div>
        <div class="output-line"><span class="output-label">Guardian Phone:</span> <?php echo !empty($guardian_phone) ? $guardian_phone : '—'; ?></div>
        <div class="output-line"><span class="output-label">Guardian Email:</span> <?php echo !empty($guardian_email) ? $guardian_email : '—'; ?></div>
    </div>
    <div class="action-buttons">
        <a href="StudentRegistrationForm.php" class="btn" style="text-color:#3a2c1f;">Register New Student</a>
        <a href="index.php" class="btn" style="text-color:#3a2c1f;">Home</a>
    </div>
<?php else: ?>

    <form method="post">
    
        <div class="form-section">
            <div class="section-title">Student Information</div>
            <div class="form-row">
                <label>First Name:</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="form-row">
                <label>Last Name:</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="form-row">
                <label>Middle Name:</label>
                <input type="text" name="middle_name">
            </div>
            <div class="form-row">
                <label>Date of Birth:</label>
                <input type="date" name="dob">
            </div>
            <div class="form-row">
                <label>Gender:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
            </div>
        </div>
        
   
        <div class="form-section">
            <div class="section-title">Current Address</div>
            <div class="form-row">
                <label>Street Address:</label>
                <input type="text" name="address">
            </div>
            <div class="form-row">
                <label>City:</label>
                <input type="text" name="city">
            </div>
            <div class="form-row">
                <label>Province:</label>
                <input type="text" name="province">
            </div>
            <div class="form-row">
                <label>Postal Code:</label>
                <input type="text" name="postal">
            </div>
        </div>
        
  
        <div class="form-section">
            <div class="section-title">Educational Background</div>
            <div class="form-row">
                <label>Previous School Name:</label>
                <input type="text" name="prev_school">
            </div>
            <div class="form-row">
                <label>Previous School Address:</label>
                <input type="text" name="prev_school_address">
            </div>
            <div class="form-row">
                <label>Grade Completed:</label>
                <input type="text" name="prev_grade">
            </div>
            <div class="form-row">
                <label>Reason for Transfer:</label>
                <textarea name="transfer_reason" rows="2" style="flex:1;"></textarea>
            </div>
        </div>
        
   
        <div class="form-section">
            <div class="section-title">Guardian Information</div>
            <div class="form-row">
                <label>Guardian Full Name:</label>
                <input type="text" name="guardian_name">
            </div>
            <div class="form-row">
                <label>Phone Number:</label>
                <input type="text" name="guardian_phone">
            </div>
            <div class="form-row">
                <label>Email Address:</label>
                <input type="email" name="guardian_email">
            </div>
        </div>
        
        <div class="action-buttons">
            <button type="submit" name="register" class="btn">Register Student</button>
            <button type="reset" class="btn">Clear Form</button>
        </div>
    </form>
    <div class="note">Fill out all required fields and click Register to see the output.</div>
<?php endif; ?>

    <div class="footer">© 2026 Nick Shane S Lasic | 202410346</div>
</div>
</body>
</html>