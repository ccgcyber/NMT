<?php
$conn = new mysqli("localhost","root","","login");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                          }
session_start();

$user_check=$_SESSION['login_user'];

$sql="select * from id where username='$user_check'";

$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$login_session=$row['username'];

if(!isset($login_session)){

mysql_close($connection); // Closing Connection

header('Location:login.php'); // Redirecting To Home Page

}

?>
