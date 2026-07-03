<?php session_start();

if(isset($_SESSION['username']))
{
    header("Location: ActivityA_Home.php");
    exit();
}?>

<?php

$firstName = "";
$middleName = "";
$lastName = "";
$username = "";
$password = "";
$confirmPassword = "";
$birthday = "";
$email = "";
$contactNumber = "";

$message = "";
$result = "";

if(isset($_POST['submit']))
{

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];

    if($password != $confirmPassword)
    {

        $message = "<div class='message error'>
                        Password and Confirm Password are not the same.
                    </div>";

    }
    else
    {

        $result = "

        <div class='result-card'>

            <h2>Submitted Information</h2>

            <p><strong>Full Name:</strong> $firstName $middleName $lastName</p>

            <p><strong>Username:</strong> $username</p>

            <p><strong>Password:</strong> $password</p>

            <p><strong>Birthday:</strong> $birthday</p>

            <p><strong>Email:</strong> $email</p>

            <p><strong>Contact Number:</strong> $contactNumber</p>

        </div>

        ";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Activity A - Registration Module</title>

<link rel="stylesheet" href="css/ActivityA_Registration.css">

</head>

<body>

<div class="main-card">

    <div class="logo-icon">

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke="#5a4a34"
             stroke-width="1.7">

            <circle cx="12" cy="8" r="4"/>

            <path d="M4 20c1.5-3 4.5-5 8-5s6.5 2 8 5"/>

        </svg>

    </div>

    <h1>Activity A</h1>

    <?php echo $message; ?>

    <form method="POST" action="">

        <div class="form-group">

            <label>First Name</label>

            <input type="text" name="firstName" required>

        </div>

        <div class="form-group">

            <label>Middle Name</label>

            <input type="text" name="middleName">

        </div>

        <div class="form-group">

            <label>Last Name</label>

            <input type="text" name="lastName" required>

        </div>

        <div class="form-group">

            <label>Username</label>

            <input type="text" name="username" required>

        </div>

        <div class="form-group">

            <label>Password</label>

            <input type="password" name="password" required>

        </div>

        <div class="form-group">

            <label>Confirm Password</label>

            <input type="password" name="confirmPassword" required>

        </div>

        <div class="form-group">

            <label>Birthday</label>

            <input type="date" name="birthday" required>

        </div>

        <div class="form-group">

            <label>Email</label>

            <input type="email" name="email" required>

        </div>

        <div class="form-group">

            <label>Contact Number</label>

            <input type="text" name="contactNumber" required>

        </div>

        <div class="button-group">

            <button
                type="submit"
                name="submit"
                class="project-btn save-btn">

                Submit

            </button>

            <a href="Index.php"
               class="project-btn back-btn">

                Back

            </a>

        </div>

    </form>

    <?php echo $result; ?>

</div>

</body>

</html>