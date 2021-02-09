<html>
<head>
</head>
<title> Modify Shipline Details</title>
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

$sql = "SELECT * from shipline where shiplinename='$_POST[shiplinename]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$shiplinename=$row["shiplinename"];
		$address1=$row["address1"];
		$address2=$row["address2"];
		$state=$row["state"];
		
		$city=$row["city"];
		$pin=$row["pin"];
		
		$country=$row["country"];
		$phone=$row["phone"];
		$fax=$row["fax"];
		$email=$row["email"];
		$mobile=$row["mobile"];
		$gststate=$row["gststate"];
		$gstcode=$row["gstcode"];
		$gstin=$row["gstin"];
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
		
Shiplinename<input type="text" name="shiplinename" size="30" value="<?php echo $_POST["shiplinename"]?>">
Address1<input type="text" name="address1" value="<?php echo $address1?>">
Address2<input type="text" name="address2" value="<?php echo $address2?>"><br>
State<input type="text" name="state" value="<?php echo $state?>">
City<input type="text" name="city" value="<?php echo $city?>">
Pin<input type="text" name="pin" value="<?php echo $pin?>">
Country<input type="text" name="country" value="<?php echo $country?>"><br>
Phone<input type="text" name="phone" value="<?php echo $phone?>">
Fax<input type="text" name="fax" value="<?php echo $fax?>">
Email<input type="text" name="email" value="<?php echo $email?>">
Mobile<input type="text" name="mobile" value="<?php echo $mobile?>"><br>
gststate<input type="text" name="gststate" value="<?php echo $gststate?>">
gstcode<input type="text" name="gstcode" value="<?php echo $gstcode?>">
gstin<input type="text" name="gstin" value="<?php echo $gstin?>">

<button type="submit" name="update" formaction="modifyshipline.php">Update</button>
</form>
</body>
</head>
</html>