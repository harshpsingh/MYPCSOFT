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
$sql = "DELETE FROM overseasagent WHERE overseasagentname='$_POST[overseasagentname]'";

if ($conn->query($sql) === TRUE) {
	header("Location: overseasagent.php");
	
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>