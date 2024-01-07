<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

echo "Session has been closed. <a href='login.php'>Go back to login page</a>";
?>
