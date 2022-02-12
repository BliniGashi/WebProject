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
                        <li class="navitem"><a href="http://localhost/WEB/html/"class="navlink">Home</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/" class="navlink">About</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/" class="navlink">Skills</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/" class="navlink">Work</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/" class="navlink">News Letter</a></li>
                        <li class="navitem"><a href="http://localhost/WEB/html/" class="navlink active">Work With Me</a></li>
                    </ul>
                </div>

                <div class="navtoggle" id="nav-toggle">
                </div>
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
<style>
    .mySlides {display: none}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      
    }
    
    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }
    
    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }
    
    
    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active1, .dot:hover {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .prev, .next,.text1 {font-size: 11px}
    }
    </style>
    </head>
    <body>
        <h2 class="section-title">My Work</h2>
    <div class="slideshow-container">
    
    <div class="mySlides fade">
      <img src="http://localhost/WEB/img/slidepic1.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="http://localhost/WEB/img/sliderpic2.PNG" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="http://localhost/WEB/img/sliderpic3.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active1", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active1";
    }
    </script>
    <!--pjesa e formes-->
    <?php 
echo '<script type="text/JavaScript"> 
function show_hide1()
{           document.getElementById("newsletter").style.display="none";
            document.getElementById("newsletter2").style.display="block";
        }

        function show_hide2()
{           document.getElementById("newsletter").style.display="block";
            document.getElementById("newsletter2").style.display="none";
        } 
     </script>'
;
?>
                <?php 
echo '<script type="text/JavaScript"> 
            function validateform(){
            var name = document.form1.name.value;
            var username = document.form1.username.value;
            var email = document.form1.email.value;
            var password = document.form1.password1.value;
            var password2 = document.form1.password2.value;
            
            if(name == null || name == "") {
                alert("Name must be filled");
                return false;
            }
                else if(username == null || username == "") {
                  alert("Username must be filled");
                  return false;
              }
                  else if(username.length < 5){
                      alert("Username must be at least 5 characters long");
                      return false;
                      }
          
               else if(email == null || email == ""){
                  alert("Email must be filled");
                  return false;
                  }
              
                  else if(password == null || password == ""){
                      alert("Password must be filled");
                      return false;
                      }
                      else if(password.length < 8){
                          alert("Password must be at least 8 characters long");
                          return false;
                      }
                      else if(password2 == null || password2 == ""){
                          alert("Both Password fields must be filled");
                          return false;
                          }
                      else if(password2 != password){
                          alert("Passwords must match!");
                      }
          
                      else{
                          alert("Successful submission!");
                          location.reload();
                      }
              }
          
     </script>'
?>
    <section class="signup section" id="newsletter" style="display: none;">
        <h2 
          class="section-title" id="text1">Sign up or login to view work requests
        </h2>
        <div style="text-align:center">
       <button id="loginid1" onclick="show_hide1()" id="loginid1">Log In</button> <a id="ortext">or</a> <button onclick="show_hide2()" id="signupbtt">Sign Up</button>
      </div>
        <div class="signupcontainer grid"> 
            <form name="form1" class="signupform" id="form" action="http://localhost/WEB/php/signup.php" method="post">
                <input type="text" placeholder="Name" class="signupinput" id="name" name="name">
                <input type="text" placeholder="User Name" class="signupinput" id="username1" name="username">
                <input type="mail" placeholder="Email" class="signupinput" id="email" name="email">
                <input type="password" placeholder="Password" class="signupinput" id="password1" name = "password1">
                <input type="password" placeholder="Repeat Password" class="signupinput" id="password2">
                <br>
                <label id="gender" style="font-size: 20px;">Gender:</label><label id="male"><input type="radio" name="checkbutton" id="radiobtn1" value="Male">Male</label>
                  <label id="female"><input type="radio" name="checkbutton" id="radiobtn2" value="Female">Female</label>
                <br>
                <br>
                <p id="rules">By clicking submit you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> <br>

                <button id="submit1" class="submitbutton button"type="submit" name="submit" onclick="return validateform()">Sign Up</button>
            </form>
            
            <script>
              $(document).ready(function() {
                  $(".checkRadioBtn1").click(function() {
                      $("#radiobtn1").prop("checked", true);
                    });
                  $(".checkRadioBtn2").click(function() {
                      $("#radiobtn2").prop("checked", true);
                    });
                });
            </script>
        </div>
      </section> 
      <section class="signup section" id="newsletter2">
        <h2 class="section-title">Sign up or login to view work requests</h2>
        <div style="text-align:center">
       <button onclick="show_hide1()" id="loginid2">Log In</button> or <button onclick="show_hide2()" id="signup2">Sign Up</button>
      </div>
        <div class="signupcontainer grid"> 


            <form name="form2" class="signupform" id="form2" action="http://localhost/WEB/php/login.php" method="post">
              <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color:red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                <input type="text" placeholder="User Name" class="signupinput" id="username2" name="uname">
                <input type="password" placeholder="Password" class="signupinput" id="password2" name = "password">
                <br>
                <button id="submit1" class="submitbutton button" type="submit" name="submit1">Log In</button>
            </form>


        </div>
    </section> 
    
     <!--footeri-->
     <footer class="footer">
      <p class="footertitle">Aralytiks</p>
      <a href="https://aralytiks.com/" style="color: white;">Aralytiks.com</a>
      </footer>
    </body>
</html>
