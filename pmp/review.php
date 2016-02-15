<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$teamid=$_POST["teamid"];
$reviewid=$_POST["reviewid"];
$idea=$_POST["template-reviewform-rating"];
$comm=$_POST["template-reviewform-comment"];
$marks=$_POST["marks"];

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="INSERT INTO review(groupid,reviewid,rate,comments,marks) VALUES('$teamid','review $reviewid','$idea','$comm', '$marks')";

if (mysqli_query($conn, $sql)) {
    header('Location: reviewed.html');
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>