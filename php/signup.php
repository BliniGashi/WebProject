<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "There were some problems while connecting";
}
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password1'];
$gender = $_POST['checkbutton'];

$qry = "INSERT INTO `signinusers` (`userName`, `eMail`, `password`,`name`, `gender`) VALUES ( '$username', '$email', '$password','$name', '$gender')";
$insert  = mysqli_query($con,$qry);
if(!$insert){
    echo "There is some problem while insertings";
}
else{
header("Location: http://localhost/WEB/html/workwithme.php");
    exit; 
}   
?>