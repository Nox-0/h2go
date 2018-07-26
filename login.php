<?php
session_start();
include "conn.php";

if(isset($_SESSION["UserID"])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Log in</title>
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
				<div id="blueBoxLogin">
					<div class="formBox">
						<div>
							<h1>LOG IN</h1>
							<p class="error">
								<?php
								// If the user presses log in
								if(isset($_POST['LogIn'])){
									// Assigns the data entered to variables
									$LogInEmail = $_POST['Email'];
									$LogInPassword = $_POST['Password'];
									// Finds the email and password of the user
									$result = $conn->query("select * from users where eMail='$LogInEmail' and password='$LogInPassword'");
									$row = $result->fetch_array();

									// Assigns variables to the user's correct email, password and id
									$Email=$row['eMail'];
									$Password=$row['password'];
									$id=$row['userID'];

									// Starts a session for the user's ID and name. The name session is for the WELCOME USER and the id session is so that they are logged in as themselves
									$_SESSION['UserID'] = $row['userID'];
									$_SESSION['FirstName'] = $row['firstName'];

									// If the email and password entered match the recorded email and password the user is logged in
									if($LogInEmail==$Email && $LogInPassword==$Password)
									{
										// User is redirected to shop.php but logged in
								?>
									<script>window.location ="shop.php?id=<?php echo $id;?>";</script>
								<?php
									}
									// If the email or password are incorrect
									else{
										echo "Invalid login.";
									}
								}
								?></p>
						</div>
						<!-- Explained on the update page -->
						<form id="LoginForm" name="LoginForm" method="post" action="">
							<div class="formelement"><input type="text" name="Email" required="required" class="textfield" id="Email" placeholder="Email"></div>
							<div class="formelement"><input type="password" name="Password" required="required" class="textfield" id="Password" placeholder="Password"></div>
							<div class="formelement"><input type="submit" name="LogIn" class="submitButton" id="LogIn" value="Log In"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
