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
$sql = "UPDATE loginroles SET username='$_POST[username]', division='$_POST[division]',br='$_POST[br]' where username='$_POST[username]'";

if ($conn->query($sql) === TRUE) {
	header("Location: addpermission.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>