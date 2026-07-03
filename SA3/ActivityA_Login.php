
<?php

session_start();

$username = "";
$password = "";

// Check if cookies already exist
if(isset($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
}

if(isset($_COOKIE['password']))
{
    $password = $_COOKIE['password'];
}

// When Login button is clicked
if(isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save cookies only if Remember Me is checked
    if(isset($_POST['remember']))
    {

        setcookie("username", $username, time() + 86400);
        setcookie("password", $password, time() + 86400);

    }
    else
    {

        // Remove cookies
        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);

    }

    // Refresh page so cookies appear immediately
    header("Location: ActivityA_Login.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity A - Login Module</title>

    <link rel="stylesheet" href="css/ActivityA_Login.css">
</head>
<body>

<div class="main-card">

    <div class="logo-icon">


        <svg xmlns="http://www.w3.org/2000/svg"
             width="48"
             height="48"
             fill="none"
             viewBox="0 0 24 24"
             stroke="#5a4a34"
             stroke-width="1.7">

            <rect x="5" y="11" width="14" height="10" rx="2"/>

            <path d="M8 11V8a4 4 0 118 0v3"/>

        </svg>

    </div>

    <h1>Activity A</h1>


    <form method="POST">

        <div class="form-group">

            <label>Username</label>

            <input
                type="text"
                name="username"
                value="<?php echo $username; ?>"
                required>

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                value="<?php echo $password; ?>"
                required>

        </div>

        <div class="checkbox-group">

            <input
                type="checkbox"
                name="remember"
                id="remember">

            <label for="remember">
                Remember Me
            </label>

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

</div>

</body>
</html>