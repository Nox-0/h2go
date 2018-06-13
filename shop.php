<?php
session_start();
include"conn.php";
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Shop</title>
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
			<main id="products">
				<div class="productCard">
					<img src="images/bottle-s.jpg" alt="A small-sized bottle filled with water" />
					<div class="productDetails">
						<h5>Small Bottle of Water</h5>
						<h6>Price: $2.49</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/bottle-m.jpg" alt="A medium-sized bottle filled with water" />
					<div class="productDetails">
						<h5>Medium Bottle of Water</h5>
						<h6>Price: $4.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/bottle-l.jpg" alt="A large-sized bottle filled with water" />
					<div class="productDetails">
						<h5>Large Bottle of Water</h5>
						<h6>Price: $14.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/packet-s.jpg" alt="A small-sized packet filled with water" />
					<div class="productDetails">
						<h5>Small Packet of Water</h5>
						<h6>Price: $0.49</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/packet-m.jpg" alt="A medium-sized packet filled with water" />
					<div class="productDetails">
						<h5>Medium Packet of Water</h5>
						<h6>Price: $1.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/jar-s.jpg" alt="A small-sized jar filled with water" />
					<div class="productDetails">
						<h5>Small Jar of Water</h5>
						<h6>Price: $1.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/jar-m.jpg" alt="A medium-sized jar filled with water" />
					<div class="productDetails">
						<h5>Medium Jar of Water</h5>
						<h6>Price: $4.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/jar-l.jpg" alt="A large-sized jar filled with water" />
					<div class="productDetails">
						<h5>Large Jar of Water</h5>
						<h6>Price: $19.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/flask-s.jpg" alt="A small-sized flask filled with water" />
					<div class="productDetails">
						<h5>Small Flask of Water</h5>
						<h6>Price: $3.99</h6>
					</div>
				</div>
				<div class="productCard">
					<img src="images/flask-m.jpg" alt="A medium-sized flask filled with water" />
					<div class="productDetails">
						<h5>Medium Flask of Water</h5>
						<h6>Price: $4.99</h6>
					</div>
				</div>
			</main>
		</div>
	</div>
</body>
</html>
