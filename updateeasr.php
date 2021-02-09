<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<title> Modify Shipline Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>

<h1> update</h1>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportair";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from shipmentregister where docketno='$_POST[docketno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$docketno=$_POST["docketno"];
		$docketdate=$row["docketdate"];
		$clearancedate=$row["clearancedate"];
		
		$branch=$row["branch"];
		$fy=$row["fy"];
		
		$exportername=$row["exportername"];
		$exporteraddress=$row["exporteraddress"];
		$exporterinvoice=$row["exporterinvoice"];
		$gststatename=$row["gststatename"];
		$gststatecode=$row["gststatecode"];
		
		$consigneename=$row["consigneename"];
		$consigneeaddress=$row["consigneeaddress"];
		
		$overseasagentname=$row["overseasagentname"];
		$forwarder=$row["forwarder"];
		$notify=$row["notify"];
		$notifyaddress=$row["notifyaddress"];
		$sagent=$row["sagent"];
		$buyer=$row["buyer"];
		
		
		$shipmenttype=$row["shipmenttype"];
		
		
		$hawbblno=$row["hawbblno"];
		$hawbbldate=$row["hawbbldate"];
		$mawbblno=$row["mawbblno"];
		$mawbbldate=$row["mawbbldate"];
		$grnno=$row["grnno"];
		$pono=$row["pono"];
		
		$shipmentterms=$row["shipmentterms"];
		$cargotype=$row["cargotype"];
	
		$noofpackages=$row["noofpackages"];
		$units1=$row["units1"];
		
		$grossweight=$row["grossweight"];
		$units2=$row["units2"];
		
		$netweight=$row["netweight"];
		$units3=$row["units3"];
		$goodsdescription=$row["goodsdescription"];
		$marksandnos=$row["marksandnos"];
		
		$origincountry=$row["origincountry"];
		$originport=$row["originport"];
		
		$destinationcountry=$row["destinationcountry"];
		$destinationport=$row["destinationport"];
		$length=$row["length"];
		$width=$row["width"];
		$height=$row["height"];
		$pkgs=$row["pkgs"];
		$dimunit=$row["dimunit"];
		$bookingno=$row["bookingno"];
		$referenceno=$row["referenceno"];
		$clearanceat=$row["clearanceat"];
		$placeofsupply=$row["placeofsupply"];
		$chaname=$row["chaname"];
		$sb=$row["sb"];
		$remarks=$row["remarks"];
	
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
<div class="row">
<div class="col-md-4">
docketno<input type="text" name="docketno" size="15" value="<?php echo $_POST["docketno"]?>">
</div>
<div class="col-md-4">
docketdate<input type="text" name="docketdate" value="<?php echo $docketdate?>">
</div>
<div class="col-md-4">
Clearancedate<input type="text" name="clearancedate" value="<?php echo $clearancedate?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
Branch<input type="text" name="branch" value="<?php echo $branch?>">
</div>
<div class="col-md-6">
fy<input type="text" name="fy" value="<?php echo $fy?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
exportername<input type="text" name="exportername" value="<?php echo $exportername?>">
</div>
<div class="col-md-4">
exporteraddress<input type="text" name="exporteraddress" value="<?php echo $exporteraddress?>">
</div>
<div class="col-md-4">
exporterinvoice<input type="text" name="exporterinvoice" value="<?php echo $exporterinvoice?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
gststatename<input type="text" name="gststatename" value="<?php echo $gststatename?>">
</div>
<div class="col-md-6">
gststatecode<input type="text" name="gststatecode" value="<?php echo $gststatecode?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
consigneename<input type="text" name="consigneename" value="<?php echo $consigneename?>">
</div>
<div class="col-md-6">
consigneeaddress<input type="text" name="consigneeaddress" value="<?php echo $consigneeaddress?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
overseasagentname<input type="text" name="overseasagentname" value="<?php echo $overseasagentname?>">
</div>
<div class="col-md-6">
Forwarder<input type="text" name="forwarder" value="<?php echo $forwarder?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
Notify<input type="text" name="notify" size="30" value="<?php echo $notify?>">
</div>

