<?php 
session_start();
include "./dbConn.php";

if(empty($_POST['name'])){
    $errorMsg = "user is required";
    echo $errorMsg;
    exit();
}
else{
    $name = $_POST['name'];
}
if(empty($_POST['email'])){
    $errorMsg = "email is required";
    echo $errorMsg;
    exit();
}
else{
    $email = $_POST['email'];
}
if(empty($_POST['password'])){
    $errorMsg="password is required";
    echo $errorMsg;
    exit();
}
else{
    $password = $_POST['password'];
}
$created = date("Y-m-d");
$query = "INSERT INTO user (name,email,password,created) VALUES ('$name','$email','$password','$created')";

if(mysqli_query($dbConnect,$query)){
    header("Location: index.php");
}