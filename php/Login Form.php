<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Login Form.css">
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
            <a href="../html/main-menu.html" class="back"> <i class="fa-solid fa-backward"></i>
                Back 
            </a>
            <img class="logo" src="../images/Logo of us.png" alt="">
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Login form -->
    <div class="containerform">
        <div class="spaceup"></div>
        <div class="formfather">
            <!-- Define Form Name -->
            <p class="para3">Login Form <i class="fa-solid fa-user"></i></p>
            <form class="form"name="login" method="post" action="login.php" onsubmit="return validateForm()">
                <!-- Start of Labels and inputs -->
                <label class="label1">Email</label>
                <input type="email" class="input1" name="email" required> <br> <br>
                <label class="label1">Password</label> 
                <input type="password" class="input2" required name="password"> <br> <br> 
                <input type="submit" required class="buttons" value="Login" name="submit"> <br>
                <!-- End of Labels and inputs -->
                <div class="space"></div> <br>
                <a href="../html/Lost Password.html" class="lostpass">Forgot Password?</a>
                <h3 class="header3">Not a member?</h3> <br>
                <a href="../html/Registertion Form.html" class="register">Register</a>
            </form>
        </div>
    </div>
    <!-- End Login form -->

    
</body>
</html>
