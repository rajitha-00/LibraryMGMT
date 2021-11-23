<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Library Administrator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link 
        rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.15.2/css/all.css?v=<?php echo time(); ?>" 
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" 
        crossorigin="anonymous">

    </head>
    <body>
    
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                      
                <h2><a href="#dboad"><img src="./assets/2.jpeg" alt="" width="40px" height="40px"><span>ESOFT</span></a> </h2>              
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#dboad" class="active"><span class="fas fa-igloo"></span> <span>Dashboard</span></a></li>
                    <li><a href="#usbyad"><span class="fas fa-users"></span> <span>Users</span></a></li>
                    <li><a href="#bkbyad"><span class="fas fa-book"></span> <span>Books</span></a></li>
                    <li><a href="#bkbbyad"><span class="fas fa-th-list"></span> <span>Barrowed Books</span></a></li>
                    <li><a href="#fbbyad"><span class="fas fa-comments"></span> <span>Feedbacks</span></a></li>
                    <!-- <li><a href="#bkrbbyad"><span class="fas fa-user-circle"></span> <span>Borrowed Accounts </span></a></li> -->
                </ul>
            </div>
        </div>
        <div class="main-content">
                <header>
                    <h2>
                        <label for="nav-toggle"><span class="fas fa-bars"></span></label>
                        The Library
                    </h2>
                    <div class="search-wrapper">
                        <span class="fas fa-search"></span>
                        <input type="search" placeholder="Search here">                   
                    </div>

                    <div class="user-wrapper">
                        <img src="./css/magic-book.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Librarian</h4>
                            <small>Library Admin</small>
                        </div>
                    </div>
                </header>
                <main>               
                    <?php include "./includes/ad_dashboad.php" ?>
                    <?php include "./includes/ad_us.php" ?>
                    <?php include "./includes/ad_bk.php" ?>
                    <?php include "./includes/ad_fb.php" ?>
                </main>       
        </div>
    <script></script>
    <!-- Latest compiled and minified JavaScript -->
   
    <script src="https://kit.fontawesome.com/bc53e3ce0a.js" crossorigin="anonymous"></script>
    </body>
</html>