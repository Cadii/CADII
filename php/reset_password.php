<?php
require_once('conf.php');
if(isset($_GET['email'])){
    $email = $_GET['email'];
}
if(isset($_POST['password'])){
    $password = ($_POST['password']);
           // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET password='$password' WHERE email='$email'";
    mysqli_query($conn,$query);
    header("Location: login.php");
}
?>

<form method="POST" action="">
    <input type="password" name="password" placeholder="Enter new password">
    <input type="submit" value="Create new password">
</form>

