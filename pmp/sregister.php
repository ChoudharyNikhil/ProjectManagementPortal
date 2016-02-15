<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$name1=$_POST["register-form-name1"];
$name2=$_POST["register-form-name2"];
$name3=$_POST["register-form-name3"];
$name4=$_POST["register-form-name4"];
$email=$_POST["register-form-email"];
$faculty=$_POST["register-form-facultyid"];
$uname=$_POST["register-form-username"];
$pass=$_POST["register-form-password"];

//echo $name." ".$email." ".$phone." ".$uname." ".$pass;

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="INSERT INTO groupregister(groupid,facultyid,email,password) VALUES('$uname','$faculty','$email','$pass')";
$sql1="INSERT INTO groupinfo(groupid,name1,name2,name3,name4) VALUES('$uname','$name1','$name2','$name3','$name4')";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
    header('Location: loggin.html');
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>