<?php
// Database connection information
$servername = "localhost";
$username = "id20451569_cadi";
$password = "qzpm_QZPM_10";
$dbname = "id20451569_cadi_db";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
