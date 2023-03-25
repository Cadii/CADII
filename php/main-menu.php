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
    <title>Cadi</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Cadi.css">
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
            <div class="bx bx-menu" id="menu-icon"> <a href="../php/logout.php"  class="fa fa-sign-out" aria-hidden="true"><i class="fa-solid fa-user"></i>Login</a></div>
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
                <h1>Hello There</h1>
                <p>We are Cadi  - Super Creative & Minimal Agency PC Builder Simulatior</p>
            </div>
        </div>
    <!-- End Landing Section -->
    <!-- Start Main Components -->
        <div class="components">
            <div class="container">
                <div class="feat">
                    <h3>Central Processing Unit</h3>
                    <p>A central processing unit (CPU), also called a central processor, main processor or just processor, 
                        is the electronic circuitry that executes instructions comprising a computer program. The CPU performs basic arithmetic, 
                        logic, controlling, and input/output (I/O) operations specified. </p>
                </div>
                <div class="feat">
                    <h3>Graphics Processing Unit</h3>
                    <p>A graphics processing unit (GPU) is a specialized electronic circuit designed to manipulate and alter memory to 
                        accelerate the creation of images in a frame buffer intended for output to a display device. 
                        GPUs are used in embedded systems, mobile phones, personal computers, workstations, and game consoles.</p>
                </div>
                <div class="feat">
                    <h3>Motherboard</h3>
                    <p>A motherboard (also called mainboard, main circuit board, mb, mboard, backplane board, base board, system board, 
                        logic board (only in Apple computers) or mobo) is the main printed circuit board (PCB) in general-purpose computers and other 
                        expandable systems.</p>
                </div>
            </div>
        </div>
    <!-- End Main Components -->
    <!-- Start Services -->
    <div class="services">
        <div class="container">
            <h2 class="special-heading">Services</h2>
            <p>Don't be busy, be productive</p>
            <div class="services-content">
                <div class="col">
                    <!-- Start Services -->
                    <div class="srv">
                        <div class="text">
                            <h3>
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                Builder 
                            </h3>
                            <p>You will be assisted in choosing compatible components together in order to get the highest efficiency from this 
                                computer and the best price suitable for you.</p>
                            <a href="../php/Builder.php" class="buttons">The Builder
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="srv">
                        <div class="text">
                            <h3>
                                <i class="fa-sharp fa-solid fa-book"></i>
                                Build Guides
                            </h3>
                            <p>Building your own PC and need ideas on where to get started? Explore our build guides which cover systems for a variety of use-cases and budgets.</p>
                            <a href="../php/Build Guides.php" class="buttons">The Build Guides
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Start Services -->
                    <div class="srv">
                        <div class="text">
                            <h3>
                                <i class="fa-solid fa-computer"></i>
                                Completed Builds</h3>
                            <p>You can now try out the completed computer and give us your opinion about this computer 
                                and about our components and your opinion on our help method.</p>
                            <a href="../php/Completed Builds.php" class="buttons">The Completed_Builds
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="srv">
                        <div class="text">
                            <h3>
                                <i class="fa-solid fa-microchip"></i>
                                Browse Products</h3>
                            <p>You can select and know all the components (such as the processor and motherboard) that you want from this list, and know their version and price.</p>
                            <a href="../php/Browse prodects.php" class="buttons">Browse Products
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    <!-- End Services -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact -->
    <div class="contact">
        <div class="container">
            <h2 class="special-heading">Contact</h2>
            <p>We are born to create.</p>
            <div class="contact-content">
                <div class="text">
                    <h3>Feel free to drop us a line at:</h3>
                    <h3><a href="mailto:CADI.GITHUB@gmail.com" class="email">CADI.GITHUB@gmail.com</a></h3>
                    <p>Find Us On Social Networks
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!-- Start Footer -->
    <div class="footer">
        <p>© 2023 <span>Cadi</span> All Right Reserved.</p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
    <script src="../JS/main.js"></script>
</body>
</html>
