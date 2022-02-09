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

$qry = "INSERT INTO `usersn`(`userName`, `eMail`) VALUES ('$username','$email')";
$insert  = mysqli_query($con,$qry);
if(!$insert){
    echo "There is some problem while insertings";
}
else{
    header("Location: http://127.0.0.1:5500/html/index.html");
}
?>