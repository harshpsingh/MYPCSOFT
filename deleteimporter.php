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
$sql = "DELETE FROM importer WHERE importername='$_POST[importername]'";

if ($conn->query($sql) === TRUE) {
	header("Location: importer.php");
	
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>