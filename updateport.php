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
$sql = "UPDATE portlist SET portname='$_POST[portname]', portcode='$_POST[portcode]',countryname='$_POST[countryname]' ,countrycode='$_POST[countrycode]' where portname='$_POST[portname]'";

if ($conn->query($sql) === TRUE) {
	header("Location: portlist.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>