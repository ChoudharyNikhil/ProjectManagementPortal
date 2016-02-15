<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text; charset">
</head>

<body>
<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}

$id    = $_GET['id'];
$query = "SELECT name, type, size, content FROM upload WHERE groupid = '$id'";

$result = mysqli_query($conn,$query);// or die('Error, query failed');
//list($name, $type, $size, $content)
    $row= mysqli_fetch_assoc($result);
    $name=$row["name"];
    $type=$row["type"];
    $size=$row["size"];
    $content=$row["content"];

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

mysqli_close($conn); 
exit;
}
else{
echo "Probm wth get id";
}
?>
</body>
</html>