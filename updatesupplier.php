<html>
<head>
</head>
<title> Modify Consignee Details</title>
<body>
<button><a href="logout.php">Logout</a><br></button>

<h1> update</h1>
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

$sql = "SELECT * from supplier where suppliername='$_POST[suppliername]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$consigneename=$row["suppliername"];
		$address1=$row["address1"];
		$address2=$row["address2"];
		
		$city=$row["city"];
		
		$country=$row["country"];
		$phone=$row["phone"];
		$fax=$row["fax"];
		$email=$row["email"];
		$mobile=$row["mobile"];
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
		suppliername<input type="text" name="suppliername" size="30" value="<?php echo $_POST["suppliername"]?>">
Address1<input type="text" name="address1" value="<?php echo $address1?>">
Address2<input type="text" name="address2" value="<?php echo $address2?>"><br>
City<input type="text" name="city" value="<?php echo $city?>">
Country<input type="text" name="country" value="<?php echo $country?>"><br>
Phone<input type="text" name="phone" value="<?php echo $phone?>">
Fax<input type="text" name="fax" value="<?php echo $fax?>">
Email<input type="text" name="email" value="<?php echo $email?>">
Mobile<input type="text" name="mobile" value="<?php echo $mobile?>"><br>

<button type="submit" name="update" formaction="modifysupplier.php">Update</button>
</form>
</body>
</head>
</html>