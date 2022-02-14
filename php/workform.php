<?php 
include "db_conn.php";

if(empty($_POST['radiobutton'])){
    $service1 = null;
}
else{
    $service1 = $_POST['radiobutton']; 
};


if(empty($_POST['radiobutton1'])){
    $service2 = null;
}
else{
    $service2 = $_POST['radiobutton1']; 
};


if(empty($_POST['radiobutton2'])){
    $service3 = null;
}
else{
    $service3 = $_POST['radiobutton2']; 
};


if(empty($_POST['radiobutton3'])){
    $service4 = null;
}
else{
    $service4 = $_POST['radiobutton3']; 
};


if(empty($_POST['radiobutton4'])){
    $service5 = null;
}
else{
    $service5 = $_POST['radiobutton4']; 
};

if(empty($_POST['radiobutton5'])){
    $service6 = null;
}
else{
    $service6 = $_POST['radiobutton5']; 
};
$companytype = $_POST['radio2'];
$meetingdate = $_POST['calendar'];
$email = $_POST['email'];

if(empty($email)){
    header("Location: http://localhost/WEB/php/home.php?error=Email can not be blank!");
}
elseif(empty($meetingdate)){
    header("Location: http://localhost/WEB/php/home.php?error2=Date can not be blank!");
}
else{
$qry = "INSERT INTO `workrequest`( `services`, `companytype`, `meetingdate`, `userinsert`) VALUES ('$service1 $service2 $service3 $service4 $service5 $service6','$companytype','$meetingdate','$email')";
$insert  = mysqli_query($conn,$qry);
header("Location: http://localhost/WEB/php/home.php?error4=Successful Submission!");
echo '<script type="text/JavaScript"> 
alert("Successful Submission!");
     </script>';
}
?>