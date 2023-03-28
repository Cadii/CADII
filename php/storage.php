<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/storage.css">
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
    <link rel="icon" href="../images/Cadi Icon.png">
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
<!-- Check if the user is logged in-->
<div class="main">
    <?php
        // Check if the user is logged in
        if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {
        // If the user is logged in, hide the Login and Register links
            echo 'Welcome :' . $_SESSION["user_name"] . '<br>';
            //echo '<div  id="menu-icon">'.
            // '<a href="../php/logout.php" class="user"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>'.
            // '</div>';
    ?> 
    <a href="../php/logout.php" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
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
    <form action="search.php" method="get" class="search">
        <input type="text" name="query" class="input" placeholder="Search">
        <button class="btn" type="submit">
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
                <h1>Storage</h1>
                <p> Hello, We are Cadi  - And here is a full guide about Storages</p>
            </div>
        </div>
    <!-- End Landing Section -->
                    <!-- Start Services -->
<div class="services">
    <div class="container">
        <h2 class="special-heading">Storage</h2>
        <p>let's start to learn to be professional user</p>
        <div class="pc">
            <h3>What is the Storage and its Usage?</h3>
            <p>The Storage is one of the main components of the PC, 
            Storage devices like hard disks are needed to install operating systems,
            programs and additional storage devices,
            and to save documents. Without devices like HDDs that can retain data after they have been turned off,
            computer users would not be able to store programs or save files or documents to their computers</p>
        </div>
    </div>
</div>
<!-- End Services -->
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
                <h3><a href="#CPU" class="link">"Western Digital Blue " Review</a></h3>
                <p><img src="../images/wd-blue.jpg" alt="CPU" class="img"></p>
                <p>SPECIFICATIONS</p>
                <P> Interface: SATA 6Gbps
                    Capacity: 500GB – 6TB
                    Cache: 64MB
                    RPM: 5,400 – 7,200
                </P>

                <p>REASONS TO BUY</p>
                <p>
                +An option for every budget
                +Faster option available
                </p>

                <p>REASONS TO AVOID</p>
                <p>
                -Less value from smaller drives
                </p>
            </div>

            <div class="feat">
                <h3><a href="#CPU" class="link">"Seagate Firecuda Desktop" Review</a></h3>
                <p><img src="../images/firecuda.jpg" alt="CPU" class="img"></p>
                <p>SPECIFICATIONS</p>
                <P> Interface: SATA 6Gbps
                    Capacity: 1TB – 2TB + 8GB
                    Cache: 64 MB
                    RPM: 7,200
                </P>

                <p>REASONS TO BUY</p>
                <p>
                +NAND-boosted performance
                +An already fast platter
                </p>

                <p>REASONS TO AVOID</p>
                <p>
                -No competition
                </p>
            </div>

            <div class="feat">
                <h3><a href="#CPU" class="link">"WD VelociRaptor" Review</a></h3>
                <p><img src="../images/WD-VelociRaptor.jpg" alt="CPU" class="img"></p>
                <p>SPECIFICATIONS</p>
                <P> Interface: SATA 6Gbps
                    Capacity: 250GB – 1TB
                    Cache: 64MB
                    RPM: 10,000
                </P>

                <p>REASONS TO BUY</p>
                <p>
                +Insane HDD speed
                +Built-on cooler
                </p>

                <p>REASONS TO AVOID</p>
                <p>
                -Priced like an SSD
                </p>
            </div>

            <div class="feat">
                <h3><a href="#CPU" class="link">"Seagate BarraCuda" Review</a></h3>
                <p><img src="../images/baracuda.jpg" alt="CPU" class="img"></p>
                <p>SPECIFICATIONS</p>
                <P> Interface: SATA 6Gbps
                    Capacity: 2 – 3TB
                    Cache: 64MB
                    RPM: 7,200
                </P>

                <p>REASONS TO BUY</p>
                <p>
                    +Low cost
                    +Fast spinning disks
                </p>

                <p>REASONS TO AVOID</p>
                <p>
                    - Limited cache
                </p>
            </div>

            <div class="feat">
                <h3><a href="#CPU" class="link">"Toshiba X300" Review</a></h3>
                <p><img src="../images/toshiba-x300.jpg" alt="CPU" class="img"></p>
                <p>SPECIFICATIONS</p>
                <P> Interface: SATA 6Gbps
                    Capacity: 4 – 8TB
                    Cache: 128MB
                    RPM: 7,200
                </P>

                <p>REASONS TO BUY</p>
                <p>
                +Massive storage
                +High speeds
                </p>

                <p>REASONS TO AVOID</p>
                <p>
                -Short warranty
                </p>
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