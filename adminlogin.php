<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/section1.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="css/header.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="./css/login.css?v=<?php echo time(); ?>" rel="stylesheet">
    </head>
    <body>  
    <main>
        <section>
            <div class="circle"></div>
            <header>
                <a href="home.php">
                    <img src="./assets/logo.png" class="logo">
                </a>
                           
            </header>
            <div class="container">
                <span></span>
                <div class="form">
                    <h1>login here</h1>
                    <form action="us.php" method="POST">
                        <div class="inputBX">
                            <input type="text" name="usname" placeholder=" Username">
                        </div>
                        <div class="inputBX">
                            <input type="password" name="pword" placeholder=" Password">
                        </div> 
                        <div class="inputBX">
                            <input type="Submit"  value="Login" name="adlogin">
                        </div>                                      
                        <div class="forgotpassword">
                            <p>forgot password ? <a href="#">click here</a></p>
                        </div>
                    </form>
                </div>          
            </div>
        </section>      
    </main>
    <script src="./main.js"></script>  
    </body>
</html>