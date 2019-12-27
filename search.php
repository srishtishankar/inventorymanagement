<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (isset($_POST['product_name']) ? $_POST['product_name'] : '');
$sq = "SELECT * FROM inventory WHERE product_name='$id'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
    echo "Values found";
    }
else
    {
    	echo "Values do not exist";
    }
$conn->close();
?>