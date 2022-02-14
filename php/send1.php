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
$email = $_POST['email'];


if (empty($name)) {
    header("Location: http://localhost/WEB/html/index.php?error1=Username is required");
}else if(empty($email)){
    header("Location: http://localhost/WEB/html/index.php?error1=Email is required");
}

else{
$sql = "SELECT * FROM `usersn` WHERE eMail='$email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 0){
    $qry = "INSERT INTO `usersn`(`userName`, `eMail`) VALUES ('$name','$email')";
    $insert  = mysqli_query($con,$qry);
    header("Location: http://localhost/WEB/html/index.php?error1=Successful Submission");
}
else{
    header("Location: http://localhost/WEB/html/index.php?error1=User aleready exists!");
}
}

?>