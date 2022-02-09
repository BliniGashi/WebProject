<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "There were some problems while connecting";
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['checkbutton'];

$qry = "INSERT INTO `signinusers` (`userName`, `eMail`, `password`, `gender`) VALUES ( '$username', '$email', '$password', '$gender')";
$insert  = mysqli_query($con,$qry);
if(!$insert){
    echo "There is some problem while insertings";
}
else{
header("Location: http://127.0.0.1:5500/html/workwithme.html");
    exit; 
}   
?>