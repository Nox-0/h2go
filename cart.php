<?php
session_start();
include "conn.php";
if(isset($_SESSION["UserID"])){
}
// If the user isn't logged in then they are redirected to the login page
else{
	header('Location: login.php');
}
// If an action that isn't addToCart occurs
if(isset($_GET["action"]))
{
	// If the action is "delete"
	if($_GET["action"] == "delete")
	{
		// Explain in the shop.php
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["itemID"] == $_GET["id"])
			{
				// Empties the variable / deletes it
				unset($_SESSION["cart"][$keys]);
				header('Location: cart.php');
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<?php
		include "nav.php";
		?>
	</header>
	<div id="whiteBoxHolderCart">
		<div id="tableHolder">
			<!-- TABLES? IN HTML? NO! NEVER! -->
			<table>
				<tr>
					<th width="10%"></th>
					<th width="15%"></th>
					<th width="25%">Item Name</th>
					<th width="5%">Quantity</th>
					<th width="15%">Price</th>
					<th width="10%">Total</th>
				</tr>
				<?php
				// If the cart isn't empty
				if(!empty($_SESSION["cart"]))
				{
					// New variable "total" is assigned to 0
					$total = 0;
					// For every item in the cart do the thing below. Also takes the item's values
					foreach($_SESSION["cart"] as $keys => $values)
					{
				?>
				<tr>
					<!-- This removes the item by linking to the delete action of the item -->
					<td><a class="removeItem" href="cart.php?action=delete&id=<?php echo $values["itemID"]; ?>"><span>×</span></a></td>
					<!-- Displays the item's image -->
					<td><img class="cartItemImage" src="images/<?php echo $values["itemImage"]; ?>" alt="<?php echo $values["itemName"] ?>" /></td>
					<!-- Displays the item's name -->
					<td><?php echo $values["itemName"]; ?></td>
					<!-- This should be self-explanatory after the previous comment. Displays the quantity -->
					<td><?php echo $values["itemQuantity"]; ?></td>
					<td>$<?php echo $values["itemPrice"]; ?></td>
					<!-- This displays the total for the item by multiplying the quantity by the price -->
					<td>$<?php echo number_format($values["itemQuantity"] * $values["itemPrice"], 2);?></td>
				</tr>
				<?php
				// The total becomes total + total price of item for each item
					$total += ($values["itemQuantity"] * $values["itemPrice"]);
				}
				?>
			</table>
		</div>
		<div id="belowCart">
			<!-- Displays the total total -->
			<div id="itemTotal">Total: $<?php echo number_format($total, 2); ?></div>
			<!-- Order button that doesn't allow you to order :) -->
			<a href="cart.php" id="itemOrder">ORDER</a>
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>
