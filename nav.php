<!--
TODO:
Add comments
-->
<?php
	if(isset($_SESSION["UserID"])){
		?>
		<ul id="navButtons">
			<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
			<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
			<li class="navButton"><strong><a href="update.php">UPDATE</a></strong></li>
			<li class="navButton"><strong><a href="logout.php">LOG OUT</a></strong></li>
		</ul>
		<?php
	}
	else{
		?>
	<ul id="navButtons">
		<li class="navButton"><strong><a href="index.php">HOME</a></strong></li>
		<li class="navButton"><strong><a href="shop.php">SHOP</a></strong></li>
		<li class="navButton"><strong><a href="signup.php">SIGN UP</a></strong></li>
		<li class="navButton"><strong><a href="login.php">LOG IN</a></strong></li>
	</ul>
		<?php
	}
	?>
