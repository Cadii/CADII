<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Memory.css">
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
                <h1>Memory</h1>
                <p> Hello, We are Cadi  - And here is a full guide about Memory</p>
            </div>
        </div>
    <!-- End Landing Section -->
                    <!-- Start Services -->
<div class="services">
    <div class="container">
        <h2 class="special-heading">Memory</h2>
        <p>let's start to learn to be professional user</p>
        <div class="pc">
            <h3>What is the Memory and its Usage?</h3>
            <p>Memory is a computer hardware component that stores temporary data being used by the CPU. Memory usage is the amount of memory being used by a program or process while it's running. Having enough memory is important to ensure smooth performance.</p>
        </div>
    </div>
</div>
<!-- End Services -->
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
<b>
                <h3>-Corsair Vengeance LED<br>
<br>
<br>

<center>
 <h3> Review</h3>
</center>

                <p><img src="../images/1.png" alt="CPU" class="img"></p>
                <p>
<span style="color: red;">SPECIFICATIONS:</span>

<br>
Type: DDR4 
<br>
Capacity: 16GB Kit (2 x 8GB)
<br>
 Speed: 3466MHz
<br><br>
<span style="color: red;">REASONS TO BUY:</span>
<br>
+Great overclocking performance
<br>
+Vibrant LED
<br><br>
<span style="color: red;">REASONS TO AVOID:</span>

<br>
-Pricey
<br>
-Need BIOS update to run at 3200MHz
</p>
            </div>
<br>
<br>
<br>


            <div class="feat">
                <h3>
-Kingston HyperX Fury
 <br></h3>
<br>
<br>

<center>
 <h3> Review</h3>
</center>
                <p><img src="../images/2.png" alt="CPU" class="img"></p>
                <p>
<span style="color: red;">SPECIFICATIONS:</span>
<br>
Type: DDR4
<br>
Capacity: 4GB, 8GB, 16GB, 32GB
<br>
Speed: up to 3733MHz
<br>
<Br>

<span style="color: red;">REASONS TO BUY:</span>
<br>
+Affordable at lower speeds
<br>
+Strong performance
<br><br>
<span style="color: red;">REASONS TO AVOID:</span>
<br>
-A bit slow
<br>
-3733MHz speed is pricey


</p>


<br>
<br>
<br>










            </div><div class="feat">
                <h3>-Corsair Dominator Platinum RGB
<br>

<br>
<br>

</h3>
<center>
 <h3> Review</h3>
</center>
                <p><img src="../images/3.png" alt="CPU" class="img"></p>
                <p>
<span style="color: red;">SPECIFICATIONS:</span>
<br>
Type: DDR4
<br>
Capacity: 16GB (2 x 8GB)
<br>
Speed: 3000MHz
<br><br>

<span style="color: red;">REASONS TO BUY:</span>
<br>
+Great performance
<br>
+Looks great
<br>
<span style="color: red;">REASONS TO AVOID:</span>
<br>
-Not compatible with Ryzen
<br>
-Not high quality enough for the price
</p>

<br>
<br>
<br>

            </div><div class="feat">

                <h3>    -HyperX Fury Beast RGB    <br></h3>
<br>
<br>

<center>

 <h3> Review</h3>
</center>
                <p><img src="../images/4.png" alt="CPU" class="img"></p>
                <p>
<span style="color: red;">SPECIFICATIONS:</span>
<br>
Type: DDR4
<br>
Capacity: 4GB to 32GB single modules, up to 128GB kit configurations
<br>
Speed: 3733MHz
<br>
<br>
<span style="color: red;">REASONS TO BUY:</span>
<br>
+Great RGB
<br>
+Fast
<br>
<br>
<span style="color: red;">REASONS TO AVOID:</span><br>
-Choppy RGB lighting
<br>
-Gigabyte and MSI RGB support doesn't always work
</p>

<br>
<br>
<br>

            </div>
            <div class="feat">
                <h3> - G.Skill Trident Z RGB DC<br>
<br>
<br>

         </h3>
<center>
 <h3> Review</h3>
</center>
                <p><img src="../images/5.png" alt="CPU" class="img"></p>
                <p>
<span style="color: red;">SPECIFICATIONS:</span>
<br>
Type: DDR4
<br>
Capacity: 64GB (2x32GB)
<br>
Speed: 3200MHz
<br><br>
<span style="color: red;">REASONS TO BUY:</span>
<br>
+Twice the number of memory chips
<br>
+Great build quality
<br><br>
<span style="color: red;">REASONS TO AVOID:</span>
<br>
-Only compatible with select Z390 motherboards
<br>
-RGB can be a hit or miss
</b>
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