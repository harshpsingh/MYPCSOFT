<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM supplier WHERE suppliername='$_POST[suppliername]'";

if ($conn->query($sql) === TRUE) {
	header("Location: supplier.php");
	
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>