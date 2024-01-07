<?php
$servername = "localhost";
$emailsername = "root";
$passwordassword ='';
$dbname = "session";


$email = $_POST['email'];
$UserPassword = $_POST['UserPassword'];

$conn = new mysqli($servername, $emailsername, $passwordassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO user(email, UserPassword) VALUES ('$email', '$UserPassword')";




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>