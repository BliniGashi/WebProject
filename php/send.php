<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";

$username = $_POST['username'];
$email = $_POST['email'];

$err1 = 0;
$msg1 = "Username or Email is empty";
$msg2 ="Username should be more than 5 characters and less than 12";
$msg3 ="Email not in good format";
$msg4 = "Your email has been added to our news letter list, please go back to continue.";
$username_length = strlen($username);

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "There were some problems while connecting";
    header("Location: http://127.0.0.1:5500/html/index.html");
}
if(empty($_POST["username"]) Or empty($_POST['email'])){
    echo "<script>alert('$msg1')</script>";
    header("Location: http://127.0.0.1:5500/html/index.html");
}
elseif ($username_length <5 or $username_length >12) {
    echo "<script>alert('$msg2')</script>";
    header("Location: http://127.0.0.1:5500/html/index.html");
}
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('$msg3')</script>";
    header("Location: http://127.0.0.1:5500/html/index.html");
}
else{
$qry = "INSERT INTO `usersn`(`userName`, `eMail`) VALUES ('$username','$email')";
$insert  = mysqli_query($con,$qry);
if(!$insert){
    echo "There is some problem while insertings";
}else{
    echo "<script>alert('$msg4')</script>";
    header("Location: http://127.0.0.1:5500/html/index.html");
    exit; 
}}
        
?>