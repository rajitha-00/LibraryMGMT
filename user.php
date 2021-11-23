<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>        
        <script 
        src="https://kit.fontawesome.com/bc53e3ce0a.js" crossorigin="anonymous"></script>
 
        <link rel="stylesheet" href="./css/user.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">


    </head>
    <body>
    
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <a href="#home">
                    <img src="./assets/2.jpeg" alt="" width="40px" height="40px">  
                    <h2><span>ESOFT</span> </h2>
                </a>
                </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#home" class="active"><span class="fas fa-home"></span> <span>Home</span></a></li>             
                    <li><a href="#BOOKS" ><span class="fas fa-book"></span> <span>Books</span></a></li>                 
                    <li><a href="#cat" ><span class="fas fa-th-list"></span> <span>Categories</span></a></li>
                    <li><a href="#cart" ><span class="fas fa-cart-arrow-down"></span><span>Your Cart</span></a></li>
                    <li><a href="#sug" ><span class="fas fa-comments"></span> <span>Contact Us</span></a></li>
                </ul>
            </div>
        </div>
        <div class="main-content" >
                <header>
                    <h2>
                        <label for="nav-toggle"><span class="fas fa-bars"></span></label>
                        The Library
                    </h2>
                    <div class="search-wrapper">
                        <span class="fas fa-search"></span>
                        <input type="search" placeholder="Search here">                   
                    </div>
                    <div class="action">
                        <div class="profile"  onclick="menuToggle();">
                            <img src="./css/magic-book.jpg" width="40px" height="40px" alt="">
                            <h4>User Name</h4>                    
                        </div>
                        <div class="menu">
                            <ul>
                                <li><img src="./assets/profile.png"><a href="#">My profile</a></li>
                                <li><img src="./assets/edit.png"><a href="#">Edit profile</a></li>
                                <li><img src="./assets/inbox.png"><a href="#">Inbox</a></li>
                                <li><img src="./assets/settings.png"><a href="#">Settings</a></li>
                                <li><img src="./assets/help.png"><a href="#">Help</a></li>
                                <li><img src="./assets/logout.png"><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>                
                </header>
                <main id="main"> 
                    <?php include "./includes/us_home.php" ?>
                    <?php include "./includes/us_bk.php" ?>
                    <?php include "./includes/us_cat.php" ?>
                    <?php include "./includes/us_cart.php" ?>
                    <?php include "./includes/us_sug.php" ?>                 
                </main>

                <div id="details-page">
                    <div class="details">
                        <div class="items-detail">
                            <div class="image-container">
                                <img src="./assets/assets-ubk/bk1.jpg" alt="" id="details-img">
                            </div>
                            <div class="details-card">
                                <h2 id="detail-title">Book 01</h2>
                                <h4 id="detail-price">Price : Rs 9,999</h4>
                                
                                <p id="delievery"><strong>Retern after : </strong> In 3 - 4 days</p>
                                <p id="spec"><strong>Specification :</strong>
                
                                    <ul>
                                        <li>13MP AI triple main camera + 2MP bokeh (depth of field) camera + 2MP macro camera with photo, video, professional mode panorama, portrait, time-lapse etc. | 16MP front punch hole camera</li>
                
                                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </li>
                
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maxime reiciendis laborum! Velit odit molestias architecto doloremque est sapiente. </li>
                                    </ul>
                                </p>
                                <button id="carts">Add to Cart</button>
                                <button id="buy">Back</button>
                            </div>
                        </div>
                    </div>
                </div>  
                             
        </div>
        
        <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
        crossorigin="anonymous"></script>
       
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                
        <script src="main.js"></script>
    </body>
    
</html>