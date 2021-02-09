<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<title> Modify Shipment Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>

<h1> update</h1>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importsea";


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
		$shiplinename=$row["shiplinename"];
		$shiplineaddress=$row["shiplineaddress"];
		$overseasagentname=$row["overseasagentname"];
		$forwarder=$row["forwarder"];
		$notify=$row["notify"];
		$notifyaddress=$row["notifyaddress"];
		$sagent=$row["sagent"];
		$seller=$row["seller"];
		
		$type=$row["type"];
		$shipmenttype=$row["shipmenttype"];
		
		$blno=$row["blno"];
		$bldate=$row["bldate"];
		$hblno=$row["hblno"];
		$hbldate=$row["hbldate"];
		$mblno=$row["mblno"];
		$mbldate=$row["mbldate"];
		$grnno=$row["grnno"];
		$pono=$row["pono"];
		$lrno=$row["lrno"];
		$lrdate=$row["lrdate"];
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
		$containertype=$row["containertype"];
		$cbm=$row["cbm"];
		$containersize=$row["containersize"];
		$containerno=$row["containerno"];
		$containerpickup=$row["containerpickup"];
		$handover=$row["handover"];
		$package=$row["package"];
		$weight=$row["weight"];
		
		$customseal=$row["customseal"];
		$shipperseal=$row["shipperseal"];
		$carrierseal=$row["carrierseal"];
		
		$carrierseal=$row["carrierseal"];
		$origincountry=$row["origincountry"];
		$originport=$row["originport"];
		$loadcountry=$row["loadcountry"];
		$loadport=$row["loadport"];
		$dischargecountry=$row["dischargecountry"];
		$dischargeport=$row["dischargeport"];
		$destinationcountry=$row["destinationcountry"];
		$destinationport=$row["destinationport"];
		$clearanceat=$row["clearanceat"];
		$terminal=$row["terminal"];
		$firstvessel=$row["firstvessel"];
		$secondvessel=$row["secondvessel"];
		$voyage=$row["voyage"];
		$rotationno=$row["rotationno"];
		$eta=$row["eta"];
		$etd=$row["etd"];
		$igmno=$row["igmno"];
		$igmdate=$row["igmdate"];
		$igmgateway=$row["igmgateway"];
		$igmgatewaydate=$row["igmgatewaydate"];
		$inwarddate=$row["inwarddate"];
		$itemno=$row["itemno"];
		$subitemno=$row["subitemno"];
		
		
		$shed=$row["shed"];
		$vesselcode=$row["vesselcode"];
		$emptyyard=$row["emptyyard"];
		
		$bookingno=$row["bookingno"];
		$referenceno=$row["referenceno"];
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
supplieraddress<input type="text" name="supplieraddress"size="60" value="<?php echo $supplieraddress?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Shiplinename<input type="text" name="shiplinename" value="<?php echo $shiplinename?>">
</div>
<div class="col-md-6">
shiplineaddress<input type="text" name="shiplineaddress" value="<?php echo $shiplineaddress?>">
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
sagent<input type="text" name="sagent" value="<?php echo $sagent?>"><br>
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
<div class="col-md-6">
blno<input type="text" name="blno" value="<?php echo $blno?>">
</div>
<div class="col-md-6">
bldate<input type="text" name="bldate" value="<?php echo $bldate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
hblno<input type="text" name="hblno" value="<?php echo $hblno?>">
</div>
<div class="col-md-6">
hbldate<input type="text" name="hbldate" value="<?php echo $hbldate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
mblno<input type="text" name="mblno" value="<?php echo $mblno?>">
</div>
<div class="col-md-6">
mbldate<input type="text" name="mbldate" value="<?php echo $mbldate?>">
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
lrno<input type="text" name="lrno" value="<?php echo $lrno?>">
</div>
<div class="col-md-6">
lrdate<input type="text" name="lrdate" size="30" value="<?php echo $lrdate?>">
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
<div class="row">
<div class="col-md-6">
noofpackages<input type="text" name="noofpackages" value="<?php echo $noofpackages?>">
</div>
<div class="col-md-6">
units<input type="text" name="units1" value="<?php echo $units1?>">
</div></div><br>
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
<div class="col-md-12">
goodsdescription<input type="text"  name="goodsdescription" rows="10" cols="40" value="<?php echo $goodsdescription?>">
</div>
</div><br>
<div class="row">
<div class="col-md-12">
marksandnos<input type="text" name="marksandnos" rows="10"cols="40" value="<?php echo $marksandnos?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
containertype<input type="text" name="containertype" value="<?php echo $containertype?>">
</div>
<div class="col-md-4">
cbm<input type="text" name="cbm" value="<?php echo $cbm?>">
</div>
<div class="col-md-4">
containersize<input type="text" name="containersize" size="30" value="<?php echo $containersize?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
containerno<input type="text" name="containerno" value="<?php echo $containerno?>">
</div>
<div class="col-md-4">
containerpickup<input type="text" name="containerpickup" value="<?php echo $containerpickup?>">
</div>
<div class="col-md-4">
handover<input type="text" name="handover" value="<?php echo $handover?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
package<input type="text" name="package" value="<?php echo $package?>">
</div>
<div class="col-md-6">
weight<input type="text" name="weight" value="<?php echo $weight?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
customseal<input type="text" name="customseal" value="<?php echo $customseal?>">
</div>
<div class="col-md-4">
shipperseal<input type="text" name="shipperseal" value="<?php echo $shipperseal?>">
</div>
<div class="col-md-4">
carrierseal<input type="text" name="carrierseal" value="<?php echo $carrierseal?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
origincountry<input type="text" name="origincountry" value="<?php echo $origincountry?>">
</div>
<div class="row">
originport<input type="text" name="originport" value="<?php echo $originport?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
loadcountry<input type="text" name="loadcountry" value="<?php echo $loadcountry?>">
</div>
<div class="row">
loadport<input type="text" name="loadport" value="<?php echo $loadport?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
dischargecountry<input type="text" name="dischargecountry" value="<?php echo $dischargecountry?>">
</div>
<div class="col-md-6">
dischargeport<input type="text" name="dischargeport" value="<?php echo $dischargeport?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
destinationcountry<input type="text" name="destinationcountry" value="<?php echo $destinationcountry?>"><br>
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
firstvessel<input type="text" name="firstvessel" value="<?php echo $firstvessel?>">
</div>
<div class="col-md-6">
secondvessel<input type="text" name="secondvessel" value="<?php echo $secondvessel?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
voyage<input type="text" name="voyage" value="<?php echo $voyage?>">
</div>
<div class="col-md-6">
rotationno<input type="text" name="rotationno" value="<?php echo $rotationno?>">
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
</div><br>
<div class="row">
<div class="col-md-6">
igmgateway<input type="text" name="igmgateway" value="<?php echo $igmgateway?>">
</div>
<div class="col-md-6">
igmgatewaydate<input type="text" name="igmgatewaydate" value="<?php echo $igmgatewaydate?>">
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
inwarddate<input type="text" name="inwarddate" value="<?php echo $inwarddate?>">
</div>
<div class="col-md-6">
itemno<input type="text" name="itemno" value="<?php echo $itemno?>">
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
subitemno<input type="text" name="subitemno" value="<?php echo $subitemno?>">
</div>
<div class="col-md-6">
shed<input type="text" name="shed" value="<?php echo $shed?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
vesselcode<input type="text" name="vesselcode" value="<?php echo $vesselcode?>">
</div>
<div class="col-md-6">
emptyyard<input type="text" name="emptyyard" value="<?php echo $emptyyard?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">

bookingno<input type="text" name="bookingno" value="<?php echo $bookingno?>">
</div>
<div class="col-md-6">
referenceno<input type="text" name="referenceno" value="<?php echo $referenceno?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
chaname<input type="text" name="chaname" value="<?php echo $chaname?>">
</div>
<div class="col-md-6">
sb<input type="text" name="sb" value="<?php echo $sb?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
remarks<input type="text" name="remarks" value="<?php echo $remarks?>">
</div>
</div><br>
<button type="submit" name="update" formaction="updateissr1.php">Update</button>
</form>
</body>
</head>
</html>