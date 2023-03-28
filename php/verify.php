<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verification_code = $_POST["verification_code"];
    $stored_code = $_SESSION["verification_code"];
    if ($verification_code == $stored_code) {
        // verification code is correct, store user data in database
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
        $city = $_SESSION["city"];
        $phone = $_SESSION["phone"] ;
        $gender = $_SESSION["gender"] ;
        // add any other fields you want to collect
        
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $conn = mysqli_connect('localhost', 'id20451569_cadi', 'qzpm_QZPM_10', 'id20451569_cadi_db');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
        $query = "INSERT INTO users (name, email, password, city, phone, gender  ) VALUES ('$name', '$email', '$password','$city',
        '$phone','$gender')";
        mysqli_query($conn, $query);

        // redirect to login page
        header("Location: main-menu.php");
        exit();
    } else {
        // verification code is incorrect, show error message
        $error_message = "Invalid verification code.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Page</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/verifycode.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Goodle Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
</head>
<body>
    <!-- Start Header -->
    <div class="container">
        <div class="header">
            <a href="../Cadi.github.io/index.html" class="back"> <i class="fa-solid fa-backward"></i>
                Back 
            </a>
            <img class="logo" src="../images/Cadi Logo.png" alt="">
        </div>
    </div>
    <!-- End Header -->
<!-- HTML form for entering verification code -->
<div class="containerform">
<div class="spaceup"></div>
<div class="formfather">
    <p class="para3">Account Verify</p>
<!-- HTML verification code entry form -->
<form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="verification_code" class="label1">Verification Code:</label>
    <input type="text" id="verification_code" name="verification_code" required class="input1">

    <?php if (isset($error_message)) {
        echo "<p style='color: red'>$error_message</p>";
    } ?>

    <button type="submit" class="buttons">Submitt</button>
</form>
</div>
</div>
    <!-- End Password Reset -->
</body>
</html>
