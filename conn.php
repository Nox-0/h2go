<!--
TODO:
Add comments
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h2go";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
