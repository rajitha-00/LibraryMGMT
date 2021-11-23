<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Library Mangement System</title>
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
        


    </head>
    <body>
    <!--<header></header>-->
    
        <section>
            <div class="circle"></div>
            <header>
                <a href="#">
                    <img src="./assets/logo.png" class="logo">
                </a>
                <div class="toggle" onclick="toggleMenu()"></div>
                <ul class="navigation">
                    <li ><a href="home.php"> HOME</a></li>
                    <li ><a href="#"> MENU</a></li>
                    <li ><a href="#"> What's new</a></li>
                    <li ><a href="#"> Contact</a></li>
                </ul>
            </header>
            <div class="content">
                <div class="textBx">
                    <h2>welcome to the library</h2>
                    <p>Api heuwoth api kanawa</p>
                    <a href="userlogin.php">Login</a>
                    <a href="signup.php">sign-up</a>
                </div>
                <div class="imgBox">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide"><img src="./assets/01.png" ></div>
                          <div class="swiper-slide"><img src="./assets/02.png" ></div>
                          <div class="swiper-slide"><img src="./assets/03.png" ></div>
                          <div class="swiper-slide"><img src="./assets/04.png" ></div>
                          <div class="swiper-slide"><img src="./assets/05.png" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
    crossorigin="anonymous"></script>

    <script 
    src="https://kit.fontawesome.com/bc53e3ce0a.js" crossorigin="anonymous"></script>
    <link href="./css/style.css" rel="stylesheet">    
</body>
</html>