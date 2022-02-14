<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['userName'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Portfolio - Blini Gashi</title>
    <script src="/js/main.js"></script>
    <link rel="stylesheet" href="http://localhost/WEB/css/style.css">
</head>
    <body>
        <!-- hederi-->
        <header class="hederi">
            <nav class="nav grid">
                <div>
                    <a href="#" class="navlogo">Blini Gashi</a>
                </div>

                <div class="navmenu" id="nav-menu">
                    <ul class="navlist">
                        <li class="navitem"><a href="http://localhost/WEB/html/#home" class="navlink">Home</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/#about" class="navlink ">About</a></li>
                        <li class="navitem"><a href="#http://localhost/WEB/html/#skills" class="navlink ">Skills</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/#work" class="navlink ">Work</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/#newsletter" class="navlink">News Letter</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/workwithme.php" class="navlink">Work With Me</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/home.php" class="navlink active">Work Request</a></li>
                    </ul>
                </div>
                <body>
        </header>
        
        <!--pjesa e hyrjes-->
        <section class="section" id="workrequest">
             <br>
        <h2 class="hello-title">Hello, <?php echo $_SESSION['name']; ?>!</h2>
            <h2 class="pick-title">Please make a request of work by picking options below</h2>
            <hr>
            <div class="workrequest-conatiner grid">  
            </div>
            <section class="work section" id="work">
                <form action="http://localhost/WEB/php/workform.php" method="post">
                    <div class="signupcontainer grid">
                    <?php if (isset($_GET['error4'])) { ?>
                <p class="error4" style="color:lightblue"><?php echo $_GET['error4']; ?></p>
            <?php } ?>
                    <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color:red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                    First confirm email:<input style="width:300px; height:50px" type="text" name="email" id="email" placeholder="Email">
                </div>
                <br>
            <h2 class="service-title">Service</h2>
        
            <div class="workcontainer grid">
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/share (1).jpg" alt="">
                    <input type="checkbox" name="radiobutton" id="shareradio" value="Sharepoint"><label style="font-size: 20px;"> Sharepoint

                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/pbi.jpg" alt="">
                    <input type="checkbox" name="radiobutton1" id="pbiradio" value="Power BI"><label style="font-size: 20px;"> Power BI
                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/Blog_WhatIsPowerApps.jpg" alt="">
                    <input type="checkbox" name="radiobutton2" id="paradio" value="Power Apps"><label style="font-size: 20px;"> Power Apps
                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/informatica.jpg" alt="">
                    <input type="checkbox" name="radiobutton3" id="informatica" value="Informatica"><label style="font-size: 20px;"> Informatica

                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/share (1)(7).jpg" alt="">
                    <input type="checkbox" name="radiobutton4" id="sql" value="SQL"><label style="font-size: 20px;"> SQL
                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/AWS (1).jpg" alt="">
                    <input type="checkbox" name="radiobutton5" id="aws" value="AWS"><label style="font-size: 20px;"> AWS
                </a>
            </div>
        </section>
        <section class="section" id="workrequest">
            <div class="workrequest-conatiner grid">  
            </div>
            <section class="work section" id="work">
            <h2 class="service-title">Company Type</h2>
        
            <div class="workcontainer grid">
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/small.jpg" alt="">
                    <input type="checkbox" name="radio2" id="small" value="Small"><label style="font-size: 20px;"> 1-200 employees

                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/medium.jpg" alt="">
                    <input type="checkbox" name="radio2" id="medium" value="Medium"><label style="font-size: 20px;"> 200-500 employees
                </a>
                <a href="" class="workimg">
                    <img src="http://localhost/WEB/img/large.jpg" alt="">
                    <input type="checkbox" name="radio2" id="large" value="Large"><label style="font-size: 20px;"> more than 500 employees
                </a>
            </div>
        </section>
        <section class="section" id="workrequest">
        <div class="workrequest-conatiner grid"> 
            <h2 class="service-title">Pick a valid date for online meeting</h2>
            <?php if (isset($_GET['error2'])) { ?>
                <p class="error2" style="color:red"><?php echo $_GET['error2']; ?></p>
            <?php } ?>
            <input type="date" name = "calendar" class="datecalendar">
            </div>
        </section>
        <button id="submit1" class="submitbutton4  button4" type="submit" name="submit1">Submit Work Request</button> <label class="labeltext">Or</label>
        <a href="http://localhost/WEB/php/logout.php" class="logoutbutton button5">Log Out</a><br><br><br>
       
        </form>
        <br>
        <br>
</section>
</section>
        <!--footeri-->
     <footer class="footer">
      <p class="footertitle">Aralytiks</p>
      <a href="https://aralytiks.com/" style="color: white;">Aralytiks.com</a>
      </footer>
</body>
</html>
<?php 
}else{
     header("Location:http://localhost/WEB/html/workwithme.php");
     exit();
}
 ?>

