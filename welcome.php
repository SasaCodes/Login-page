<?php
// Start the session
session_start();

// Access session variables
if (isset($_SESSION["email"]) && isset($_SESSION["UserPassword"])) {
    
    $email          = $_SESSION["email"];
    $UserPassword	 = $_SESSION["UserPassword"];
    
    echo "Email: $email<br>";
    echo "UserPassword	: $UserPassword<br>";
    
    // Add a link to the logout page
    echo '<a href="close.php">Logout</a>';
} else {
    echo "Session variables not set.";

    header('location: login.php');
}
?>
