<?php
//If the user is logged in (if the userid session is being used) then it will display this nav bar
	if(isset($_SESSION["UserID"])){
		?>

		<div id="navBarContainer">
		<!-- This is just a container for the navBar. It helps with formatting the nav bar. IMPORTANT! Many containers may not be in use, however, they are there just in case they need to be used in the future. It makes life easier for the future -->
			<div id="navBar">
			<!-- This is a container for everything in the nav bar. Also help with formatting via CSS -->
				<a href="index.php"><img src="images/logo.png" id="logoImage"/></a>
				<!-- Welcomes the user -->
				<h4>Welcome, <?php echo $_SESSION["FirstName"];?>!</h4>
				<!-- I use lists because they are very easy to format for a navigation bar, especially using flex -->
				<ul id="navButtons">
					<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
					<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
					<li class="navButton"><strong><a href="update.php">UPDATE</a></strong></li>
					<li class="navButton"><strong><a href="logout.php">LOG OUT</a></strong></li>
					<!-- You can update and logout -->
				</ul>
				<strong><a href="cart.php" id="cartButton"><img src="images/cart.png" id="cartImage"/> CART</a></strong>
			</div>
		</div>
		<?php
	}
	//If the user isn't logged in then it will show this nav bar. The user isn't allowed to access the shop before they login
	else{
		?>
		<div id="navBarContainer">
			<div id="navBar">
				<a href="index.php"><img src="images/logo.png" id="logoImage"/></a>
				<ul id="navButtons">
					<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
					<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
					<li class="navButton"><strong><a href="signup.php">SIGN UP</a></strong></li>
					<li class="navButton"><strong><a href="login.php">LOG IN</a></strong></li>
					<!-- You can sign up and log in -->
				</ul>
			</div>
		</div>
		<?php
	}
?>
