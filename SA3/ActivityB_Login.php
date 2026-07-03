<?php

session_start();

require_once("Database.php");

$message = "";


if(isset($_SESSION['user_id']))
{
    header("Location: ActivityB_Home.php");
    exit();
}

if(isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM table_users
            WHERE Username='$username'
            AND Password='$password'";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) == 1)
    {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['ID'];

        header("Location: ActivityB_Home.php");
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

<?php

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

<title>Activity B - Login</title>

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

            <rect x="5" y="11" width="14" height="10" rx="2"></rect>

            <path d="M8 11V8a4 4 0 118 0v3"></path>

        </svg>

    </div>

    <h1>Activity B</h1>


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

                Back to Main Menu

            </a>

        </div>

    </form>

    <div class="footer">

        Database Login

    </div>

</div>

</body>
</html>