<?php/*

session_start();

session_destroy();

header("Location: ActivityA_Session.php");

exit();
*/
?>

<?php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to Main Menu
header("Location: ActivityA_Session.php");
exit();

?>