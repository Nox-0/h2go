<?php
session_start();
include "conn.php";

if(isset($_SESSION["UserID"])){
}
else{
	header('Location: login.php');
}
$User = $_SESSION["UserID"];
// Selects everything from the logged in user
$result = $conn->query("select * from users where userID='$User'");
$row = $result->fetch_array();
// Assigns these variables to the rows in the database
$_SESSION["FirstName"] = $row['firstName'];
$_SESSION["LastName"] = $row['lastName'];
$_SESSION["Address"] = $row['userAddress'];
$_SESSION["Email"] = $row['eMail'];
$_SESSION["Password"] = $row['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<?php
		include "nav.php";
		?>
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
							// If the update button is pressed
							if(isset($_POST['Update'])){
								// Assigns the variables to the data that the user entered
								$id = $row['userID'];
								$UpdateFirstName = $_POST['FirstName'];
								$UpdateLastName = $_POST['LastName'];
								$UpdateAddress = $_POST['Address'];
								$UpdateEmail = $_POST['Email'];
								$UpdatePassword = $_POST['Password'];
								$Confirm = $_POST['ConfirmPassword'];
								// If the confirm password is the same as the entered password
								if ($Confirm == $UpdatePassword){
									// Everything entered replaces everything else in the table for the current user
									$data = $conn->query("UPDATE users SET firstName = '$UpdateFirstName', lastName = '$UpdateLastName', userAddress = '$UpdateAddress', eMail = '$UpdateEmail', password = '$UpdatePassword' where userID = $User");
									// If the data is replaced
									if($data)
									{
										?>
										<script>window.location ="update.php?id=<?php echo $id;?>";</script>
										<?php
									}
									// If it isn't updated
									else{
										echo "Invalid Update.";
									}
								}
								// If the passwords don't match
								else{
									echo "Your passwords do not match.";
								}
							}
							?></p>
						</div>
						<!-- This is the actual form that the user fills out -->
						<form id="updateForm" name="updateForm" method="post" enctype="multipart/form-data">
							<!-- The value is what is currently in the form. For the FirstName field it will already have the user's first name entered. They can delete/change this -->
							<div class="formelement"><input type="text" name="FirstName" value="<?php echo $_SESSION["FirstName"]; ?>" required="required" class="textfield" id="FirstName" placeholder="First Name"></div>
							<div class="formelement"><input type="text" name="LastName" value="<?php echo $_SESSION["LastName"]; ?>" required="required" class="textfield" id="LastName" placeholder="Last Name"></div>
							<div class="formelement"><input type="text" name="Address" value="<?php echo $_SESSION["Address"]; ?>" required="required" class="textfield" id="Address" placeholder="Address"></div>
							<!-- The type is not text for this and makes the user have the "@email.com" attatched to the end -->
							<div class="formelement"><input type="email" name="Email" value="<?php echo $_SESSION["Email"]; ?>" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<!-- The password type shows asteriskes instead of the password's characters -->
							<div class="formelement"><input type="password" name="Password" value="<?php echo $_SESSION["Password"]; ?>" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="password" name="ConfirmPassword" required="required" class="textfield" id="ConfirmPassword" placeholder="Confirm password"></div>
							<div class="formelement"><input type="submit" name="Update" value="Update" class="submitButton" id="updateButton"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
