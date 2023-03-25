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

        $conn = mysqli_connect('localhost', 'id20451569_cadi', 'qzpm_QZPM_10', 'id20451569_cadi_db');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
        $query = "INSERT INTO users (name, email, password, city, phone, gender  ) VALUES ('$name', '$email', '$password','$city',
        '$phone','$gender')";
        mysqli_query($conn, $query);

        // redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // verification code is incorrect, show error message
        $error_message = "Invalid verification code.";
    }
}
?>

<!-- HTML verification code entry form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="verification_code">Verification Code:</label>
    <input type="text" id="verification_code" name="verification_code" required>

    <?php if (isset($error_message)) {
        echo "<p style='color: red'>$error_message</p>";
    } ?>

    <button type="submit">Submitt</button>
</form>
