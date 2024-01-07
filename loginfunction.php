<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="session";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

$email=$_POST['email'];
$UserPassword=$_POST['UserPassword'];


$sql="select * from user where email='$email' AND UserPassword='$UserPassword'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($email==" " && $UserPassword==" "){
  
  echo "log in Faild";
}

if($row['email']==$email && $row['UserPassword']==$UserPassword){
    
 

  
  session_start();
    $_SESSION["email"] =$email;
    $_SESSION["UserPassword"] = $UserPassword;
    
    echo "Session variables are set.";
    header('location:welcome.php');
}

else{
  echo "error";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



?>