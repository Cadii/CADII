<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/lapguide.css">
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
        <a href="../php/main-menu.php"  class="logo"><img src="../images/Cadi Logo.png" alt="Logo"></a>
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
            <a href="../php/login.php" class="user"><i class="fa-solid fa-user"></i>Login</a>
            <a href="../php/register.php" class="user"><i class="fa-solid fa-user-plus"></i>Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
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
            <h1>Laptops</h1>
            <p>Hello, We are Cadi - And here is a full guide about Laptops</p>
        </div>
    </div>
<!-- End Landing Section -->
<!-- Start Services -->
<div class="services">
    <div class="container">
        <h2 class="special-heading">Laptops</h2>
        <p>let's start to learn to be professional user</p>
        <div class="pc">
            <h3>What is the A Laptop ?</h3>
            <p>iIt's bassiclly a PC but much smaller and
                you can carry it out with you and works on battery.</p>
        </div>
    </div>
</div>
<!-- End Services -->
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
                <h3><a href="../php/rog g14.php" class="link">Asus ROG Zephyrus G14 Review</a></h3>
                <p><img src="../images/rog g14.jpg" alt="CPU" class="img"></p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">MacBook Air m2 Review</a></h3>
                <p><img src="../images/mac m2.jpg" alt="CPU" class="img"></p>
            </div>
            <div class="feat">
                <h3><a href="../php/Razer Blade 14.php" class="link">Razer Blade 14 Review</a></h3>
                <p><img src="../images/razer14.jpg" alt="CPU" class="img"></p>
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
<script src="../CADII-main/JS/main.js"></script>
</body>
</html>