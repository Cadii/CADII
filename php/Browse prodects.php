<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Browse Prodects</title>
     <!-- Main Template CSS File -->
     <link rel="stylesheet" href="../css/Browse products.css">
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
     <div class="browse">
        <div class="producr">
        <?php
            $mysqli =new mysqli('localhost','id20451569_cadi_db','qzpm_QZPM_10')or die($mysqli->connect_error); 
            $table='cpu';
            $res=$mysqli->query("SELECT * FROM $table");
             /*
            while($data =$res->fetch_assoc())
            {
               echo "$data['c'pu_name']";
                echo "$data['cores']";
                echo "$data['clock']";
                echo "$data['watt']'";
                echo "$data['price']";
                echo "<img src='{$data['cpu_name']}'/>";
            }
            */
        ?>

        </div>

    </div>
</body>
</html>