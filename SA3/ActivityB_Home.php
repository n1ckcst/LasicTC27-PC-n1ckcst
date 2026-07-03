<?php

session_start();

require_once("Database.php");

if(!isset($_SESSION['user_id']))
{
    header("Location: ActivityB_Login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM table_users WHERE ID='$user_id'";

$result = mysqli_query($connection, $sql);

$user = mysqli_fetch_assoc($result);

$message = "";

if(isset($_POST['updatePassword']))
{

    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if($currentPassword != $user['Password'])
    {

        $message = "<div class='message error'>
                        Current password is not the same with the old password.
                    </div>";

    }
    else if($newPassword != $confirmPassword)
    {

        $message = "<div class='message error'>
                        New password and Re-Enter new password should be the same.
                    </div>";

    }
    else
    {

        $update = "UPDATE table_users
                   SET Password='$newPassword'
                   WHERE ID='$user_id'";

        if(mysqli_query($connection, $update))
        {

            $message = "<div class='message success'>
                            Password updated successfully.
                        </div>";

            $sql = "SELECT * FROM table_users WHERE ID='$user_id'";
            $result = mysqli_query($connection, $sql);
            $user = mysqli_fetch_assoc($result);

        }
        else
        {

            $message = "<div class='message error'>
                            Failed to update password.
                        </div>";

        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Activity B - Home</title>

<link rel="stylesheet" href="css/ActivityB_Home.css">

</head>

<body>

<div class="main-card">
<div class="top-nav">
 <a href="ActivityB_Logout.php" class="project-btn back-btn">

        Logout

    </a>

</div>
    <div class="logo-icon">

        <!-- User SVG -->

        <svg xmlns="http://www.w3.org/2000/svg"
             width="48"
             height="48"
             fill="none"
             viewBox="0 0 24 24"
             stroke="#5a4a34"
             stroke-width="1.7">

            <circle cx="12" cy="8" r="4"/>

            <path d="M4 20c1.5-3 4.5-5 8-5s6.5 2 8 5"/>

        </svg>

    </div>

    <h1>Welcome!</h1>

    <p class="subtitle">

        Hello,

        <strong>

            <?php
                echo $user['FirstName'] . " " . $user['LastName'];
            ?>

        </strong>

    </p>

    <div class="result-card">

        <h2>Student Information</h2>

        <p><strong>First Name:</strong> <?php echo $user['FirstName']; ?></p>

        <p><strong>Middle Name:</strong> <?php echo $user['MiddleName']; ?></p>

        <p><strong>Last Name:</strong> <?php echo $user['LastName']; ?></p>

        <p><strong>Birthday:</strong> <?php echo $user['Birthday']; ?></p>

        <p><strong>Contact Number:</strong> <?php echo $user['ContactNumber']; ?></p>

        <p><strong>Username:</strong> <?php echo $user['Username']; ?></p>

        <p><strong>Email:</strong> <?php echo $user['Email']; ?></p>

    </div>
<?php echo $message; ?>

<div class="result-card">

    <h2>Reset Password</h2>

    <form method="POST">

        <div class="form-group">

            <label>Current Password</label>

            <input
                type="password"
                name="currentPassword"
                required>

        </div>

        <div class="form-group">

            <label>New Password</label>

            <input
                type="password"
                name="newPassword"
                required>

        </div>

        <div class="form-group">

            <label>Re-Enter New Password</label>

            <input
                type="password"
                name="confirmPassword"
                required>

        </div>

        <div class="button-group">

            <button
                type="submit"
                name="updatePassword"
                class="project-btn save-btn">

                Update Password

            </button>

        </div>

    </form>



</body>
</html>