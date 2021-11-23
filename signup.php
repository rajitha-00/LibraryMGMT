<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link href="css/section1.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="css/header.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet">        
        <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="circle"></div>
        <header>
            <a href="home.php">
                <img src="./assets/logo.png" class="logo">
            </a>
        </header>
            <div class="container01">
                <span></span>
            <div class="form">
                <h1>Register to the Library</h1>
                <form action="bk.php" method="POST" enctype="multipart/form-data">     
                    <div class="inputBX">
                        <input type="text" name="fname" placeholder=" Firstname">
                    </div>
                    <div class="inputBX">
                        <input type="text" name="ln  ame" placeholder=" Lastname">
                    </div>
                    
                    <div class="inputBX">
                        <input type="text" name="email" placeholder=" Email"> 
                    </div>
                    <div class="inputBX">
                        <input type="password" name="password1" placeholder=" Password">
                    </div> 
                    <div class="inputBX">
                        <input type="password" name="password2" placeholder=" Repeat Password">
                    </div> 
                    <div class="inputBX">
                        <input type="text" name="contact" placeholder=" Contact">
                    </div>
                    <div class="inputBX">
                        <input type="text" name="address" placeholder=" Address">
                    </div>
                    <div class="inputBX">
                    <input type="file" name="usprop" id="usprop" >
                    </div> 
                    <div class="inputBX">
                        <input type="Submit" value="submit" name="signup">
                    </div>

                                    
                    <div class="registration">
                        <p>Welcome to the Library!!  <a href="userlogin.php" > Login here</a></p>
                    </div>
                    
                    
                </form>
            </div>
                
            </div>  
        </section>
    </body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
    crossorigin="anonymous"></script>

    <script 
    src="https://kit.fontawesome.com/bc53e3ce0a.js" crossorigin="anonymous"></script>
    <link href="./css/style.css" rel="stylesheet">  
    </body>
</html>