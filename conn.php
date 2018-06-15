<!--
TODO:
Add comments
-->
<?php
//Defines variables. The "$" means that it's the variable name
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h2go";

//This creates the connection to my database
$conn = new mysqli($servername, $username, $password, $dbname);
//This checks the connection
if ($conn->connect_error) {
	//If the connection fails then it says Connection failed and the error
	die("Connection failed: " . $conn->connect_error);
}
?>
