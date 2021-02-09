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
$sql = "UPDATE exporter SET exportername='$_POST[exportername]', address1='$_POST[address1]', address2='$_POST[address2]' , pin='$_POST[pin]',city='$_POST[city]',state='$_POST[state]',country='$_POST[country]',phone='$_POST[phone]',fax='$_POST[fax]',email='$_POST[email]',mobile='$_POST[mobile]',panno='$_POST[panno]',tanno='$_POST[tanno]',gststatename='$_POST[gststate]',gststatecode='$_POST[gstcode]',gstintype='$_POST[gstintype]',gstin='$_POST[gstin]',iec='$_POST[iec]',sez='$_POST[sez]',adcode='$_POST[adcode]',forexcode='$_POST[forexcode]',branchcode='$_POST[branchcode]',bankaccount='$_POST[bankaccount]',ifsccode='$_POST[ifsccode]' where exportername='$_POST[exportername]'";

if ($conn->query($sql) === TRUE) {
	header("Location: exporter.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>