<?php
//If the user is logged in (if the userid session is being used) then it will display this nav bar
	if(isset($_SESSION["UserID"])){
		?>
		<!-- I use lists because they are very easy to format for a navigation bar, especially using flex -->
		<ul id="navButtons">
			<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
			<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
			<li class="navButton"><strong><a href="update.php">UPDATE</a></strong></li>
			<li class="navButton"><strong><a href="logout.php">LOG OUT</a></strong></li>
		</ul>
		<!-- You can update and logout -->
		<?php
	}
	//If the user isn't logged in then it will show this nav bar
	else{
		?>
	<ul id="navButtons">
		<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
		<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
		<li class="navButton"><strong><a href="signup.php">SIGN UP</a></strong></li>
		<li class="navButton"><strong><a href="login.php">LOG IN</a></strong></li>
	</ul>
	<!-- You can sign up and log in -->
		<?php
	}
?>
