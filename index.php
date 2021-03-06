<!-- git link to repository is https://github.com/Nox-0/h2go -->

<?php
session_start();
?>
<!-- This starts the session, allowing other PHP code to work as far as I'm aware. I later call upon nav.php using php and it doesn't work without session_start, which is what makes me think that session_start is needed for PHP code to run -->
<!DOCTYPE html>
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
		<?php
		include "nav.php";
		?>
		<!-- This calls upon the nav.php code -->
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
