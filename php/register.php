<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"] ;
   $phone = $_POST["phone"];
   $gender = $_POST["gender"];
    
    // add any other fields you want to collect

    // generate a random verification code
    $verification_code = rand(100000, 999999);

    // send verification code to user's email
    $to = $email;
    $subject = "Verify Your Email Address";
    $message = "Your verification code is: " . $verification_code;
    $headers = "From:cadi.github@gmail.com";
    mail($to, $subject, $message, $headers);

    // store verification code in session variable
    $_SESSION["verification_code"] = $verification_code;

    // store user data in session variables
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
     $_SESSION["city"] = $city;
    $_SESSION["phone"] = $phone;
    $_SESSION["gender"] = $gender;
    
    // add any other fields you want to collect

    header("Location: verify.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registertion Form</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/Registertion Form.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
   <body>
    <!-- Start Header -->
    <div class="container">
        <div class="header">
            <a href="../php/main-menu.php" class="back"> <i class="fa-solid fa-backward"></i>
                Back 
            </a>
            <img class="logo" src="../images/Logo of us.png" alt="">
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Register Form -->
    <div class="containerform">
        <div class="space"></div>
        <div class="formfather">
            <!-- Define Form Name -->
            <p class="para3">Registration Form <i class="fa-solid fa-user-plus"></i></p>
            <!-- Start of Labels and inputs -->
<!-- HTML registration form -->
<form  class="form" name="registration" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name" class="label1">Name:</label>
    <input type="text" id="name" name="name" required class="input1" id="user_name"> <br><br>
                                                                         
    <label for="email" class="label1">Email:</label>
    <input type="email" id="email" name="email" required class="input2"><br><br>

    <div class="pass-box">
    <label for="password" class="label1">Password:</label>
    <input type="password" id="password" name="password" required class="input3" minlength="8" maxlength="20">
    <i class="fa-solid fa-eye" id="show-password"></i>
    </div>
<script>
const showpassword= document.querySelector("#show-password");
const passwordfield= document.querySelector("#password");
showpassword.addEventListener("click",function(){
    showpassword.classList.toggle("fa-eye-slash");
    const type=  passwordfield.getAttribute("type")=== "password" ? "text" : "password";
    passwordfield.setAttribute("type",type)
})

</script>
    
    
    
    <label class="label1">City</label>
                <input type="text" class="input5" name="city"> <br> <br> 
                <label class="label1">Phone Number</label>
                <input type="text" class="input6" name="phone"> <br><br>
                <label class="label1">Gender:</label> 
            <!-- End of Labels and inputs -->
            <!-- Start Radio button  -->
                <input type="radio" name="gender" value="Male" class="inputl">
                <label class="gender">Male</label>
                <input type="radio" name="gender" value="Female" class="inputl">
                <label class="gender">Female</label> <br><br>
            <!-- End Radio button  -->
<!-- End of Labels and inputs -->
                <p class="para1">Note: An account activation email will be sent to the email address you provide.</p>
                
                <p class="para2">By registering you consent to allow Cadi to retain personal information consisting of your email address and IP addresses used to access the site</p>
                <input type="submit" required class="buttons" value="Register" name="submit"> <br>
                <h3 class="header3">Already a member?</h3> <br>
                <a href="login.php" class="login">Login</a>
    <!-- add any other fields you want to collect -->
</form>
  </div>
    </div>
    <!-- End Register Form -->
<!--div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script>-->
</body>
</html>

