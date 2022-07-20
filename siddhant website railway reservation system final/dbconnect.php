<?php
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "railway reservation system";
$conn = mysqli_connect($_SERVER,$username,$password,$database);
if($conn){
    // echo "Connection Established";
}
else{
   echo "DATABASE is not connected";
}
?>