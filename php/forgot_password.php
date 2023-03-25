<?php
require_once('conf.php');
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0){
        echo "This email is not registered with us";
    }else{
        $verification_code = rand(100000, 999999);
        $query = "UPDATE users SET verification_code='$verification_code' WHERE email='$email'";
        mysqli_query($conn,$query);
        $to = $email;
        $subject = "Password Reset Verification Code";
        $message = "Your verification code for resetting password is ".$verification_code;
        $headers = "From: no-reply@example.com\r\n";
        mail($to, $subject, $message, $headers);
        header("Location: verify_code.php?email=$email");
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/lost Password.css">
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
    <!-- Start Header -->
    <div class="container">
        <div class="header">
            <a href="../php/login.php" class="back"> <i class="fa-solid fa-backward"></i>
                Back 
            </a>
            <img class="logo" src="../images/Logo of us.png" alt="">
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Password Reset -->
    <div class="containerform">
        <div class="spaceup"></div>
        <div class="formfather">
            <p class="para3">Password Reset</p>
            <form method="POST" action="" class="form">
                <h3 class="header3">Enter E-mail?</h3> <br>
                <input type="text" name="email" required class="input1" placeholder="Enter your email"> <br> <br>
                <input type="submit" required class="buttons" value="Send verification code"> <br>
                <div class="space"></div> <br>
            </form>
        </div>
    </div>
    <!-- End Password Reset -->
    </body>
</html>

