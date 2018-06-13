<?php
session_start();
include"conn.php";
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<div id="navBarContainer">
			<div id="navBar">
				<a href="index.php"><img src="images/logo.png"  id="logoImage"/></a>
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
				<div>
					<strong><a href="cart.php" id="cartButton"><img src="images/cart.png" id="cartImage"/> CART</a></strong>
				</div>
			</div>
		</div>
	</header>
	<div id="whiteBoxHolder">
		<div id="whiteBox">
			<img id="frontPageImage" class="frontPageItem" src="images/bottle-l.jpg" alt="Bottled water (large)" />
			<h1 id="imageHeader" class="frontPageItem">LARGE BOTTLE OF WATER</h1>
			<a href="shop.php" id="shopNowButton" class="frontPageItem"><strong>SHOP NOW &rarr;</strong></a>
		</div>
	</div>
</body>
</html>
