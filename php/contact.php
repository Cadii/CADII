<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/contact.css">
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
    <title>Contact Us</title>
</head>
  <body>
      <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        // Validate form data
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo 'Please fill all fields.';
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Invalid email address.';
            exit;
        }
        
        // Send email
        $to = 'cadi.github@gmail.com';
        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $message_body = "
            Name: $name  
            phone Number: $phone
            Email: $email
            Subject: $subject :
            $message";
        mail($to, $subject, $message_body, $headers);
    
        echo 'Your message has been sent.';
    }
    ?>
    <!--<div class="contact">-->
    <!--<h1>Contact Us</h1>-->
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
        <button class="btnn" type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>
<!--End Search Bar-->
</header>
<!-- End header -->
    <div class="container">
        <div class="contact">
            <div class="left"></div>
            <div class="right">
                <h2>Contact Us</h2>
                <form action="../php/contact.php" method="POST">
                <input type="text" class="field" name="name" placeholder="Your Name" required>
                <input type="email" class="field" name="email" placeholder="Your Email" required>
                <input type="text" class="field" name="phone" placeholder="Your Phone" required>
                <input type="text" class="field" name="subject" placeholder="Subject" required>
                <textarea class="field area" name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send</button>
                </form>
                
            </div>
        </div>
    </div>
    <!-- Start Footer -->
    <div class="footer">
        <p>You can find <span>Cadi</span> here
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-discord"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
    <script src="../JS/main.js"></script>
    </div>
    
  </body>
</html>
