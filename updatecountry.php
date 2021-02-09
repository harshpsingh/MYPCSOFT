<html>
<head>
</head>
<body>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE countrylist SET countryname='$_POST[countryname]', countrycode='$_POST[countrycode]' where countryname='$_POST[countryname]'";

if ($conn->query($sql) === TRUE) {
	header("Location: country.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>