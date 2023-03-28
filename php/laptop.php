<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/laptop.css">
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
    <link rel="icon" href="../images/Cadi Icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>    
    <!-- Start header -->
    <header>
        <a href="../php/main-menu.php"  class="logo"><img src="../images/Cadi Logo.png" alt="Logo"></a>
            <!-- Start Unordered list  -->
         
            <ul class="navbar">
                <li><a href="../php/Builder.php">Builder 
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </a></li>
                <li><a href="../php/Build Guides.php">Build Guides
                    <i class="fa-sharp fa-solid fa-book"></i>
                </a></li>
                <li><a href="../php/Completed Builds.php">Completed Builds
                    <i class="fa-solid fa-computer"></i>
                </a></li>
                <li><a href="../php/contact.php">Contact
                    <i class="fa-solid fa-envelope"></i>
                </a></li>
            </ul>
            
            
<!-- Check if the user is logged in-->
<div class="main">
            <?php
            
            // Check if the user is logged in
            
            if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {
                // If the user is logged in, hide the Login and Register links
                echo 'Welcome :' . $_SESSION["user_name"] . '<br>';
    //             echo '<div  id="menu-icon">'.
    // '<a href="../php/logout.php" class="user"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>'.
    // '</div>';
                
            ?>
            
                
                 <a href="../php/logout.php" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                
                
            
            <?php
            } else {
                // If the user is not logged in, display the Login and Register links
            ?>
            <a href="../php/login.php" class="user"><i class="fa-solid fa-user"></i>Login</a>
            <a href="../php/register.php" class="user"><i class="fa-solid fa-user-plus"></i>Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <?php
            }
            ?>
        </div>
        <!--Start Search Bar-->
<div class="Search-Bar">
    
<form action="search.php" method="get" class="search">
    <input type="text" name="query" class="input" placeholder="Search">
    <button class="btn" type="submit">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>


