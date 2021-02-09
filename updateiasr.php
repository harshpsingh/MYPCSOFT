<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<title> Modify shipment Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>

<h1> update</h1>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importair";


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
		
		$importername=$row["importername"];
		$importeraddress=$row["importeraddress"];
		$importerinvoice=$row["importerinvoice"];
		
		$gststatename=$row["gststatename"];
		$gststatecode=$row["gststatecode"];
		
		$suppliername=$row["suppliername"];
		$supplieraddress=$row["supplieraddress"];
		
		$overseasagentname=$row["overseasagentname"];
		$forwarder=$row["forwarder"];
		$notify=$row["notify"];
		$notifyaddress=$row["notifyaddress"];
		$sagent=$row["sagent"];
		$seller=$row["seller"];
		
		$type=$row["type"];
		$shipmenttype=$row["shipmenttype"];
		$hawbnature=$row["hawbnature"];
		$cargotype=$row["cargotype"];
		$mode=$row["mode"];
		$hawbblno=$row["hawbblno"];
		$hawbbldate=$row["hawbbldate"];
		$mawbblno=$row["mawbblno"];
		$mawbbldate=$row["mawbbldate"];
		$grnno=$row["grnno"];
		$pono=$row["pono"];
		$dono=$row["dono"];
		$dodate=$row["dodate"];
		$shipmentterms=$row["shipmentterms"];
		$placeofsupply=$row["placeofsupply"];
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
		$clearanceat=$row["clearanceat"];
		$terminal=$row["terminal"];
		$firstcarrier=$row["firstcarrier"];
		$secondcarrier=$row["secondcarrier"];
		
		$eta=$row["eta"];
		$etd=$row["etd"];
		$igmno=$row["igmno"];
		$igmdate=$row["igmdate"];
		
		
		
		
		
		$bookingno=$row["bookingno"];
		$referenceno=$row["referenceno"];
		
		$remarks=$row["remarks"];
	
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
<div class="row">
<div class="col-md-4">	
docketno<input type="text" name="docketno" size="30" value="<?php echo $_POST["docketno"]?>">
</div>

<div class="col-md-4">
docketdate<input type="text" name="docketdate" value="<?php echo $docketdate?>">
</div>

<div class="col-md-4">
Clearancedate<input type="text" name="clearancedate" value="<?php echo $clearancedate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Branch<input type="text" name="branch" value="<?php echo $branch?>">
</div>
<div class="col-md-6">
fy<input type="text" name="fy" value="<?php echo $fy?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">	
importername<input type="text" name="importername" value="<?php echo $importername?>">
</div>

<div class="col-md-4">
importeraddress<input type="text" name="importeraddress" value="<?php echo $importeraddress?>">
</div>

<div class="col-md-4">
importerinvoice<input type="text" name="importerinvoice" value="<?php echo $importerinvoice?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
gststatename<input type="text" name="gststatename" value="<?php echo $gststatename?>">
</div>
<div class="col-md-6">
gststatecode<input type="text" name="gststatecode" value="<?php echo $gststatecode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
suppliername<input type="text" name="suppliername" value="<?php echo $suppliername?>">
</div>
<div class="col-md-6">
supplieraddress<input type="text" name="supplieraddress" value="<?php echo $supplieraddress?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
overseasagentname<input type="text" name="overseasagentname" value="<?php echo $overseasagentname?>">
</div>
<div class="col-md-6">
Forwarder<input type="text" name="forwarder" value="<?php echo $forwarder?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Notify<input type="text" name="notify" size="30" value="<?php echo $notify?>">
</div>
<div class="col-md-6">
notifyadddress<input type="text" name="notifyaddress" value="<?php echo $notifyaddress?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
sagent<input type="text" name="sagent" value="<?php echo $sagent?>">
</div>
<div class="col-md-6">
seller<input type="text" name="seller" value="<?php echo $seller?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
type<input type="text" name="type" value="<?php echo $type?>">
</div>
<div class="col-md-6">
shipmenttype<input type="text" name="shipmenttype" value="<?php echo $shipmenttype?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">	
hawbnature<input type="text" name="hawbnature" value="<?php echo $hawbnature?>">
</div>

