<!DOCTYPE html>
<html>
  <head>
    <title>PC Builder</title>
 <style>
 
    
 
    
      /* Set default font family and size */
      body {
        font-family: "Segoe UI", sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
      }
      
      /* Add background image and set background color */
      body {
        /*background: url("https://i.stack.imgur.com/p9mUO.jpg") center center fixed;*/
        /*background-size: cover;*/
        background-color: #eee;
      }
      
      .details{
          background-color: #1189c5;
          border-radius: 10px;
          padding: 15px;
          width: 40%;
          margin: auto;
      }
      
      .head{
        color: #eee;
        margin: auto;
        margin-left: 40%;
        font-size: 50px;
        opacity: 0.8;
      }
      
      /* Set styles for the heading */
      h1 {
        font-size: 2.5em;
        font-weight: bold;
        color: #0077be;
        /*background-color: #fff;*/
        margin: 0;
        padding: 10px;
        text-align: center;
      }
      
      /* Set styles for the table */
      table {
        width: 100%;
        max-width: 600px;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease-in-out;
        border: 2px solid transparent;
        border-radius: 15px;
      }
      
      /* Set styles for table cells */
      td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        vertical-align: top;
      }
      
      /* Set styles for table headers */
      th {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
        background-color: #f5f5f5;
      }
      
      /* Set styles for links */
      a {
        color: #0077be;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
      }
      
      a:hover {
        color: #004466;
      }
      
      /* Add animation to table on hover */
      table:hover {
        transform: scale(1.02);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
      }
      
      /* Add animation to links on hover */
      a:hover {
        color: #004466;
        text-shadow: 0 0 5px #0077be;
      }
      
      /* Add 3D effect to table */
      table {
        perspective: 1000px;
      }
      
      td, th {
        transform-style: preserve-3d;
        transition: all 0.3s ease-in-out;
      }
      
      td:hover, th:hover {
        transform: rotateY(10deg);
        text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
      }
      
      /* Add styles for responsive tables */
      @media screen and (max-width: 767px) {
        table {
          font-size: 0.8em;
        }
        
        th, td {
          display: block;
        }
        
        th {
          text-align: left;
        }
        
        td {
          border: none;
          position: relative;
          padding-left: 50%;
        }
        
        td:before {
          content: attr(data-label);
          position: absolute;
          left: 0;
        }
      }
      .container{
          background-color: #f6f6f6;
          padding: 25px;
          /*#1189c5*/
      }
      
      
      /* Start Footer */
.footer{
    background-color: #2c4755;
    color: white;
    padding: 30px 10px;
    text-align: center;
    font-size: 20px;
    height: 85px;
}
.footer span{
    color: aqua;
    font-weight: bold;
}
/* End Footer */
.top{
    border: 2px solid #eee;
    color: #eee;
    border-radius: 50px;
    background-color: #2c4755;
    margin: 5px;
    padding: 10px;
    float: right;
    transition: 0.3s;
}
.top:hover{
    border: 2px solid #2c4755;
    background-color: #eee;
    color: #2c4755;
    cursor: pointer;
}
    </style>

  </head>
  <body>
       <!-- Start header -->
<!-- <header>-->
<!--    <a href="../php/main-menu.php"  class="logo"><img src="../images/Cadi Logo.png" alt="Logo"></a>-->
        <!-- Start Unordered list  -->
<!--        <ul class="navbar">-->
<!--                <li><a href="../php/Builder.php">Builder -->
<!--                    <i class="fa-solid fa-screwdriver-wrench"></i>-->
<!--                </a></li>-->
<!--                <li><a href="../php/Build Guides.php">Build Guides-->
<!--                    <i class="fa-sharp fa-solid fa-book"></i>-->
<!--                </a></li>-->
<!--                <li><a href="../php/Completed Builds.php">Completed Builds-->
<!--                    <i class="fa-solid fa-computer"></i>-->
<!--                </a></li>-->
<!--                <li><a href="../php/contact.php">Contact-->
<!--                    <i class="fa-solid fa-envelope"></i>-->
<!--                </a></li>-->
<!--        </ul>-->
<!-- Check if the user is logged in-->
<!--<div class="main">-->
<!--    <?php-->
        // Check if the user is logged in
