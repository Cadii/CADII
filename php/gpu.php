<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPU</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/gpu.css">
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
    <link rel="icon" href="../images/Cadi Icon.icon">
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
            //echo '<div  id="menu-icon">'.
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
</header>
<!-- End header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>GPU</h1>
            <p>Hello, We are Cadi - And here is a full guide about GPU</p>
        </div>
    </div>
<!-- End Landing Section -->
<!-- Start Services -->
<div class="services">
    <div class="container">
        <h2 class="special-heading">GPU</h2>
        <p>let's start to learn to be professional user</p>
        <div class="pc">
            <h3>What is the GPU?</h3>
            <p>A graphics processing unit (GPU) is a computer chip that renders graphics and images by performing rapid mathematical calculations. 
                GPUs are used for both professional and personal computing. Traditionally, 
                GPUs are responsible for the rendering of 2D and 3D images, animations and video -- even though, now, they have a wider use range.</p>
        </div>
    </div>
</div>
<!-- End Services -->
    <!-- Start main Components -->
    <div class="components">
        <div class="container">
            <div class="feat">
                <h3><a href="#CPU" class="link">Geforce RTX 4090 Review</a></h3>
                <p><img src="../images/gpu 1.png" alt="CPU" class="img"></p>
                <p>The GeForce RTX 4090 is on average 59% faster than the RTX 3090 Ti and 71% faster than the 6950 XT at 4K gaming. 
                    Those are massive margins. Just as impressive is the fact that the RTX 4090 averaged 145 fps at 4K. 
                    This is truly the first 4K GPU capable of delivering a high refresh rate gaming experience. Very impressive stuff by Nvidia.</p>
                <p><img src="../images/ga.png" alt="" class="img"></p>
                <p>Conclotion:
                    Overall The 4090 is a beast of a GPU but also very expensive so here is our recommendation:
                    IF you want the best of the best and don’t care about the money or you have a 4K high refresh rate monitor then there is no doubt about the 4090.
                    Other than that for the average or most high end users the 4090 is over kill for the most part.</p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">AMD Radeon RX 7900 XTX Review</a></h3>
                <p><img src="../images/gpuu.jpg" alt="CPU" class="img"></p>
                <p>For a marginal 10% discount, the Radeon 7900 XT doesn't appear as it's going to be particularly great value on paper, 
                    but we'll look at that GPU in a separate review, for now we want to focus on the XTX. Other noteworthy features of 
                    the 7900 XTX is the 355 watt total board power (TBP) rating, which is higher than the GeForce RTX 4080, but like 
                    the 4080 it does use the PCIe 4.0 x16 interface.</p>
                <p><img src="../images/gpuu2.jpg" alt="" class="img"></p>
                <p>Game Average 16:
                    For looking at the 16 game average we'll start with the 1440p data. On average, the Radeon 7900 XTX and GeForce RTX 4080 
                    were neck and neck with around 180 fps on average.That means the 7900 XTX is 17% slower than the RTX 4090, which for 
                    the price is obviously a great result, though it's also only 25% faster than the RTX 3090 Ti and Radeon 6950 XT. It was also
                    ~35% faster than the RTX 3090 and 6900 XT, so for those with previous generation parts it might not be worth the upgrade
                </p><img src="../images/gpuu3.jpg.png" alt="" class="img">
                <p>Conclosion:
                    The RX 7900XTX is not as impressive as it appeared before it’s lunch but not to say it’s a bad product IF you want Top tier 
                    performance and you don’t care about the ray tracing performance then the RX 7900XTX might be a compiling choice but if you 
                    have a previous gen card like 3070 or RX 6900XT it’s not worth the upgrade for the most part.</p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">Nvidia GeForce RTX 3050 Review</a></h3>
                <p><img src="../images/nv1.png" alt="CPU" class="img"></p>
                <p>it's based on the same GA106 silicon used by the RTX 3060.
                    The RTX 3050 drops the MSRP from $330 to $250, so you can expect a significant part of the die to be disabled. 
                    Case in point, the core configuration has been reduced from 3584 cores to just 2560, a near 30% reduction, but 
                    interestingly the same 48 ROPs remain. Although the core boost frequency remains the same at 1,777 MHz, 
                    the memory speed has been slightly reduced from 15 Gbps to 14 Gbps. Couple that with the smaller 128-bit wide 
                    memory bus and we end up with a 38% drop in bandwidth
                    </p>
                <p><img src="../images/nv2.png" alt="" class="img"></p>
                <p>Game Average 12:
                    And here's a look at the 12 game average data, which has been calculated using the geomean. The RTX 3050 averaged 
                    108fps at 1080p, which made it just 5% slower than the GTX 1660 Super, 10% slower than the RTX 2060, and 23% slower than the Radeon RX 6600
                </p><img src="../images/nv3.png" alt="" class="img">
                <p>Conclosion:
                    The RTX 3050 is good GPU not particularly impressive but that is the setuation in the low end or budget market very stale so the 3050 isn’t 
                    coming to change that but it’s a nice edition nevertheless and much much better than the RX 6500 XT so if you are planning to build a new budget 
                    pc if you find the 3050 with a good price then it’s pretty decent option.</p>
            </div>
            <div class="feat">
                <h3><a href="#CPU" class="link">AMD Radeon RX 6750 XT Review</a></h3>
                <p><img src="../images/rad1.png" alt="CPU" class="img"></p>
                <p>The RX 6750 XT features a core overclock of 19 MHz... not 19%19 MHz, but you're getting faster 18 Gbps memory, which results in a 
                    12.5% boost to memory bandwidth when compared to last year's RX 6700. 
                    There's also a 9% increase in board power and that's it. Oh wait, no it's not. You're also faced with a 15% increase in MSRP which has gone 
                    from $480 to $550. it’s 449$ at the time of this review.
                    </p>
                <p><img src="../images/rad2.png" alt="" class="img"></p>
                <p>Performance Summary
                    In terms of performance, the Radeon RX 6750 XT looks fine compared to the RTX 3060 Ti and 3070 across the few games we just looked at, but 
                    wasn't exactly exciting sitting next to the 6700 XT. To get a better idea of how they stack up, let's take a look at our 11 game average... 
                    Starting with the 1080p average data, the 6750 XT comes out 6% faster than the 6700 XT, which is not great given the 15% price hike. Inserted into 
                    a graph the result on its own looks good though as it's a little faster than the much more expensive RTX 3070 and only slightly slower than the RTX 3070 Ti,
                    which is even more expensive.That said, the 6700 XT is obviously better value given the MSRPs, but it's also better value given you can just overclock 
                    it yourself for 6750 XT levels of performance.                   
                </p><img src="../images/rad3.png" alt="" class="img">
                <p>Conclosion:
                    In the current market The RX 6750XT at 449$ is not bad at all also compared to other options in the same price points or performance so if you don’t care 
                    about ray tracing or a specific Nvidia feature the 6750XT is agreat deal for a new GPU but if you want an Nvidia option the 3060ti is or 3060 are pretty okay options.</p>
            </div>
        </div>
    </div>
    <!-- End main Components -->
    <!-- Start Footer -->
    <div class="footer">
        <p>© 2023 <span>Cadi</span> All Right Reserved.</p> 
        <button onclick="totop()" class= "top">UP <i class="fa-solid fa-up-long"></i></button>
    </div>
    <!-- End Footer -->
<script src="../CADII-main/JS/main.js"></script>
</body>
</html>