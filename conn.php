<?php
//Defines variables. The "$" means that it's the variable name
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h2go";
//These variables are not necessary, however, they make for a very easy template for later use since you just need to replace what the variables are

//This creates the connection to my database using the variables from before
$conn = new mysqli($servername, $username, $password, $dbname);
//This checks the connection
if ($conn->connect_error) {
	//If the connection fails then it says Connection failed and the error
	die("Connection failed: " . $conn->connect_error);
}
?>