<!--        if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {-->
        // If the user is logged in, hide the Login and Register links
<!--            echo 'Welcome :' . $_SESSION["user_name"] . '<br>';-->
            //echo '<div  id="menu-icon">'.
            // '<a href="../php/logout.php" class="user"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>'.
            // '</div>';
<!--    ?> -->
<!--    <a href="../php/logout.php" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>-->
<!--    <?php-->
<!--        } else {-->
            // If the user is not logged in, display the Login and Register links
<!--    ?>-->
<!--        <a href="../php/login.php" class="user"><i class="fa-solid fa-user"></i>Login</a>-->
<!--        <a href="../php/register.php" class="user"><i class="fa-solid fa-user-plus"></i>Register</a>-->
<!--        <div class="bx bx-menu" id="menu-icon"></div>-->
<!--        <?php-->
<!--        }-->
<!--        ?>-->
<!--        </div>-->
        <!--Start Search Bar-->
<!--<div class="Search-Bar">-->
<!--    <form action="search.php" method="get" class="search">-->
<!--        <input type="text" name="query" class="input" placeholder="Search">-->
<!--        <button class="btn" type="submit">-->
<!--        <i class="fa-solid fa-magnifying-glass"></i>-->
<!--        </button>-->
<!--    </form>-->
<!--</div>-->
<!--End Search Bar-->
<!--</header>-->
<!-- End header -->
    <div class="landing">
    <h1>CADI</h1
    </div>
    
    <div class="container">
        <div class="details">
            <h2 class="head">Details</h2>

<?php
$servername = "localhost";
$username = "id20451569_cadi";
$password = "qzpm_QZPM_10";
$dbname = "id20451569_cadi_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// check if the id parameter is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // fetch data from the database
    $sql = "SELECT * FROM cpu WHERE cpu_id=$id";
    $result = mysqli_query($conn, $sql);
    
    $sqlram = "SELECT * FROM ram WHERE ram_id=$id";
    $resultram = mysqli_query($conn, $sqlram);
    
    $sqlgpu = "SELECT * FROM gpu WHERE gpu_id=$id";
    $resultgpu = mysqli_query($conn, $sqlgpu);
    
      $sqlmb = "SELECT * FROM motherboard WHERE mb_id=$id";
    $resultmb = mysqli_query($conn, $sqlmb);
    
    
       $sqlcase = "SELECT * FROM pc_case WHERE case_id=$id";
    $resultcase = mysqli_query($conn, $sqlcase);
    
    
      $sqlps = "SELECT * FROM power_supply WHERE ps_id=$id";
    $resultps = mysqli_query($conn, $sqlps);
    
    
     $sqlst = "SELECT * FROM storage WHERE storage_id=$id";
    $resultst = mysqli_query($conn, $sqlst);
    
    
    //cpu
