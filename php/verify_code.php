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
        header("Location: reset_password.php?email=$email");
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
