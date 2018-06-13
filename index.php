<?php
session_start();
?>
<!-- This starts the session, allowing other PHP code to work as far as I'm aware. I later call upon nav.php using php and it doesn't work without session_start, which is what makes me think that session_start is needed for PHP code to run -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
	<!-- This is the small icon that shows up on the tab -->
</head>
<body>
	<header>
		<div id="navBarContainer">
		<!-- This is just a container for the navBar. It helps with formatting the nav bar. IMPORTANT! Many containers may not be in use, however, they are there just in case they need to be used in the future. It makes life easier for the future -->
			<div id="navBar">
			<!-- This is a container for everything in the nav bar. Also help with formatting via CSS -->
				<a href="index.php"><img src="images/logo.png" id="logoImage"/></a>
				<?php
				include"nav.php";
				?>
				<!-- This calls upon the nav.php code -->
				<div>
					<strong><a href="cart.php" id="cartButton"><img src="images/cart.png" id="cartImage"/> CART</a></strong>
				</div>
			</div>
		</div>
	</header>
	<div id="whiteBoxHolder">
	<!-- container that helps with formatting the whiteBox -->
		<div id="whiteBox">
		<!-- This is the white box that is in the middle of the page. In reality, it's a see-through div with a grey border but gives (I hope) the illusion of a white box inside a grey box. Also helps with formatting -->
			<img id="frontPageImage" class="frontPageItem" src="images/bottle-l.jpg" alt="Bottled water (large)" />
			<h1 id="imageHeader" class="frontPageItem">LARGE BOTTLE OF WATER</h1>
			<a href="shop.php" id="shopNowButton" class="frontPageItem"><strong>SHOP NOW &rarr;</strong></a>
			<!-- This is the image with the text and shop now button on the front page. The "&rarr" is unicode for arrow -->
		</div>
	</div>
</body>
</html>
