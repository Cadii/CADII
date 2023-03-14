<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Create a PDO connection to the database
	$dsn = "mysql:host=localhost;dbname=mohamed2;charset=utf8mb4";
	$db_username = "root";
	$db_password = "";
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	try {
		$pdo = new PDO($dsn, $db_username, $db_password, $options);

		// Retrieve the user data from the database
		$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
		$stmt->execute(array($email));
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user && password_verify($password, $user["password"])) {
			// Save the user data to the session
			$_SESSION["user_id"] = $user["id"];
			$_SESSION["user_email"] = $user["email"];
			$_SESSION["user_name"] = $user["name"];

			// Redirect to a protected page
			header("Location: Builder.php");
			exit;
		} else {
			echo "<p class='error'>Invalid email or password.</p>";
		}
	} catch(PDOException $e) {
		echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
	}

	// Close the database connection
	$pdo = null;
}
?>

