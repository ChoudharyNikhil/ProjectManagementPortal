<?php

// Connect to the database
        $host="localhost"; // Host name 
        $username="root"; // Mysql username 
        $password="root"; // Mysql password 
        $db_name="pmp"; // Database name 
        $tbl_name="upload"; // Table name 

        $conn = mysqli_connect($host, $username, $password,$db_name); 
        if(! $conn )
        {
          die('Could not connect: ' . mysqli_connect_error());
        }

        

    if (isset($_GET["id"]) && !empty($_GET["id"])) { 

            $id= $_GET['id'];

            $query = "SELECT file_name, file_type, file_size, content FROM '$tbl_name' WHERE file_id = '$id'";

            $result = mysqli_query($conn,$query); 
            list($name, $type, $size, $content) = mysqli_fetch_assoc($result);

            header("Content-length: '$size'");
            header("Content-type: '$type'");
            header("Content-Disposition: attachment; filename='$name'");
            echo $content;

            mysqli_close($conn);
            exit;
            }


?>