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
    <script src="../JS/Reg_link.js" defer></script>
</head>
<body>
    <!-- Start Header -->
    <div class="container">
        <div class="header">
            <a href="../html/main-menu.html" class="back"> <i class="fa-solid fa-backward"></i>
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
           <form class="form" name="registration" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
                <label class="label1">User Name</label>
                <input type="text" required class="input1" name="username" id="user_name"> <br> <br>
                <label class="label1">Password</label> 
                <input type="password" class="input2" required name="password" id="password" minlength="8" maxlength="20"> <br> <br> 
                
                <label class="label1">Email</label>
                <input type="email" placeholder="Email" class="input3" id="Email" name="email"> 
            <!-- End of Labels and inputs -->
                <p class="para1">Note: An account activation email will be sent to the email address you provide.</p>
                <br> 
         
                
   
                <p class="para2">By registering you consent to allow PCMaker to retain personal information consisting of your email address and IP addresses used to access the site</p>
                <input type="submit" required class="buttons" value="Register" name="submit"> <br>
                <h3 class="header3">Already a member?</h3> <br>
                <a href="../html/Login Form.html" class="login">Login</a>
            </form>
        </div>
    </div>
    <!-- End Register Form -->

    <!-- Firebase Connection -->

<script>
		function validateForm() {
			var username = document.forms["registration"]["username"].value;
			var email = document.forms["registration"]["email"].value;
			var password = document.forms["registration"]["password"].value;

			if (username == "" || email == "" || password == "") {
				document.getElementById("message").innerHTML = "<p class='error'>All fields are required.</p>";
				return false;
			}

			return true;
		}
	</script>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		// Hash the password
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		// Create a PDO connection to the database
		$dsn = "mysql:host=localhost;dbname=mohamed2;charset=utf8mb4";
		$db_username = "root";
		$db_password = "";
		$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		try {
			$pdo = new PDO($dsn, $db_username, $db_password, $options);

			// Insert the user data into the database
			$stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
			$stmt->execute(array(
				":username" => $username,
				":email" => $email,
				":password" => $hashedPassword
			));

			echo "<p class='success'>Registration successful.</p>";
		} catch(PDOException $e) {
			echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
		}

		// Close the database connection
		$pdo = null;
	}
	?>
    
</body>
</html>
