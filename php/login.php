<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: http://localhost/WEB/html/workwithme.php?error=User Name is required");
        
    }else if(empty($pass)){
        header("Location: http://localhost/WEB/html/workwithme.php?error=Password is required");
        
    }else{
        $sql = "SELECT * FROM `signinusers` WHERE userName='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: http://localhost/WEB/php/home.php");
               
            }else{
                header("Location: http://localhost/WEB/html/workwithme.php?error=Incorect User name or password");
            }
        }else{
            header("Location: http://localhost/WEB/html/workwithme.php?error=Incorect User name or password");
            
        }
    }
}else{
    header("Location:http://localhost/WEB/html/workwithme.php");
    
}  