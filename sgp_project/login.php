<?php
session_start();
include "db_conn.php";

if(isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
$name = validate($_POST['name']);
$password = validate($_POST['password']);

if(empty($name)) {
    header("location: index1.php?error=name name is required");
    exit();
}
else if(empty($password)) {
    header("location: index1.php?error=password name is required");
    exit();
}

$sql ="SELECT * FROM login WHERE name='$name' AND password='$password'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row['name'] === $name && $row['password'] === $password) {
        echo "logged in!!";
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error = Incorrect name and password");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}
?>