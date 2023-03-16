
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
	header("Location: login form.php");
	exit;
}

$user_id = $_SESSION["user_id"];
$user_email = $_SESSION["user_email"];
$user_name = $_SESSION["user_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder</title>
     <!-- Main Template CSS File -->
     <link rel="stylesheet" href="../css/Builder.css">
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
<form method="post" action="logout.php">
<input type="submit" name="logout" value="Logout">
</form>
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
            <a href="../php/Login Form.php" class="user"><i class="fa-solid fa-user"></i>Login</a>
            <a href="../php/Registertion Form.php" class="user"><i class="fa-solid fa-user-plus"></i>Register</a>
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

    <!-- Header of the page -->
    <div class="header">

    </div>

    <!-- Chooseing main Components -->
    <div class="builder-main">
        <h1>Choose The Main Components</h1>
        <div class="part">
            <div class="part-name">

            </div>

            <div class="choose-btn">

            </div>

            <div class="part-info">


            </div>

            <div class="remove-btn">

            </div>
        </div>

    </div>

    <!-- Chooseing The Accessories -->

    <div class="builder-accessorie">
        <div class="part">
            <div class="part-name">

            </div>

            <div class="choose-btn">

            </div>

            <div class="part-info">


            </div>

            <div class="remove-btn">

            </div>
        </div>
    </div>

    <!-- Header of the page -->
    <div class="footer"><h1>Hello There This page is being constructed</h1></div>
    <div class="footer">

    </div>
</body>
</html>