<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "sgp_project";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn){
    echo "connection failed";
}
 ?>