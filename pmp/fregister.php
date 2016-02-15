<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$name=$_POST["register-form-name"];
$email=$_POST["register-form-email"];
$phone=$_POST["register-form-phone"];
$uname=$_POST["register-form-username"];
$pass=$_POST["register-form-password"];

//echo $name." ".$email." ".$phone." ".$uname." ".$pass;

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="INSERT INTO facultyregister(name,email,username,phone,password) VALUES('$name','$email','$uname','$phone','$pass')";

if (mysqli_query($conn, $sql)) {
    header('Location: loggin.html');
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>