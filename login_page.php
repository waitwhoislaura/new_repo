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
            <br>
            <nav class="navigation">
                <a>Log in to get access to all the functions</a>
            </nav>
        </header>
        <br>
    </body>
    <body class="login">
        <!-- This div is the login panel -->
        <div class="wrapper">
            <form name="f1" action = "login.php" onsubmit = "return validation()" method = "POST">
            <h2>Login</h2>
            <!-- username box where you can write -->
            <div class="input-box">
                <input type="text" placeholder="Username" name="user">
                <i class='bx bx-user'></i>
            </div>
            <!-- pw box to write -->
            <div class="input-box">
                <input type="password" placeholder="Password" name="pass">
                <i class='bx bx-lock-alt'></i>
            </div>
            <!-- this button need direct link to the db to let the user log in -->
            <button type="submit" class="btn" id="hide-show">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="register_page.php">Register</a></p>
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
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Username and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    } 
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }
        </script>
    </body>
</html>