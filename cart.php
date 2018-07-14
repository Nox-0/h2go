<?php
session_start();
include"conn.php";

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["itemID"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Item removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
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
					if(!empty($_SESSION["cart"]))
					{
						$total = 0;
						foreach($_SESSION["cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["itemName"]; ?></td>
						<td><?php echo $values["itemQuantity"]; ?></td>
						<td>$ <?php echo $values["itemPrice"]; ?></td>
						<td>$ <?php echo number_format($values["itemQuantity"] * $values["itemPrice"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["itemID"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["itemQuantity"] * $values["itemPrice"]);
						}
					?>
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
</body>
</html>
