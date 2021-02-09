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
$sql = "UPDATE shipline SET shiplinename='$_POST[shiplinename]', address1='$_POST[address1]', address2='$_POST[address2]',state='$_POST[state]' ,city='$_POST[city]',pin='$_POST[pin]',country='$_POST[country]',phone='$_POST[phone]',fax='$_POST[fax]',email='$_POST[email]',mobile='$_POST[mobile]',gststate='$_POST[gststate]',gstcode='$_POST[gstcode]',gstin='$_POST[gstin]' where shiplinename='$_POST[shiplinename]'";

if ($conn->query($sql) === TRUE) {
	header("Location: shipline.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>