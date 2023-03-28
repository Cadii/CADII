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
    <title>Builder</title>
     <!-- Main Template CSS File -->
     <link rel="stylesheet" href="../css/Builder.css">
     <!--<link rel="stylesheet" href="../css/Cadi.css">-->
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
            <h1>Builder</h1>
            <p>Lets start to build your own PC.</p>
        </div>
    </div>
    <!-- End Landing Section -->

    <!-- Chooseing main Components -->
    <h1>Choose The Main Components</h1>
    <div class="builder-main">
        <div class="part">
            <div class="part-name">
                CPU:
            </div>

            <div class="choose-btn">
                <button type="button">
                    <a href="../php/Browse prodects.php">Choose a CPU</a>
                </button>
            </div>

            <div class="part-info">


            </div>
            <div class="remove-btn">
            <button type="button">Remove</button>
            </div>
        </div>
            
            <div class="part">
                <div class="part-name">
                    MotherBoard:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a MotherBoard</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    GPU:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a GPU</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    RAM:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a RAM</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Storage:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Storage</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Power Supply:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Power Supply</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Case:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Case</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Monitor:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Monitor</a>
                    </button>
                </div>
                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
    </div>

    <!-- Chooseing The Accessories -->
    <h1>Choose The Accessories</h1>
    <div class="builder-accessorie">
    
    
            <div class="part">
                <div class="part-name">
                    KeyBoard:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a KeyBoard</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Mouse:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Mouse</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    HeadPhones / Speakers:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a HeadPhones / Speakers</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
            <div class="part">
                <div class="part-name">
                    Webcam:
                </div>

                <div class="choose-btn">
                    <button type="button">
                        <a href="../php/Browse prodects.php">Choose a Webcam</a>
                    </button>
                </div>

                <div class="part-info">


                </div>
                <div class="remove-btn">
                <button type="button">Remove</button>
                </div>
            </div>
    </div>
<!-- Start Footer -->
    <div class="footer">
        <p>© 2023 <span>Cadi</span> All Right Reserved.</p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
    <script src="../JS/main.js"></script>
</body>
</html>