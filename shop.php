<!--
TODO:
Add "Add to cart" button
Add "WELCOME user's name"
-->
<?php
session_start();
include "conn.php";

if(isset($_SESSION["UserID"])){
}
else{
	header('Location: login.php');
}
if(isset($_POST["addToCart"])) {
	if(isset($_SESSION['cart'])) {
		$itemarrayid = array_column($_SESSION["cart"], "itemID");
		if(!in_array($_GET["id"], $itemarrayid)) {
			$count = count($_SESSION["cart"]);
			$itemarray = array(
				'itemID' => $_GET["id"],
				'itemName' => $_POST["hiddenName"],
				'itemPrice' => $_POST["hiddenPrice"],
				'itemQuantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $itemarray;
		}
		else {
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else {
		$itemarray = array(
			'itemID' => $_GET["id"],
			'itemName' => $_POST["hiddenName"],
			'itemPrice' => $_POST["hiddenPrice"],
			'itemQuantity' => $_POST["quantity"]
		);
		$_SESSION['cart'][0] = $itemarray;
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
		<div id="navBarContainer">
			<div id="navBar">
				<a href="index.php"><img src="images/logo.png"  id="logoImage"/></a>
				<?php
				include"nav.php";
				?>
			</div>
		</div>
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
        	<img src="images/<?php echo $row['images']; ?>" />
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
		            <input class="productQuantity" type="number" name="quantity" min=1 value=1 />
		            <input class="addToCart" type="submit" name="addToCart" value="+" />
		            <input type="hidden" name="hiddenName" value="<?php echo $row['productName']; ?>" />
		            <input type="hidden" name="hiddenPrice" value="<?php echo $row['productPrice']; ?>" />
							</div>
						</div>
					</div>
				</form>
				<?php
				}
				}
				?>
				<h3>Order Details</h3>
	      <div>
	        <table>
	          <tr>
	            <th width="40%">Item Name</th>
	            <th width="10%">Quantity</th>
	            <th width="20%">Price</th>
	            <th width="15%">Total</th>
	            <th width="5%">Action</th>
	          </tr>
	<?php
	// is the shopping cart is NOT empty
	if (!empty($_SESSION['cart']))
	{
	  $total = 0;
	  // go through each item in the cart
	  // - retrieve both the item's attribute and the data for that attribute
	  foreach($_SESSION['cart'] as $keys => $values)
	  {
	?>
	          <!-- add 1 item to the table as a new row -->
	          <tr>
	            <td><?php echo $values['itemName']; ?></td>
	            <td><?php echo $values['itemQuantity']; ?></td>
	            <td>$ <?php echo $values['itemPrice']; ?></td>
	            <td>$ <?php echo number_format($values['itemQuantity'] * $values['itemPrice'], 2); ?></td>
	            <td><a href="shop.php?action=delete&id=<?php echo $values['itemID']; ?>">
	            <span class="text-danger">Remove</span></a></td>
	          </tr>
	          <?php $total = $total + ($values['itemQuantity'] * $values['itemPrice']);
	  } // end of foreach
	?>
	          <!-- total as a final row in the table -->
	          <tr>
	            <td colspan="3" align="right">Total</td>
	            <td align="right">$ <?php echo number_format($total, 2); ?></td>
	            <td></td>
	          </tr>
	          <?php
	}
	?>

	        </table>
	      </div>
			</main>
		</div>
	</div>
</body>
</html>
