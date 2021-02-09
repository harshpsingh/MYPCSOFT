<html>
<head>
</head>
<title> Modify Importer Details</title>
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

$sql = "SELECT * from importer where importername='$_POST[importername]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$address1=$row["address1"];
		$address2=$row["address2"];
		$pin=$row["pin"];
		$city=$row["city"];
		$state=$row["state"];
		$country=$row["country"];
		$phone=$row["phone"];
		$fax=$row["fax"];
		$email=$row["email"];
		$mobile=$row["mobile"];
		$panno=$row["panno"];
		$tanno=$row["tanno"];
		$gststate=$row["gststatename"];
		$gstcode=$row["gststatecode"];
		$gstintype=$row["gstintype"];
		$gstinno=$row["gstin"];
		$iec=$row["iec"];
		$sez=$row["sez"];
		$adcode=$row["adcode"];
		$forexcode=$row["forexcode"];
		$branchcode=$row["branchcode"];
		$bankaccount=$row["bankaccount"];
		$ifsccode=$row["ifsccode"];
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
		
importername<input type="text" name="importername" size="30" value="<?php echo $_POST["importername"]?>">
Address1<input type="text" name="address1" value="<?php echo $address1?>">
Address2<input type="text" name="address2" value="<?php echo $address2?>"><br>
PIN<input type="text" name="pin" value="<?php echo $pin?>">
City<input type="text" name="city" value="<?php echo $city?>">
State<input type="text" name="State" value="<?php echo $state?>">
Country<input type="text" name="country" value="<?php echo $country?>"><br>
Phone<input type="text" name="phone" value="<?php echo $phone?>">
Fax<input type="text" name="fax" value="<?php echo $fax?>">
Email<input type="text" name="email" value="<?php echo $email?>">
Mobile<input type="text" name="mobile" value="<?php echo $mobile?>"><br>
Panno<input type="text" name="Panno" value="<?php echo $panno?>">
Tanno<input type="text" name="tanno" value="<?php echo $tanno?>"><br>
Gst state<input type="text" name="gststate" value="<?php echo $gststate?>">
Gstcode<input type="text" name="gstcode" value="<?php echo $gstcode?>">
Gstin Type<input type="text" name="gstintype" value="<?php echo $gstintype?>">
Gstinno<input type="text" name="gstinno" value="<?php echo $gstinno?>"><br>
IECCODE<input type="text" name="iec" value="<?php echo $iec?>">
SEZ<input type="text" name="sez" value="<?php echo $sez?>"><br>
AD Code<input type="text" name="adcode" value="<?php echo $adcode?>">
Forex code<input type="text" name="forexcode" value="<?php echo $forexcode?>">
BranchCode<input type="text" name="branchcode" value="<?php echo $branchcode?>">
Bank Account<input type="text" name="bankaccount" value="<?php echo $bankaccount?>">
Ifsc Code<input type="text" name="ifsccode" value="<?php echo $ifsccode?>"><br>
<button type="submit" name="update" formaction="modifyim
porter.php">Update</button>
</form>
</body>
</head>
</html>