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

$sql="SELECT * FROM groupregister where groupid='$uname' and password='$pass'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$login=1;
}
else{
	echo "No entry in table";
}
if($login==1){
    $_SESSION['login_user']=$uname;
    $query="SELECT * from upload where groupid= '$uname'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        header('Location:group desk.php');
    }
    else{
	header('Location: group-desk1.html');
    }
}
else{
    mysqli_close($conn);
	header('Location: login.html');
}

mysqli_close($conn);

?>