<div class="col-md-4">
cargotype<input type="text" name="cargotype" value="<?php echo $cargotype?>">
</div>

<div class="col-md-4">

 mode<input type="text" name="mode" value="<?php echo $mode?>">
 </div>
 </div></br>
 <div>
<div class="row">
<div class="col-md-6">
hawbblno<input type="text" name="hawbblno" value="<?php echo $hawbblno?>">
</div>
<div class="col-md-6">
hawbbldate<input type="text" name="hawbbldate" value="<?php echo $hawbbldate?>">
,/div>
</div><br>
<div class="row">
<div class="col-md-6">
mawbblno<input type="text" name="mawbblno" value="<?php echo $mawbblno?>">
</div>
<div class="col-md-6">
mawbbldate<input type="text" name="mawbbldate" value="<?php echo $mawbbldate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
grnno<input type="text" name="grnno" value="<?php echo $grnno?>">
</div>
<div class="col-md-6">
pono<input type="text" name="pono" value="<?php echo $pono?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
dono<input type="text" name="dono" value="<?php echo $dono?>">
</div>
<div class="col-md-6">
dodate<input type="text" name="dodate" size="30" value="<?php echo $dodate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
shipmentterms<input type="text" name="shipmentterms" value="<?php echo $shipmentterms?>">
</div>
<div class="col-md-6">
placeofsupply<input type="text" name="pos" value="<?php echo $placeofsupply?>">
</div>
</div><br>
<div>
<div class="row">
<div class="col-md-6">
noofpackages<input type="text" name="noofpackages" value="<?php echo $noofpackages?>">
</div>
<div class="col-md-6">
units<input type="text" name="units1" value="<?php echo $units1?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Gross weight<input type="text" name="grossweight" value="<?php echo $grossweight?>">
</div>
<div class="col-md-6">
Units<input type="text" name="units2" value="<?php echo $units2?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Netweight=<input type="text"name="netweight" value="<?php echo $netweight?>">
</div>
<div class="col-md-6">
Units<input type="text" name="units3"  value="<?php echo $units3?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
goodsdescription<input type="text" name="goodsdescription" value="<?php echo $goodsdescription?>">
</div>
<div class="col-md-6">
marksandnos<input type="text" name="marksandnos" value="<?php echo $marksandnos?>">
</div>
</div><br>

</div>
<div>
<div class="row">
<div class="col-md-6">
origincountry<input type="text" name="origincountry" value="<?php echo $origincountry?>">
</div>
<div class="col-md-6">
originport<input type="text" name="originport" value="<?php echo $originport?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
destinationcountry<input type="text" name="destinationcountry" value="<?php echo $destinationcountry?>">
</div>
<div class="col-md-6">
destinationport<input type="text" name="destinationport" value="<?php echo $destinationport?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
clearanceat<input type="text" name="clearanceat" value="<?php echo $clearanceat?>">
</div>
<div class="col-md-6">
Terminal<input type="text" name="terminal" value="<?php echo $terminal?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
firstcarrier<input type="text" name="firstcarrier" value="<?php echo $firstcarrier?>">
</div>
<div class="col-md-6">
secondcarrier<input type="text" name="secondcarrier" value="<?php echo $secondcarrier?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
eta<input type="text" name="eta" value="<?php echo $eta?>">
</div>
<div class="col-md-6">
etd<input type="text" name="etd" value="<?php echo $etd?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
igmno<input type="text" name="igmno" size="30" value="<?php echo $igmno?>">
</div>
<div class="col-md-6">
igmdate<input type="text" name="igmdate" value="<?php echo $igmdate?>">
</div>
<div><br>
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
remarks<input type="text" name="remarks" value="<?php echo $remarks?>">
</div>
</div><br>
</div>
<button type="submit" name="update" style="position:relative; left:20;"formaction="updateiasr1.php">Update</button>
</form>
</body>
</head>
</html>