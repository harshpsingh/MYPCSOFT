<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM edisb1 WHERE jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

if ($conn->query($sql) === TRUE) {
	
	header("Location: modifyedies.php");
	
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>