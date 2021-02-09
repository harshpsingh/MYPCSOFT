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
$sql = "UPDATE consignee SET consigneename='$_POST[consigneename]', address1='$_POST[address1]', address2='$_POST[address2]' ,city='$_POST[city]',country='$_POST[country]',phone='$_POST[phone]',fax='$_POST[fax]',email='$_POST[email]',mobile='$_POST[mobile]' where consigneename='$_POST[consigneename]'";

if ($conn->query($sql) === TRUE) {
	header("Location: consignee.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>