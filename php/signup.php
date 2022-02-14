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

$sql = "SELECT * FROM `signinusers` WHERE userName='$username' AND eMail='$email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 0){
    $qry = "INSERT INTO `signinusers` (`userName`, `eMail`, `password`,`name`, `gender`) VALUES ( '$username', '$email', '$password','$name', '$gender')";
    $insert  = mysqli_query($con,$qry);
    header("Location: http://localhost/WEB/html/workwithme.php?error=Successful Submission!"); 
}
else{
    header("Location: http://localhost/WEB/html/workwithme.php?error=User aleready exists, please try again!");
} 
?>