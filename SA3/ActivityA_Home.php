<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: ActivityA_Session.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Activity A Home</title>

<link rel="stylesheet" href="css/ActivityA_Home.css">

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

    <h1>Welcome!</h1>

    <p class="subtitle">

        Hello,

        <strong>

            <?php echo $_SESSION['username']; ?>

        </strong>

    </p>
    <br>
    <p class="desc">

        You are successfully logged in using PHP Sessions.

    </p>

    <div class="button-group">

        <a
            href="ActivityA_Logout.php"
            class="project-btn save-btn">

            Logout

        </a>

    </div>

</div>

</body>
</html>