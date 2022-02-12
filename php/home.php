<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['userName'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/WEB/css/style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="http://localhost/WEB/php/logout.php">Logout</a>
</body>
</html>
<?php 
}else{
     header("Location:http://localhost/WEB/html/workwithme.php");
     exit();
}
 ?>