<div class="col-md-6">
notifyadddress<input type="text" name="notifyaddress" value="<?php echo $notifyaddress?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
sagent<input type="text" name="sagent" value="<?php echo $sagent?>">
</div>
<div class="col-md-4">
buyer<input type="text" name="buyer" value="<?php echo $buyer?>">
</div>
<div class="col-md-4">
shipmenttype<input type="text" name="shipmenttype" value="<?php echo $shipmenttype?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
hawbblno<input type="text" name="hawbblno" value="<?php echo $hawbblno?>">
</div>
<div class="col-md-6">
hawbbldate<input type="text" name="hawbbldate" value="<?php echo $hawbbldate?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
mawbblno<input type="text" name="mawbblno" value="<?php echo $mawbblno?>">
</div>
<div class="col-md-6">
mawbbldate<input type="text" name="mawbbldate" value="<?php echo $mawbbldate?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
grnno<input type="text" name="grnno" value="<?php echo $grnno?>">
</div>
<div class="col-md-6">
pono<input type="text" name="pono" value="<?php echo $pono?>">
</div>
</div>

<div class="row">
<div class="col-md-6">
shipmentterms<input type="text" name="shipmentterms" value="<?php echo $shipmentterms?>">
</div>
<div class="col-md-6">
cargotype<input type="text" name="cargotype" value="<?php echo $cargotype?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
noofpackages<input type="text" name="noofpackages" value="<?php echo $noofpackages?>">
</div>
<div class="col-md-6">
units<input type="text" name="units1" value="<?php echo $units1?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
Gross weight<input type="text" name="grossweight" value="<?php echo $grossweight?>">
</div>
<div class="col-md-6">
Units<input type="text" name="units2" value="<?php echo $units2?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
Netweight=<input type="text"name="netweight" value="<?php echo $netweight?>">
</div>
<div class="col-md-6">
Units<input type="text" name="units3"  value="<?php echo $units3?>">
</div>
</div>
<div class="row">
<div class="col-md-12">
goodsdescription<input type="text" name="goodsdescription" value="<?php echo $goodsdescription?>">
</div>
</div>
<div class="row">
<div class="col-md-12">
marksandnos<input type="text" name="marksandnos" value="<?php echo $marksandnos?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
origincountry<input type="text" name="origincountry" value="<?php echo $origincountry?>">
</div>
<div class="col-md-6">
originport<input type="text" name="originport" value="<?php echo $originport?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
destinationcountry<input type="text" name="destinationcountry" value="<?php echo $destinationcountry?>">
</div>
<div class="col-md-6">
destinationport<input type="text" name="destinationport" value="<?php echo $destinationport?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
length<input type="text" name="length" value="<?php echo $length?>">
</div>
<div class="col-md-4">
width<input type="text" name="width" value="<?php echo $width?>">
</div>
<div class="col-md-4">
height<input type="text" name="height" value="<?php echo $height?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
pkgs<input type="text" name="pkgs" value="<?php echo $pkgs?>">
</div>
<div class="col-md-6">
dimunit<input type="text" name="dimunit" value="<?php echo $dimunit?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
bookingno<input type="text" name="bookingno" value="<?php echo $bookingno?>">
</div>
<div class="col-md-4">
referenceno<input type="text" name="referenceno" value="<?php echo $referenceno?>">
</div>
<div class="col-md-4">
Clearanceat<input type="text" name="clearanceat" value="<?php echo $clearanceat?>">
</div>
</div>
<div class="row">
<div class="col-md-3">
placeofsupply<input type="text" name="placeofsupply" value="<?php echo $placeofsupply?>">
</div>
<div class="col-md-3">
chaname<input type="text" name="chaname" value="<?php echo $chaname?>">
</div>
<div class="col-md-3">
sb<input type="text" name="sb" value="<?php echo $sb?>">
</div>
<div class="col-md-3">
remarks<input type="text" name="remarks" value="<?php echo $remarks?>">
</div>
</div>
<button type="submit" name="update" formaction="updateeasr1.php">Update</button>
</form>
</body>
</head>
</html>