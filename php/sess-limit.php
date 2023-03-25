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
