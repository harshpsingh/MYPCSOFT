<html>
<head>
</head>
<body>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountmaster";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE outstandingreceipt SET partyname='$_POST[partyname]', billno='$_POST[billno]',billdate='$_POST[billdate]' ,docketno='$_POST[docketno]',blawbno='$_POST[blawbno]',clientinvoice='$_POST[clientinvoiceno]',dueamount='$_POST[dueamount]',status='$_POST[status]',paidamount='$_POST[paidamount]',paiddate='$_POST[paiddate]' where billno='$_POST[billno]'";

if ($conn->query($sql) === TRUE) {
	header("Location: outstandingreceipts.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>