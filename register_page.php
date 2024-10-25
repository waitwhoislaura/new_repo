<!DOCTYPE html>
<hmtl lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge"> 
        <!-- So the web view is adapted to the device is opened in -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SUDOKU SOLVER</title>
        <link rel="stylesheet" href="styles.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header>
            <h1>SUDOKU SOLVER</h1>
        </header>
        <br>
        <br>
    </body>
    <body class="login">
        <!-- This div is the login panel -->
        <div class="wrapper">
            <form name = "f1" action = "register.php" onsubmit = "return validation()" method = "post">
            <h2>Register</h2>
            <!-- username box where you can write -->
            <div class="input-box">
                <input type="text" placeholder="Username" name="user" id="username">
                <i class='bx bx-user'></i>
            </div>
            <!-- email box to register and send verification -->
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" id="email">
                <i class='bx bx-envelope'></i>
            </div>
            <!-- pw box to write -->
            <div class="input-box">
                <input type="password" placeholder="Password" name="pass" id="password">
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="pass2" id="password2">
                <i class='bx bx-lock-alt'></i>
            </div>
            <!-- this button need direct link to the db to let the user log in -->
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href="login_page.php">Log in</a></p>
            </div>
            </form>
        </div>
        <div class="skip-login">
            <p>Don't want to log in? <a href="nolog_solver_page.php">Go to solver</a></p>
        </div>
        <script>  
            function validation()
            {  
                var id=document.f1.user.value; 
                var em=document.f1.email.value;   
                var ps=document.f1.pass.value;  
                var ps2=document.f1.pass2.value;  
                if(id.length=="" && em.length=="" && ps.length=="" && ps2.length=="") {  
                    alert("All fields must be entered.");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }
                    if (em.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                    }  
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    if (ps2.length=="") {  
                    alert("Confirm Password field is empty");  
                    return false;  
                    } 
                    if (ps != ps2){  
                    alert("Passwords do not match");  
                    return false;  
                    }
                }                             
            }
        </script>
    </body>
</hmtl>