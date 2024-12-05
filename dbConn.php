<?php

$host = "localhost";
$DB_user = "root";
$DB_password = "";
$DbName = "login";

$dbConnect = mysqli_connect($host,$DB_user,$DB_password,$DbName);

if(!$dbConnect){
    echo "Error".mysqli_error();
}