if(mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>";
   ;
    while($row = mysqli_fetch_assoc($result)) {
       
        echo "<tr><td><h2>Name</td>" ."<td>".  $row['cpu_name'] . "</h2></td></tr>";
        echo "<td><p>Cores: </td>" ."<td>". $row['cores'] . "</p></td></tr>";
        echo "<td><p>Base Clock: </td>" ."<td>". $row['clock'] . "</p></td></tr>";
        echo "<td><p>Boost Clock: </td>" . "<td>".$row['boost_clock'] . "</p></td></tr>";
        echo "<td><p>Power Consumption (TDP): </td>" ."<td>". $row['watt'] . "W</p></td></tr>";
        echo "<td><p>Socket Type: </td>" .  "<td>".$row['type'] . "</p></td></tr>";
        echo "<td><p>Price: $</td>" ."<td>" .$row['cpu_price'] . "</p></td></tr>";
      
   
    }
    echo "</table>";
}

    
    //ram
    elseif(mysqli_num_rows($resultram) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultram)) {
        echo "<tr><td><h2>Name:</h2></td><td>"  . $row['ram_name'] . "</td></tr>";
        echo "<tr><td><p>Speed:</p></td><td>" . $row['ram_speed'] . "</td></tr>";
        echo "<tr><td><p>Module:</p></td><td>" . $row['module'] . "</td></tr>";
        echo "<tr><td><p>Price: $</p></td><td>" . $row['price'] . "</td></tr>";
    }
    echo "</table>";
}


    //motherboard
    elseif(mysqli_num_rows($resultmb) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultmb)) {
        echo "<tr><td><h2>Name:</h2></td><td>" . $row['mb_name'] . "</td></tr>";
        echo "<tr><td><p>Socket:</p></td><td>" . $row['socket'] . "</td></tr>";
        echo "<tr><td><p>Form Factor:</p></td><td>" . $row['form_factor'] . "</td></tr>";
        echo "<tr><td><p>RAM Slots:</p></td><td>" . $row['ram_slots'] . "</td></tr>";
        echo "<tr><td><p>Max RAM:</p></td><td>" . $row['max_ram'] . "</td></tr>";
        echo "<tr><td><p>Price:</p></td><td>" . $row['price'] . "</td></tr>";
    }
    echo "</table>";
}
    
    //gpu
        elseif(mysqli_num_rows($resultgpu) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultgpu)) {
        echo "<tr><td><h2>Name: </td>" . "<td>" . $row['gpu_name'] . "</h2></td></tr>";
        echo "<tr><td><p>Base Clock: </td>" . "<td>" . $row['clock'] . "</p></td></tr>";
        echo "<tr><td><p>Boost Clock: </td>" . "<td>" . $row['boost_clock'] . "</p></td></tr>";
        echo "<tr><td><p>Power Consumption (TDP): </td>" . "<td>" . $row['watt'] . "W</p></td></tr>";
        echo "<tr><td><p>Price: $</td>" . "<td>" . $row['gpu_price'] . "</p></td></tr>";
    }
    echo "</table>";
}

    //power_supply
      elseif(mysqli_num_rows($resultps) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultps)) {
        echo "<tr><td><h2>Power Supply Name:</h2></td><td>" . $row['ps_name'] . "</td></tr>";
        echo "<tr><td><p>Wattage:</p></td><td>" . $row['ps_wattage'] . "</td></tr>";
        echo "<tr><td><p>Rating:</p></td><td>" . $row['rating'] . "</td></tr>";
        echo "<tr><td><p>Modular:</p></td><td>" . $row['modular'] . "</td></tr>";
        echo "<tr><td><p>Size:</p></td><td>" . $row['size'] . "</td></tr>";
        echo "<tr><td><p>Price:</p></td><td>$" . $row['price'] . "</td></tr>";
    }
    echo "</table>";
}
     
    //case
    
         elseif(mysqli_num_rows($resultcase) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultcase)) {
        echo "<tr><td><h2>Name</td>" ."<td>".  $row['case_name'] . "</h2></td></tr>";
        echo "<td><p>Type: </td>" ."<td>". $row['type'] . "</p></td></tr>";
        echo "<td><p>Price: $</td>" ."<td>" .$row['price'] . "<td>"."</p></td></tr>";
    }
    echo "</table>";
}

    //storge
    
            elseif(mysqli_num_rows($resultsg) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($resultsg)) {
        echo "<tr><td><h2>Name</h2></td><td>" . $row['storage_name'] . "</td></tr>";
        echo "<tr><td><p>Capacity</p></td><td>" . $row['capacity'] . "</td></tr>";
        echo "<tr><td><p>Type</p></td><td>" . $row['type'] . "</td></tr>";
        echo "<tr><td><p>Price</p></td><td>" . $row['price'] . "</td></tr>";
    }
    echo "</table>";
}

    
    // close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
</div>
</div>
<!-- Start Footer -->
    <div class="footer">
        <p>© 2023 <span>Cadi</span> All Right Reserved.</p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
    <script src="../JS/main.js"></script>
</body>
</html>