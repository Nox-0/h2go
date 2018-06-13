<?php
session_start();
include"conn.php";
?>
<?php
	if(isset($_SESSION["UserID"])){
	}
	else{
		header('Location: login.php');
	}
	$User = $_SESSION["UserID"];
	$result = $conn->query("select * from users where userID='$User'");
	$row = $result->fetch_array();
	$_SESSION["FirstName"] = $row['firstName'];
	$_SESSION["LastName"] = $row['lastName'];
	$_SESSION["Address"] = $row['userAddress'];
	$_SESSION["Email"] = $row['eMail'];
	$_SESSION["Password"] = $row['password'];
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
					<li class="navButton"><strong><a href="update.php">UPDATE</a></strong></li>
					<li class="navButton"><strong><a href="logout.php">LOG OUT</a></strong></li>
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
							<h1>UPDATE PROFILE</h1>
							<p class="error">
							<?php
							if(isset($_POST['Update'])){

								$id=$row['userID'];
								$UpdateFirstName = $_POST['FirstName'];
								$UpdateLastName = $_POST['LastName'];
								$UpdateAddress = $_POST['Address'];
								$UpdateEmail = $_POST['Email'];
								$UpdatePassword = $_POST['Password'];
								$Confirm = $_POST['ConfirmPassword'];

								if ($Confirm == $UpdatePassword){
									$data = $conn->query("UPDATE users SET firstName = '$UpdateFirstName', lastName = '$UpdateLastName', userAddress = '$UpdateAddress', eMail = '$UpdateEmail', password = '$UpdatePassword' where userID = $User");

									if($data)
									{
										?>
										<script>window.location ="shop.php?id=<?php echo $id;?>";</script>
										<?php
									}
									else{
										echo "Invalid Update.";
									}
								}
								else{
									echo "Your passwords do not match.";
								}
							}
							?></p>
						</div>
						<form id="updateForm" name="updateForm" method="post" action="" enctype="multipart/form-data">
							<div class="formelement"><input type="text" name="FirstName" value="<?php echo $_SESSION["FirstName"]; ?>" required="required" class="textfield" id="FirstName" placeholder="First Name"></div>
							<div class="formelement"><input type="text" name="LastName" value="<?php echo $_SESSION["LastName"]; ?>" required="required" class="textfield" id="LastName" placeholder="Last Name"></div>
							<div class="formelement"><input type="text" name="Address" value="<?php echo $_SESSION["Address"]; ?>" required="required" class="textfield" id="Address" placeholder="Address"></div>
							<div class="formelement"><input type="text" name="Email" value="<?php echo $_SESSION["Email"]; ?>" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<div class="formelement"><input type="text" name="Password" value="<?php echo $_SESSION["Password"]; ?>" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="text" name="ConfirmPassword" required="required" class="textfield" id="ConfirmPassword" placeholder="Confirm password"></div>
							<div class="formelement"><input type="submit" name="Update" value="Update" class="submitButton" id="updateButton"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
