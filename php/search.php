<?php
$servername = "localhost";
$username = "id20451569_cadi";
$password = "qzpm_QZPM_10";
$dbname = "id20451569_cadi_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$search = isset($_GET['query']) ? $_GET['query'] : "";

// // Search in components table
// $sql = "SELECT * FROM components WHERE component_name LIKE '%$search%'";
// $result = $conn->query($sql);

// Search in cpu table
$sql_cpu = "SELECT * FROM cpu WHERE cpu_name LIKE '%$search%'";
$result = $conn->query($sql_cpu);

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/search.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Goodle Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
    <!-- Add icon for website-->
    <link rel="icon" href="images/Cadi Icon.icon">
</head>
<body>
    <div class="container">
        <div class="space"></div>
        <div class="head-name">
            <p></p>
            <h2>Search Results</h2>
            <!--Start Search Bar-->
            <div class="Search-Bar">
                <form action="search.php" method="get" class="search">
                    <input type="text" name="query" class="input" placeholder="Search" value="<?php echo $search; ?>">
                    <button class="btn" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <!--End Search Bar-->
        </div>
    </div>
    
    <!-- Start Main Components -->
    <div class="components">
        <div class="containerr">
            <?php
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <div class="feat">
                <h3><?php echo $row["cpu_name"]; ?></h3>
                <p>
                    <!--<a href="details.php">More Details-->
                    <!--    <i class="fa-solid fa-circle-info"></i>-->
                    <!--</a>-->
                    <?php
                    echo "<a href='details.php?id=" . $row["cpu_id"] . "'>" ."More Details". "</a><br>"; ?>
                    </p>
                    
                
            </div>
            <?php
                }
            } else {
                echo "No results found.";
            }
            ?>
        </div>
    </div>

	<!-- Start Footer -->
    <!--<div class="footer">-->
    <!--    <p>© 2023 <span>Cadi</span> All Right Reserved.</p> -->
    <!--    <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>-->
    <!--</div>-->
    <!-- End Footer -->
    <!--<script src="../JS/main.js"></script>-->
</body>
</html>