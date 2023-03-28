
<?php
require_once('conf.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];
}



if (isset($_POST['verification_code'])) {
    $verification_code = $_POST['verification_code'];
    $query = "SELECT * FROM users WHERE email='$email' AND verification_code='$verification_code'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        header("Location: ../php/reset_password.php?email=$email");
        exit;
    } else {
        $errorMessage = "Invalid verification code";
    }
}
?>

<!-- HTML form for entering verification code -->
<form method="POST">
    <label for="verification_code">Verification code:</label>
    <input type="text" id="verification_code" name="verification_code" required>
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <button type="submit" name="submit">Submit</button>
</form>

<?php if (isset($errorMessage)) echo "<p style='color:red;'>$errorMessage</p>"; ?>


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
<form method="POST" class="form"><br><br>
    <label for="verification_code" class="label1">Verification code</label><br><br>
    <input type="text" id="verification_code" name="verification_code" required class="input1">
    <input type="hidden" name="email" value="<?php echo $email; ?>"><br><br>
    <button type="submit" name="submit" class="buttons">Submit</button>
</form>
</div>
</div>
    <!-- End Password Reset -->
</body>
</html>

<?php if (isset($errorMessage)) echo "<p style='color:red;'>$errorMessage</p>"; ?>
