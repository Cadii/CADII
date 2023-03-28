<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotherBoard</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/motherboard.css">
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
                <h1>MotherBoard</h1>
                <p> Hello, We are Cadi  - And here is a full guide about MotherBoards</p>
            </div>
        </div>
    <!-- End Landing Section -->
                    <!-- Start Services -->
<div class="services">
    <div class="container">
        <h2 class="special-heading">MotherBoard</h2>
        <p>let's start to learn to be professional user</p>
        <div class="pc">
            <h3>What is the MotherBoard and its Usage?</h3>
            <p>The Motherboard is one of the main components of the PC, 
            The motherboard is the backbone that ties the computer's components together at one spot and allows them to talk to each other. Without it,
            none of the computer pieces, such as the CPU, GPU, or hard drive, could interact.
            Total motherboard functionality is necessary for a computer to work well.</p>
        </div>
    </div>
</div>
<!-- End Services -->
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
                <h3><a href="#CPU" class="link">"X670 GAMING X AX" Review</a></h3>
                <p><img src="../images/X670-GAMING.png" alt="CPU" class="img"></p>
                <p> ● Unparalleled Performance: Twin 16 +2+2 Phases Digital VRM Solution 8+8 phases 
                      phases parallel power design
                    ● Dual Channel DDR5: 4 SMD DIMMs with AMD EXPO Intel XMP Memory Module Support
                    ● Next Generation Storage: 1 PCIe 5.0 x4 and 3 PCIe 4.0 x4 M.2 Connectors
                    ● Mega-Heatpipe M.2 Thermal Guard: To Ensure VRM Power Stability 25110 PCIe 5.0 M.2 SSD Performance
                    You can <a href="https://www.gigabyte.com/Motherboard/X670-GAMING-X-AX-rev-10#kf">HERE</a> check all the info on the Gigabyte website </p>
                <p>VRM TEST:</p>
                <img src="../images/vrm-test.png">
                <p>As you can see the VRM temps are very good and ideal compared to the same price point motherboards our the high end ones like the Aorus Xtreme so the Gigabyte X670 has no issues running any AM5 CPUs
                    you can check the full review <a href="https://www.youtube.com/watch?v=UN2gkbMQ2fs&ab_channel=HardwareUnboxed" target="_blank">HERE</a></p>
                <p>Conclusion:</p>
                <p>the Gigabyte X670 gaming X is a solid one for people that want to start their AM5 new system with a board that is not expinsce yet offers you alot of capabilities to relay on it.</p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">"MotherBoard Name" Review</a></h3>
                <p><img src="../images/board3.png" alt="CPU" class="img"></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam velit officia itaque saepe quod veniam! Quia aspernatur,
                suscipit dignissimos illum blanditiis rerum saepe natus unde?</p>
            </div><div class="feat">
                <h3><a href="#CPU" class="link">"MotherBoard Name" Review</a></h3>
                <p><img src="../Mother Board page/images/board3.png" alt="CPU" class="img"></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam velit officia itaque saepe quod veniam! Quia aspernatur,
                suscipit dignissimos illum blanditiis rerum saepe natus unde?</p>
            </div><div class="feat">
                <h3><a href="#CPU" class="link">"MotherBoard Name" Review</a></h3>
                <p><img src="../images/board3.png" alt="CPU" class="img"></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam velit officia itaque saepe quod veniam! Quia aspernatur,
                suscipit dignissimos illum blanditiis rerum saepe natus unde?</p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">"MotherBoard Name" Review</a></h3>
                <p><img src="../images/board3.png" alt="CPU" class="img"></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam velit officia itaque saepe quod veniam! Quia aspernatur,
                suscipit dignissimos illum blanditiis rerum saepe natus unde?</p>
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