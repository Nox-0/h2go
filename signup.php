<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
	<div id="blueBoxForm">
		<div class="formBox">
			<div>
				<h1>SIGN UP</h1>
				<p class="error">Please re-enter your password.</p>
			</div>
			<form id="RegisterForm" name="RegisterForm" method="post" action="" enctype="multipart/form-data">
				<div class="formelement"><input type="text" name="FirstName" required="required" class="textfield" id="FirstName" placeholder="First name"></div>
				<div class="formelement"><input type="text" name="Surname" required="required" class="textfield" id="LastName" placeholder="Surname"></div>
				<div class="formelement"><input type="text" name="Email" required="required" class="textfield" id="Email" placeholder="Email"></div>
				<div class="formelement"><input type="text" name="Password" required="required" class="textfield" id="Password" placeholder="Password"></div>
				<div class="formelement"><input type="text" name="ConfirmPassword" required="required" class="textfield" id="ConfirmPassword" placeholder="Confirm password"></div>
				<div class="formelement"><input type="submit" name="SignUp" value="Sign Up" class="submitButton" id="SignUpButton"></div>
			</form>
		</div>
	</div>
</body>
</html>
