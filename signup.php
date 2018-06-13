<!--
TODO:
Add comments
-->
<?php
session_start();
include"conn.php";
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<div id="navBarContainer">
			<div id="navBar">
				<a href="index.php"><img src="images/logo.png"  id="logoImage"/></a>
				<ul id="navButtons">
					<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
					<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
					<li class="navButton"><strong><a href="signup.php">SIGN UP</a></strong></li>
					<li class="navButton"><strong><a href="login.php">LOG IN</a></strong></li>
				</ul>
				<div>
					<strong><a href="cart.php" id="cartButton"><img src="images/cart.png" id="cartImage"/> CART</a></strong>
				</div>
			</div>
		</div>
	</header>
	<div id="whiteBoxHolder">
		<div id="whiteBoxSignup">
			<div id="blueBoxHolder">
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
							<div class="formelement"><input type="email" name="Email" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<div class="formelement"><input type="password" name="Password" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="password" name="ConfirmPassword" required="required" class="textfield" id="ConfirmPassword" placeholder="Confirm password"></div>
							<div class="formelement"><input type="submit" name="SignUp" value="Sign Up" class="submitButton" id="SignUpButton"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
