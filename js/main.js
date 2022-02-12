function show_hide1()
{           document.getElementById("newsletter").style.display="none";
            document.getElementById("newsletter2").style.display="block";
            
            
            
        }

        function show_hide2()
{           document.getElementById("newsletter").style.display="block";
            document.getElementById("newsletter2").style.display="none";
            
            
            
        }        

        function validateform(){
            var name = document.form1.name.value;
            var username = document.form1.username.value;
            var email = document.form1.email.value;
            var password = document.form1.password1.value;
            var password2 = document.form1.password2.value;
            var validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            
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


    
    function validateform1(){
        var username = document.form.username.value;
        var email = document.form.email.value;
        
        
        if(username == null || username == "") {
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
            else{
                alert("Successful submission!");
                location.reload();
            }
    
        }


       