</div>
    
    <!--End Search Bar-->
    </header>>
    <!-- End header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Laptops</h1>
            <p>Here you can Choose What Laptop you want.</p>
        </div>
    </div>
    <!-- End Landing Section -->
        <!-- Start Services -->
        <div class="services">
            <div class="container">
                <h2 class="special-heading">Laptops</h2>
                <p>let's start to learn to be professional user</p>
                <div class="pc">
                    <h3>What is a Laptop</h3>
                    <p>It's bassiclly a PC but much smaller and<br>you can carry it out with you</p>
                </div>
            </div>
        </div>
        <!-- Start Completed Builds -->
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2 class="label">Gaming Laptops</h2>
        <div class="com_builds">
            <div class="container">
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                              ASUS ROG Strix Scar 15
                            </h5>
                        </div>
                        <img src="../images/gaminglaptop3.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            AMD Ryzen 9 5900HX<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB M.2 NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            GeForce RTX RTX 3080 <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            5.6" 300Hz IPS Type FHD Display<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             Acer Nitro 5 
                            </h5>
                        </div>
                        <img src="../images/gaminglaptop2.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel Core i7-11800H<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            8GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            512GB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            GeForce RTX 3050 Ti Laptop GPU <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6" FHD 144Hz IPS Display<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             MSI GF63
                            </h5>
                        </div>
                        <img src="../images/gaminglaptop1.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel Core i7-11800H<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            512GB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            GeForce RTX 3050 Ti Laptop GPU <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6" FHD 144Hz IPS Display<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
            
        
         <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             Asus ROG Zephyrus G14:
                            </h5>
                        </div>
                        <img src="../images/1R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            AMD Ryzen 9 5900HS<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB PCIe NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            NVIDIA GeForce RTX 3060  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            14-inch FHD (1920 x 1080) IPS-level panel with 120Hz refresh rate<br><br>
                            </h6>
                        </div>
                    </div></p>
        </div>
         <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                          Alienware m15 R4:
                            </h5>
                        </div>
                        <img src="../images/2R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10870H <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB PCIe NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            NVIDIA GeForce RTX 3070 <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6-inch FHD (1920 x 1080) 144Hz refresh rate <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
        <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                          Razer Blade 15
                            </h5>
                        </div>
                        <img src="../images/3R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10875H <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           1TB PCIe M.2 SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           NVIDIA GeForce RTX 3080  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6-inch QHD (2560 x 1440) 240Hz refresh rate  <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                
                 <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                          MSI GS65 Stealth Thin
                            </h5>
                        </div>
                        <img src="../images/4R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10875H <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           512GB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           NVIDIA GeForce RTX 2060  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6-inch FHD (1920 x 1080) 144Hz refresh rate   <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                        Dell G5 15 SE
                            </h5>
                        </div>
                        <img src="../images/5R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        IAMD Ryzen 7 4800H <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           512GB PCIe  NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           AMD Radeon RX 5600M   <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6-inch FHD (1920 x 1080) 144Hz refresh rate   <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                 <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                        Asus ROG Strix Scar III
                            </h5>
                        </div>
                        <img src="../images/6R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-9750H  <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           1TB PCIe NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           NVIDIA GeForce RTX 2070   <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6-inch FHD (1920 x 1080) 240Hz refresh rate   <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
       <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                       HP Omen 15
                            </h5>
                        </div>
                        <img src="../images/7R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10750H   <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           1TB PCIe NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                          NVIDIA GeForce RTX 2070  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                           15.6-inch FHD (1920 x 1080) 144Hz refresh rate   <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                      Acer PredatorTriton500
                            </h5>
                        </div>
                        <img src="../images/8R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10750H   <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           512GB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                          NVIDIA GeForce RTX 2070 Max-Q  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                        15.6-inch FHD (1920 x 1080) 300Hz refresh rate    <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
        <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                      Razer Blade 15
                            </h5>
                        </div>
                        <img src="../images/9R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                        Intel Core i7-10750H   <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB DDR4  <br><br>
                            <b><font color="#000000">Storage:</font></b>
                           512GB PCLE NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                          NVIDIA GeForce RTX 3070  <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                       15.6-inch QHD (2560 x 1440) 165Hz refresh rate    <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
               </div> 
        </div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2 class="label">WORKSTATION LAPTOPS</h2>
      <div class="com_builds">
            <div class="container">
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                      Dell Precision 5570
                            </h5>
                        </div>
                        <img src="../images/11R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                      12th Gen Intel Core i7-12700H   <br><br>
                            <b><font color="#000000">Memory:</font></b>
                            32 GBDDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                          512GB SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                         NVIDIA GeForce RTX A1000 <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                    15.6" FHD+ 1920 x 1200, 60Hz     <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
         
       <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                            HP ZBook Studio G7
                            </h5>
                        </div>
                        <img src="../images/13R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            10th Gen Intel Core i9-10885H<br><br>
                            <b><font color="#000000">Memory:</font></b>
                           16 GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            512GB SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           NVIDIA Quadro RTX 5000 <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            15.6" FHD (1920 x 1080) IPS Anti-Glare <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
        <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                           MSI WS66
                            </h5>
                        </div>
                        <img src="../images/14R.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 10 PRO<br><br>
                            <b><font color="#000000">Processor:</font></b>
                           10th Gen Intel Core i9-11900HK<br><br>
                            <b><font color="#000000">Memory:</font></b>
                          32GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                           NVIDIA Quadro RTX 5000 <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                           15.6" FHD (1920x1080) IPS-Level Anti-Glare 72%NTSC Thin Bezel 240Hz  <br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
       </div>
       </div>
       
       
       
       
       
       
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2 class="label">Thin and Light laptops</h2>
        <div class="com_builds">
            <div class="container">
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             Lenovo ThinkPad X1
                            </h5>
                        </div>
                        <img src="../images/lightlaptop1.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Pro<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel EVO Core i7-1185G7<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB<br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            Intel Iris Xe Graphics <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            14.0" 1920 x 1200 IPS<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             Acer Swift 3 OLED
                            </h5>
                        </div>
                        <img src="../images/lightlaptop2.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel Evo Core i7-12700H<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            8GB DDR4 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TP NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            Intel Iris Xe Graphics <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            14" OLED 2880x1800<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                             LG gram (2022) 17Z90Q 
                            </h5>
                        </div>
                        <img src="../images/lightlaptop3.jpg" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel Evo 12th Gen i7 1260P<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB LPDDR5 <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            Intel Iris Xe <br><br>
                            <b><font color="#000000">Diplay:</font></b>
                            17" (2560 x 1600) IPS Display<br><br>
                            </h6>
                        </div>
                    </div></p>
                </div>
            </div>
        </div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <!-- End Main Components -->
    </section>
    <!-- Start Footer -->
    <div class="footer">
        <p>© 2021 <span>Cadi</span> All Right Reserved.</p>
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <script src="../JS/Completed Builds.js"></script>
</body>
</html>