<?php
session_start();
$uname=$_POST['login-form-username'];
$pass=$_POST['login-form-password'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="SELECT * FROM facultyregister";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//echo "success";
	while($row=mysqli_fetch_assoc($result)){
		$login=0;
		if($row["username"]==$uname and $row["password"]==$pass){
			$login=1;
			break;
		}
	}
}
else{
	echo "No entry in table";
}
if($login==1){
    $_SESSION['login_user']=$uname;
	header('Location: process-steps.php');
}
else{
	header('Location: coming-soon-2.html');
}

mysqli_close($conn);

?>