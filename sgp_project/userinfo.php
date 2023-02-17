<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo 'successfull';    
}else{
    echo 'no connection';
}

mysqli_select_db($con, 'sgp_project');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "insert into login (name,email,password) 
values('$name','$email','$password')";
 
mysqli_query($con, $query);
header('location: index.php');
?>