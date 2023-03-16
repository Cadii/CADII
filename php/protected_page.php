<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
	header("Location: index.php");
	exit;
}

$user_id = $_SESSION["user_id"];
$user_email = $_SESSION["user_email"];
$user_name = $_SESSION["user_name"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Protected Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Welcome, <?php echo $user_name; ?></h1>
	<p>Your email is: <?php echo $user_email; ?></p>
	<p>Your user ID is: <?php echo $user_id; ?></p>
	<form action="logout.php" method="post">
		<input type="submit" value="Logout">
	</form>
</body>
</html>
