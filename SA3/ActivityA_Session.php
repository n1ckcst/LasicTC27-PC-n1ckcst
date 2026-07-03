<?php

session_start();

$message = "";

// If already logged in
if(isset($_SESSION['username']))
{
    header("Location: ActivityA_Home.php");
    exit();
}

// Static Username and Password
$correctUsername = "admin";
$correctPassword = "12345";

if(isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $correctUsername && $password == $correctPassword)
    {

        $_SESSION['username'] = $username;

        header("Location: ActivityA_Home.php");
        exit();

    }
    else
    {

        $message = "<div class='message error'>
                        Invalid Username or Password.
                    </div>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Activity A - Session Module</title>

<link rel="stylesheet" href="css/ActivityA_Session.css">

</head>
<body>

<div class="main-card">

    <div class="logo-icon">

        <!-- Lock SVG -->

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke="#5a4a34"
             stroke-width="1.7">

            <rect x="5" y="11" width="14" height="10" rx="2"/>

            <path d="M8 11V8a4 4 0 118 0v3"/>

        </svg>

    </div>

    <h1>Activity A</h1>

    <?php echo $message; ?>

    <form method="POST">

        <div class="form-group">

            <label>Username</label>

            <input
                type="text"
                name="username"
                required>

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                required>

        </div>

        <div class="button-group">

            <button
                type="submit"
                name="login"
                class="project-btn save-btn">

                Login

            </button>

            <a
                href="Index.php"
                class="project-btn back-btn">

                Back

            </a>

        </div>

    </form>

    <div class="footer">

        Username :
        <strong>admin</strong>

        <br>

        Password :
        <strong>12345</strong>

    </div>

</div>

</body>
</html>