<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Guides</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Build Guides.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Goodle Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
    <!-- Add icon for website-->
    <link rel="icon" href="../images/Cadi Icon.icon">
</head>
<body>
    <!-- Start header -->
    <header>
        <a href="../php/main-manu.php"  class="logo"><img src="../images/Cadi Logo.png" alt="Logo"></a>
            <!-- Start Unordered list  -->
            <ul class="navbar">
                <li><a href="../php/Builder.php">Builder 
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </a></li>
                <li><a href="../php/Build Guides.php">Build Guides
                    <i class="fa-sharp fa-solid fa-book"></i>
                </a></li>
                <li><a href="../php/Completed Builds.php">Completed Builds
                    <i class="fa-solid fa-computer"></i>
                </a></li>
                <li><a href="../php/contact.php">Contact
                    <i class="fa-solid fa-envelope"></i>
                </a></li>
            </ul>
        <div class="main">
            <?php
            
            // Check if the user is logged in
            
            if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {
                // If the user is logged in, hide the Login and Register links
                echo 'Welcome :' . $_SESSION["user_name"] . '<br>';
                
            ?>
            <div class="bx bx-menu" id="menu-icon">
                
                 <a href="../php/logout.php" class="user"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                
                
            </div>
            <?php
            } else {
                // If the user is not logged in, display the Login and Register links
            ?>
            <a href="../php/login.php" class="user"><i class="fa-solid fa-user"></i>Login</a>
            <a href="../php/register.php" class="user"><i class="fa-solid fa-user-plus"></i>Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <?php
            }
            ?>
        </div>
        <!--Start Search Bar-->
        <div class="Search-Bar">
            <form action="https://google.com/search" method="get" class="search">
                <input type="text" class="input" placeholder="Search">
                <button class="btn" type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    <!--End Search Bar-->
    </header>
    <!-- End header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Build Guides</h1>
            <p>Here you can learn about how to select and build your PC.</p>
        </div>
    </div>
    <!-- End Landing Section -->
    <!-- Start Services -->
    <div class="services">
        <div class="container">
            <h2 class="special-heading">Computer</h2>
            <p>let's start to learn to be professional user</p>
            <div class="pc">
                <h3>What is the Computer and Computer Components?</h3>
                <p>A Pc or computer is a device that is used for a lot of different things like gaming,browsing,working,etc.  <br> To know more information about each components click on name of components</p>
            </div>
        </div>
    </div>
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
                <h3><a href="../php/cpu.php" class="link">Central Processing Unit</a></h3>
                <a href="../php/cpu.php" class="link"><img src="../images/cpu2.jpg" alt="CPU" class="img_l"></a>
            </div>
            <div class="feat">
                <h3><a href="../php/gpu.php" class="link">Graphics Processing Unit</a></h3>
                <p><img src="../images//gpu2.jpg" alt="GPU" class="img_l"> </p>
            </div>
            <div class="feat">
                <h3><a href="../php/motherboard.php" class="link">Motherboard</a></h3>
                <p><img src="../images/motherboard.png" alt="CPU" class="img_l"> </p>
            </div>
            <div class="feat">
                <h3><a href="../php/case.php" class="link">Case</a></h3>
                <p><img src="../images/case2.jpg" alt="CPU" class="img_l"> </p>
            </div>
            <div class="feat">
                <h3><a href="../php/memory.php" class="link">Memory</a></h3>
                <p><img src="../images/ram.jpg" alt="CPU" class="img_l"> </p>
            </div>
            <div class="feat">
                <h3><a href="../php/storage.php" class="link">Storage</a></h3>
                <p><img src="../images/ssd.jpg" alt="CPU" class="img_l"> </p>
            </div>
        </div>
    </div>
    <!-- End main Components -->
    <!-- Start Footer -->
    <div class="footer">
        <p>© 2023 <span>Cadi</span> All Right Reserved.</p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
<script src="../JS/main.js"></script>
</body>
</html>
