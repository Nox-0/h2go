<?php
session_start();
include"conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<div id="nav-bar-container">
			<div id="nav-bar">
				<a href="index.php"><img src="images/logo.png"  id="logo-image"/></a>
				<ul id="nav-buttons">
					<li class="nav-button"><strong><a href="index.php">HOME</a></strong></li>
					<li class="nav-button"><strong><a href="shop.php">SHOP</a></strong></li>
					<li class="nav-button"><strong><a href="signup.php">SIGN UP</a></strong></li>
					<li class="nav-button"><strong><a href="login.php">LOG IN</a></strong></li>
				</ul>
				<div>
					<strong><a href="cart.php" id="cart-button"><img src="images/cart.png" id="cart-image"/> CART</a></strong>
				</div>
			</div>
		</div>
	</header>
	<div id="white-box-holder">
		<div id="white-box-signup">
			<div id="blue-box-holder">
				<div id="blueBoxSignup">
					<div class="formBox">
						<div>
							<h1>SIGN UP</h1>
							<p class="error">
							<?php
							if (isset($_POST['SignUp'])) {

								//If sign up button pressed, assign data from fields to variables
								$FName = $_POST['FirstName'];
								$LName = $_POST['Surname'];
								$Address = $_POST['Address'];
								$Email = $_POST['Email'];
								$Password = $_POST['Password'];
								$Confirm = $_POST['ConfirmPassword'];

								if ($Confirm == $Password) {
									//Insert variables into users table
									$sql = $conn->query("INSERT INTO users (firstName, lastName, userAddress, email, password) Values('$FName','$LName','$Address','$Email','$Password')");

									//Redirect user to login page
									header('Location: login.php');
								}
								else {
									echo "Your passwords do not match.";
								}

							}
							?></p>
						</div>
						<form id="RegisterForm" name="RegisterForm" method="post" action="" enctype="multipart/form-data">
							<div class="formelement"><input type="text" name="FirstName" required="required" class="textfield" id="FirstName" placeholder="First name"></div>
							<div class="formelement"><input type="text" name="Surname" required="required" class="textfield" id="LastName" placeholder="Surname"></div>
							<div class="formelement"><input type="text" name="Address" required="required" class="textfield" id="Address" placeholder="Address"></div>
							<div class="formelement"><input type="text" name="Email" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<div class="formelement"><input type="text" name="Password" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="text" name="ConfirmPassword" required="required" class="textfield" id="ConfirmPassword" placeholder="Confirm password"></div>
							<div class="formelement"><input type="submit" name="SignUp" value="Sign Up" class="submitButton" id="SignUpButton"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
