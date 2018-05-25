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
				<div id="blueBoxLogin">
					<div class="formBox">
						<div>
							<h1>LOG IN</h1>
							<p class="error">
								<?php
								if(isset($_POST['LogIn'])){
									$LogInEmail = $_POST['Email'];
									$LogInPassword = $_POST['Password'];
									$result = $conn->query("select * from members where eMail='$LogInEmail' and password='$LogInPassword'");
									$row = $result->fetch_array();

									$Email=$row['eMail'];
									$Password=$row['password'];
									$id=$row['userID'];

									$_SESSION['UserID'] = $row['userID'];

									if($LogInEmail==$Email && $LogInPassword==$Password)
									{
								?>
									<script>window.location ="shop.php?id=<?php echo $id;?>";</script>
								<?php
									}
									else{
										echo "Invalid login.";
									}
								}
								?></p>
						</div>
						<form id="LoginForm" name="LoginForm" method="post" action="">
							<div class="formelement"><input type="text" name="Email" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<div class="formelement"><input type="text" name="Password" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="submit" name="LogIn" class="submitButton" id="LogIn" value="Log In"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>