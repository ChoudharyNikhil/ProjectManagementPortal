<?php

if($_FILES['userfile']['size']>0){
	$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$grpid=$_POST['form-condition-1'];
$revid=$_POST['form-condition-4'];
$desc=$_POST['form-condition-3'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
$dat= date('d M Y');;
$status=$_POST['form-condition-5'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="INSERT INTO upload (groupid, reviewid, date, name, size, type, content, description, status ) VALUES ('$grpid', '$revid', '$dat','$fileName', '$fileSize', '$fileType', '$content', '$desc', '$status')";

if(mysqli_query($conn, $sql)){
    header('Location: uploaded.html');
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>