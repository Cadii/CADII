
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
	header("Location: login form.php");
	exit;
}

$user_id = $_SESSION["user_id"];
$user_email = $_SESSION["user_email"];
$user_name = $_SESSION["user_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder</title>
</head>
<body>
<form method="post" action="logout.php">
<input type="submit" name="logout" value="Logout">
</form>
    <h1>Hello There This page is being constructed</h1>
</body>
</html>