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