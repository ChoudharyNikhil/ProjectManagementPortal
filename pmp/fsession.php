<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$connection = mysqli_connect($servername,$username,$password,$dbname);

session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection,"select username from facultyregister where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['username'];

if(!isset($login_session)){
mysqli_close($connection);
header('Location: index-events.html');
}
?>