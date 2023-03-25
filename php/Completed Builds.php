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
    <title>Completed Builds</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Completed Builds.css">
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
        <a href="../php/main-manu.php"  class="logo"><img src="../images/Cadi Logo.png" alt="Logo"></a>
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
       <div class="main">
            <?php
            
            // Check if the user is logged in
            
            if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {
                // If the user is logged in, hide the Login and Register links
                echo 'Welcome :' . $_SESSION["user_name"] . '<br>';
                
            ?>
            <div class="bx bx-menu" id="menu-icon">
                
                 <a href="../php/logout.php" class="user"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                
                
            </div>
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
            <form action="https://google.com/search" method="get" class="search">
                <input type="text" class="input" placeholder="Search">
                <button class="btn" type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    <!--End Search Bar-->
    </header>
    <!-- End header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Completed Builds</h1>
            <p>Here you can Choose between Completed Builds.</p>
        </div>
    </div>
    <!-- End Landing Section -->
        <!-- Start Services -->
        <div class="services">
            <div class="container">
                <h2 class="special-heading">Builds</h2>
                <p>let's start to learn to be professional user</p>
                <div class="pc">
                    <h3>What is a Computer Completed Builds</h3>
                    <p>A Completed Builds is a full PC where u get to choose what is the best Completed build <br> for your own usage.</p>
                </div>
            </div>
        </div>
        <!-- Start Completed Builds -->
        <div class="com_builds">
            <div class="container">
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                Gaming RDY SLHBG221
                            </h5>
                        </div>
                        <img src="../images/Picture1.png" class="images1"> 
                        <div class="layer">
                        <h6><b><font color="#000000">Operating System:</font></b>
                            Windows 11 Home<br><br>
                            <b><font color="#000000">Processor:</font></b>
                            Intel® Core™ i7-13700KF Processor<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16GB [8GB x 2] DDR4-3600MHz <br><br>
                            <b><font color="#000000">Storage:</font></b>
                            1TB M.2 NVMe SSD<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            GeForce RTX 3070 - 8GB GDDR6 <br><br>
                            <b><font color="#000000">Motherboard:</font></b>
                            Z690 DDR4<br><br>
                            <b><font color="#000000">Power Supply:</font></b>
                            700 Watt - High Power - 80 PLUS Gold Certified
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                AMD Gaming PC Configurator 2
                            </h5>
                        </div>
                        <img src="../images/Picture2.png" class="images1"> 
                        <div class="layer">
                        <h6> 
                            <b><font color="#000000">Processor:</font></b>
                            AMD Ryzen 5 5600X Processor<br><Br>
                            <b><font color="#000000">Memory:</font></b>
                            16 GB [8 GB x2] DDR4-3200 Memory Module<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            NVIDIA GeForce RTX 3060 - 12GB GDDR6 <br><br>
                            <b><font color="#000000">Motherboard:</font></b>
                            MSI PRO B550-VC<br><br>
                            <b><font color="#000000">Power Supply:</font></b>
                            600 Watt - High Power - 80 PLUS Gold Certified<br><br>
                            <b><font color="#000000">Primary Storage:</font></b>
                            1TB WD Blue SN570 M.2 PCIe NVMe SSD
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                Intel 13th Gen Streaming PC
                            </h5>
                        </div>
                        <img src="../images/Picture3.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Processor:</font></b>
                            Intel® Core™ i7-13700KF<br><br>
                            <b><font color="#000000">Memory:</font></b>
                            16 GB [8 GB X2] DDR5-5200MHz<br><br>
                            <b><font color="#000000">Video Card:</font></b>
                            NVIDIA GeForce RTX 3070 Ti - 8GB GDDR6X<br><br>
                            <b><font color="#000000">Motherboard:</font></b>
                            Asrock Z790-C<br><br>
                            <b><font color="#000000">Power Supply:</font></b>
                            850 Watt - High Power -80 PLUS Gold Certified PCIe GEN 5<br><br>
                            <b><font color="#000000">Primary Storage:</font></b>
                            1TB WD Blue SN570 M.2 PCIe NVMe SSD
                            </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                CyberpowerPC Gaming Desktop
                            </h5>
                        </div>
                        <img src="../images/PC1.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            CyberpowerPC<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	AMD Ryzen 7 7700X 4.50 GHz<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            	16 GB DDR5 6000<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	1 TB NVMe M.2 SSD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            	NVIDIA GeForce RTX 4070 Ti 12 GB GDDR6X<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                850W 80+ Gold<br><br>
                                <b><font color="#000000">Cooling System</font></b>
                                Liquid Cool<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               AMD X670 
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                Acer Nitro
                            </h5>
                        </div>
                        <img src="../images/Pc2.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	Acer Nitro 50<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	Intel Core i5-12400F 2.50 GHz<br><br>
                                <b><font color="#000000">Installed RAM memory size</font></b>
                            	16 GB DDR4 3200<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	512 GB M.2 2280 PCIe SSD + 1 TB 7200 RPM SATA HDD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            		NVIDIA GeForce RTX 3050 8 GB GDDR6<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                500W<br><br>
                                 <b><font color="#000000">Case</font></b>
                                 Acer Nitro 50
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                MSI Gaming Desktop
                            </h5>
                        </div>
                        <img src="../images/PC3.png" class="images1"> 
                        <div class="layer">
                        <h6>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	Intel Core i7 13700KF 3.40GHz<br><br>
                                <b><font color="#000000">RAM  size</font></b>
                            		32GB DDR5 (2 x 16GB) 4800 MHz<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	2TB M.2 NVMe + 2TB 7200RPM HDD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            	NVIDIA GeForce RTX 4080 16 GB<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                750W 80+ Gold<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               Intel Z690 PRO Z690-A WIFI 
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                MSI Gaming X Desktop
                            </h5>
                        </div>
                        <img src="../images/PC3.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            MSI Gaming Desktop Aegis RS <br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	Intel Core i9 13900KF<br><br>
                                <b><font color="#000000">RAM  size</font></b>
                            		64GB DDR5 (2 x 32GB) 4800 MHz<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	2TB M.2 NVMe + 2TB 7200RPM HDD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            	NVIDIA GeForce RTX 4080 16 GB<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                750W 80+ Gold<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               Intel Z690 PRO Z690-A WIFI
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                ABS Stratos Ruby
                            </h5>
                        </div>
                        <img src="../images/PC4.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            ABS Stratos Ruby<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	AMD Ryzen 7 7700X 4.5GHz 8-Core 16-Thread<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            		Kingston 16GB DDR5 5600MHz (2x8GB)<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	1TB NVMe SSD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            	NVIDIA GeForce RTX 4070 Ti 12GB <br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                700W 80+ Gold<br><br>
                                <b><font color="#000000">Cooling System</font></b>
                                RGB AIO 240MM
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                Origin PC
                            </h5>
                        </div>
                        <img src="../images/pc5.jpg" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            Origin PC <br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11<br><br>
                                <b><font color="#000000">Processor</font></b>
                            	AMD Ryzen 9 7950x 16-Core 5.7GHz<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            		32GB DDR5 (2x16GB) 6000MHz<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	2TB OPC NVme SSD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            	AMD Radeon™ RX 7900 XTX<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                CORSAIR RM850x PLUS GOLD PSU<br><br>
                                <b><font color="#000000">Cooling System</font></b>
                                iCUE H150i ELITE CAPELLIX XT Liquid CPU Cooler<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               ASUS ROG STRIX X670E-E WiFi 
                        </h6>
                        </div>
                    </div></p>
                </div>
                
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                Budget Gaming PC
                            </h5>
                        </div>
                        <img src="../images/budgetpc.png"class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            PCSP<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11 pro <br><br>
                                <b><font color="#000000">Processor</font></b>
                            	Intel Core i3 12100F<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            	 16GB (8GBx2) 3200MHz<br><br>
                                <b><font color="#000000">Storage</font></b>
                                Crucial MX500 (500GB)<br><br>
                                <b><font color="#000000">Graphics</font></b>
                                Intel Arc A380<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                Thermaltake Smart Series 500W<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               ASRock H610M-HDV
                        </h6>
                        </div>
                    </div></p>
                </div>
             
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                ThinkStation P520 Workstation
                            </h5>
                        </div>
                        <img src="../images/thinkstation.png"class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            PCSP
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11 pro <br><br>
                                <b><font color="#000000">Processor</font></b>
                            	Intel Xeon W-2123 4-Core 3.6GHz<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            	64 GB<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	1TB NVMe PCIe M.2 SSD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            Quadro M2000 4GB (4x Display Ports)<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                900W - 92% efficient (80PLUS Platinum Certified)<br><br>
                                <b><font color="#000000">Cooling System</font></b>
                                Liquid Cool<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               ThinkStation
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                ThinkStation P530 Workstation
                            </h5>
                        </div>
                        <img src="../images/thinkstation.png"class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            PCSP
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11 pro <br><br>
                                <b><font color="#000000">Processor</font></b>
                                Intel Xeon Gold 6400 4-Core 3.6GHz<br><br>
                                <b><font color="#000000">RAM size</font></b>
                            	64 GB<br><br>
                                <b><font color="#000000">Storage</font></b>
                            	1TB NVMe PCIe M.2 SSD<br><br>
                                <b><font color="#000000">Graphics</font></b>
                            Quadro M2000 4GB (4x Display Ports)<br><br>
                                <b><font color="#000000">Power Supply</font></b>
                                900W - 92% efficient (80PLUS Platinum Certified)<br><br>
                                <b><font color="#000000">Cooling System</font></b>
                                Liquid Cool<br><br>
                               <b><font color="#000000">Motherboard</font></b>
                               ThinkStation
                        </h6>
                        </div>
                    </div></p>
                </div>
                
            
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                HP Z2 G9 Workstation 
                            </h5>
                        </div>
                        <img src="../images/Picture4.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	HP<br><br>
                                <b><font color="#000000">Personal computer design type</font></b>
                            	Mini PC<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11 Pro<br><br>
                                <b><font color="#000000">Memory Storage Capacity</font></b>
                            	512 GB<br><br>
                                <b><font color="#000000">Ram Memory Installed Size</font></b>
                            	16 GB<br><br>
                                <b><font color="#000000">Series</font></b>
                            	Z2 G9<br><br>
                                <b><font color="#000000">CPU Model</font></b>
                            	Core i7 10700<br><br>
                                <b><font color="#000000">CPU Manufacturer</font></b>
                            	Intel<br><br>
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h6>
                                Dell Precision 3650 Workstation
                            </h6>
                        </div>
                        <img src="../images/Picture5.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	Dell<br><br>
                                <b><font color="#000000">Personal computer design type</font></b>
                            	Computer Tower<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 11 Pro<br><br>
                                <b><font color="#000000">Ram Memory Installed Size</font></b>
                            	32 GB<br><br>
                                <b><font color="#000000">Series</font></b>
                            	Precision T3650 Tower Workstation<br><br>
                                <b><font color="#000000">CPU Model</font></b>
                            	Core i7 9700<br><br>
                                <b><font color="#000000">Color</font></b>
                            	Black<br><br>
                                <b><font color="#000000">Optical Storage Device</font></b>
                            	DVD+RW<br><br>
                                <b><font color="#000000">CPU Manufacturer</font></b>
                            	Intel <br><br>                           
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                HP Z2 G9 Workstation 
                            </h5>
                        </div>
                        <img src="../images/Picture6.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	Lenovo<br><br>
                                <b><font color="#000000">Operating System</font></b>
                                Windows 11 Pro<br><br>
                                <b><font color="#000000">Ram Memory Installed Size</font></b>
                                12 GB<br><br>
                                <b><font color="#000000">Series</font></b>
                            	Think Station P620<br><br>
                                <b><font color="#000000">CPU Manufacturer</font></b>
                            	AMD Ryzen 5 3600<br><br>
                                <b><font color="#000000">CPU Speed</font></b>
                            	4.1 GHz<br><br>
                                <b><font color="#000000">RAM Memory Technology</font></b>
                            	DDR4<br><br>
                                <b><font color="#000000">RAM Memory Maximum Size</font></b>
                            	12 GB<br><br>
                                <b><font color="#000000">HARD</font></b>
                             1 TB SSD<br><br>                      
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h5>
                                HP 800 G1  
                            </h5>
                        </div>
                        <img src="../images/Picture7.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	HP<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 10 Pro<br><br>
                                <b><font color="#000000">Memory storage capacity</font></b>
                            	8 GB<br><br>
                                <b><font color="#000000">Installed RAM memory size</font></b>
                              8 GB<br><br>
                              <b><font color="#000000">CPU model</font></b>
                            	Core i5-4570<br><br>
                                <b><font color="#000000">CPU manufacturer</font></b>
                            	Intel<br><br>
                                <b><font color="#000000">Hard disk</font></b>
                              1000GB HD<br><br>
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h6>
                                Dell PC Optiplex 7020  
                            </h6>
                        </div>
                        <img src="../images/Picture8.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	Dell<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 10<br><br>
                                <b><font color="#000000">CPU model</font></b>
                            	Core i5-4570<br><br>
                                <b><font color="#000000">Colour</font></b>
                             	Black<br><br>
                                 <b><font color="#000000">CPU manufacturer</font></b>
                            	Intel<br><br>
                                <b><font color="#000000">CPU speed</font></b>
                            	3.2 GHz<br><br>
                                <b><font color="#000000">HARD</font></b>
                             500GB<br><br>
                             <b><font color="#000000">RAM</font></b>
                             8GB<br><br>                           
                        </h6>
                        </div>
                    </div></p>
                </div>
                <div class="feat">
                    <p><div class="builds-col">
                        <div class="dis">
                            <h6>
                                Dell OptiPlex 5040 Desktop 
                            </h6>
                        </div>
                        <img src="../images/Picture9.png" class="images1"> 
                        <div class="layer">
                        <h6>
                            <b><font color="#000000">Brand</font></b>
                            	Dell<br><br>
                                <b><font color="#000000">Operating System</font></b>
                            	Windows 10<br><br>
                                <b><font color="#000000">Memory storage capacity</font></b>
                            	8 GB<br><br>
                                <b><font color="#000000">Installed RAM memory size</font></b>
                            	8 GB<br><br>
                                <b><font color="#000000">Series</font></b>
                            	Optiplex 5040 SFF<br><br>
                                <b><font color="#000000">CPU model</font></b>
                            	Core i5 6500<br><br>
                                <b><font color="#000000">Colour</font></b>
                             	Black<br><br>
                                 <b><font color="#000000">CPU manufacturer</font></b>
                            	Intel<br><br>
                                <b><font color="#000000">graphics card</font></b>
                               Intel HD Graphics 530<br><br>
                               <b><font color="#000000">HARD</font></b>
                             500 GB Storage<br><br> 
                        </h6>
                        </div>
                    </div></p>
                </div>
            </div>
        </div>
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