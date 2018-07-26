<?php
session_start();
include "conn.php";

// If the user adds to cart
if(isset($_POST["addToCart"])) {
	// This checks whether the user is logged in or not. If they are, then it proceeds with the rest of the if statement(s)
	if(isset($_SESSION['UserID'])) {
		// If there are already items in the cart
		if(isset($_SESSION['cart'])) {
			// Takes itemIDs from the cart session
			$itemarrayid = array_column($_SESSION["cart"], "itemID");
			// If the itemID isn't in the array (hasn't been added to cart)
			if(!in_array($_GET["id"], $itemarrayid)) {
				// Counts all of the elements in the cart (all of the products)
				$count = count($_SESSION["cart"]);
				// Makes a new array for the new item and posts it
				$itemarray = array(
					'itemID' => $_GET["id"],
					'itemName' => $_POST["hiddenName"],
					'itemPrice' => $_POST["hiddenPrice"],
					'itemQuantity' => $_POST["quantity"],
					'itemImage' => $_POST["hiddenImage"]
				);
				$_SESSION["cart"][$count] = $itemarray;
				// Notifies the user that the item has been added
				echo '<script>alert("Item added to cart")</script>';
			}
			else {
				echo '<script>alert("Item already added")</script>';
			}
		}
		// If there are no items in the cart
		else {
			// An array is created that posts variables to the cart session
			$itemarray = array(
				'itemID' => $_GET["id"],
				'itemName' => $_POST["hiddenName"],
				'itemPrice' => $_POST["hiddenPrice"],
				'itemQuantity' => $_POST["quantity"],
				'itemImage' => $_POST["hiddenImage"]
			);
			// Starts the cart
			$_SESSION['cart'][0] = $itemarray;
			echo '<script>alert("Item added to cart")</script>';
		}
	}
	// If the user isn't logged in they are prompted to log in to add to cart
	else {
		echo '<script>alert("Log in to add to cart")</script>';
	}
}
?>
<!-- This starts the session and calls on conn.php which will then run it's code when it's called -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Shop</title>
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
		<div id="whiteBox">
			<!-- Instead of using a div I use a main because it's the main part of the page. Wew! -->
			<main id="products">
				<?php
				// PRODUCTS
				// This selects everything from the products table and is ordered by the productID (in the database) in ascending order
				$query = "SELECT * FROM products ORDER BY productID ASC";
				$result = mysqli_query($conn, $query);
				// If there is at least 1 product it goes to the while loop
				if (mysqli_num_rows($result) > 0)
				{
					// Loops through each product
					while ($row = mysqli_fetch_array($result))
					{
				?>
				<form class="productCard" method="post" action="shop.php?action=add&id=<?php echo $row['productID']; ?>">
					<!-- the link to each image is stored in the database however, the images are stored locally to save space in the db -->
        	<img src="images/<?php echo $row['images']; ?>" alt="<?php echo $row['productName'] ?>" />
					<div class="productDetails">
						<!-- The PHP returns the product details from the products table -->
            <h5><?php echo $row['productName']; ?></h5>
						<div class="cartLineTwo">
	            <h6 class="productPrice">Price: $<?php echo $row['productPrice']; ?></h6>
							<div class="productFunctions">
								<!-- The input type dictates what the user can input/submit
							 	Number type allows the user to submit numbers and hidden type hides the input, not allowing the user to submit anything
								Min dictates the minimum amount that the user can select
								Value dictates the value that is shown in the input box by default -->
		            <input class="productQuantity" type="number" name="quantity" min=1 max=1000 value=1 />
		            <input class="addToCart" type="submit" name="addToCart" value="+" />
		            <input type="hidden" name="hiddenName" value="<?php echo $row['productName']; ?>" />
		            <input type="hidden" name="hiddenPrice" value="<?php echo $row['productPrice']; ?>" />
								<input type="hidden" name="hiddenImage" value="<?php echo $row['images']; ?>" />
							</div>
						</div>
					</div>
				</form>
				<?php
				}
				}
				?>
			</main>
		</div>
	</div>
</body>
</html>
