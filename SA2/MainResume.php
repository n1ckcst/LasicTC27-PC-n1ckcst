<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resume · Nick Shane S Lasic</title>
    <link rel="stylesheet" href="MainResumeStyle.css">
</head>
<body>
<div class="resume-card">
    <a href="Index.php" class="back-btn">← BACK TO MENU</a>

    <div class="name-header">
        <h1>NICK SHANE S. LASIC</h1>
        <div class="tagline">IT Student | Web Developer | Tech Enthusiast</div>
    </div>


    <div class="top-row">
        <div class="photo-column">
            <img class="profile-photo" src="https://img.freepik.com/premium-vector/man-icon_1076610-77411.jpg" alt="Profile Photo">
            <div class="photo-caption">Nick Shane S. Lasic</div>
        </div>
        <?php include('PersonalInformation.php'); ?>
    </div>

 
    <?php
    include('CareerObjective.php');
    include('EducationalAttainment.php');
    include('Skills.php');
    include('Affiliations.php');
    include('WorkExperience.php');
    ?>

    <div class="footer">
        include() & require() | 202410346
    </div>
</div>
</body>
</html>