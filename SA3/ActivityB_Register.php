<?php

require_once("Database.php");

$message = "";

if(isset($_POST['register']))
{

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $contactNumber = $_POST['contactNumber'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password != $confirmPassword)
    {

        $message = "<div class='message error'>
                        Password and Confirm Password are not the same.
                    </div>";

    }
    else
    {

        $sql = "INSERT INTO table_users
        (FirstName, MiddleName, LastName, Birthday, ContactNumber, Username, Email, Password)

        VALUES

        ('$firstName',
        '$middleName',
        '$lastName',
        '$birthday',
        '$contactNumber',
        '$username',
        '$email',
        '$password')";

        if(mysqli_query($connection, $sql))
        {

            $message = "<div class='message success'>
                            Registration Successful!
                        </div>";

        }
        else
        {

            $message = "<div class='message error'>
                            Registration Failed!
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

<title>Activity B - Registration</title>

<link rel="stylesheet" href="css/Register.css">

</head>

<body>

<div class="main-card">

    <div class="logo-icon">

        <!-- User Plus SVG -->

        <svg xmlns="http://www.w3.org/2000/svg"
             width="48"
             height="48"
             fill="none"
             viewBox="0 0 24 24"
             stroke="#5a4a34"
             stroke-width="1.7">

            <circle cx="9" cy="8" r="4"></circle>

            <path d="M2 20c1.5-3 4.5-5 7-5s5.5 2 7 5"></path>

            <path d="M19 8v6"></path>
            <path d="M16 11h6"></path>

        </svg>

    </div>

    <h1>Activity B</h1>

    <?php echo $message; ?>

    <form method="POST">

        <fieldset>

            <legend>Personal Information</legend>

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
                <label>Birthday</label>
                <input type="date" name="birthday" required>
            </div>

            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contactNumber" required>
            </div>

        </fieldset>

        <fieldset>

            <legend>Account Information</legend>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword" required>
            </div>

        </fieldset>

        <div class="button-group">

            <button
                type="submit"
                name="register"
                class="project-btn save-btn">

                Register

            </button>

            <a
                href="Index.php"
                class="project-btn back-btn">

                Back to Main Menu

            </a>

        </div>

    </form>

    <div class="footer">
        Database Integration
    </div>

</div>

</body>
</html>