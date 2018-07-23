<?php
session_start();
include "conn.php";
if(isset($_SESSION["UserID"])){
}
else{
	header('Location: login.php');
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["itemID"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<header>
		<?php
		include"nav.php";
		?>
	</header>
	<div id="whiteBoxHolderCart">
		<div id="tableHolder">
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
				if(!empty($_SESSION["cart"]))
				{
					$total = 0;
					foreach($_SESSION["cart"] as $keys => $values)
					{
				?>
				<tr>
					<td><a class="removeItem" href="cart.php?action=delete&id=<?php echo $values["itemID"]; ?>"><span>×</span></a></td>
					<td><img class="cartItemImage" src="images/<?php echo $values["itemImage"]; ?>" /></td>
					<td><?php echo $values["itemName"]; ?></td>
					<td><?php echo $values["itemQuantity"]; ?></td>
					<td>$<?php echo $values["itemPrice"]; ?></td>
					<td>$<?php echo number_format($values["itemQuantity"] * $values["itemPrice"], 2);?></td>
				</tr>
			</table>
		</div>
		<?php
				$total = $total + ($values["itemQuantity"] * $values["itemPrice"]);
			}
		?>
		<div id="belowCart">
			<div id="itemTotal">Total: $<?php echo number_format($total, 2); ?></div>
			<div id="itemOrder">ORDER</div>
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>
