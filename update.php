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

$id1 = (isset($_POST['productid']) ? $_POST['productid'] : '');
$id2 = (isset($_POST['product_name']) ? $_POST['product_name'] : '');
$id3 = (isset($_POST['type']) ? $_POST['type'] : '');
$id4 = (isset($_POST['stock']) ? $_POST['stock'] : '');
$sq = "UPDATE inventory SET stock='$id4' WHERE productid='$id1'";
$result = $conn->query($sq);
echo "Values successfully updated";

$conn->close();
?>