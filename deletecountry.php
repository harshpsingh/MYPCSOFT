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
$sql = "DELETE FROM countrylist WHERE countryname='$_POST[countryname]'";

if ($conn->query($sql) === TRUE) {
	header("Location: country.php");
	
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>