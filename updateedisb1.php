<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<title> Modify edi sb1  Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>

<h1> update</h1>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$jobno=$_POST["jobno"];
		$jobdate=$row["jobdate"];
		$branch=$row["branch"];
		$fy=$row["fy"];
		$exportername=$row["exportername"];
		$exporteraddress1=$row["exporteraddress1"];
		$exporteraddress2=$row["exporteraddress2"];
		$exportercity=$row["city"];
		$exporterstate=$row["state"];
		$exporterpin=$row["pin"];
		$gstintype=$row["gstintype"];
		$gstin=$row["gstin"];
		$pan=$row["panno"];
		$gststatename=$row["gststate"];
		$gststatecode=$row["gstcode"];
		$branchcode=$row["branchcode"];
		$iec=$row["iec"];
		$adcode=$row["adcode"];
		$forexcode=$row["forexcode"];
		$ifsccode=$row["ifsccode"];
		$exportertype=$row["exportertype"];
		$exporterclass=$row["exporterclass"];
		$consigneename=$row["consigneename"];
		$consigneeaddress=$row["consigneeaddress"];
		$consigneecountryname=$row["consigneecountryname"];
		$consigneecountrycode=$row["consigneecountrycode"];
		$chaname=$row["chaname"];
		$locationname=$row["locationname"];
		$chanumber=$row["chanumber"];
		$stateorigin=$row["stateorigin"];
		$dischargecountryname=$row["dischargecountryname"];
		$dischargecountrycode=$row["dischargecountrycode"];
		$dischargeportname=$row["dischargeportname"];
		$dischargeportcode=$row["dischargeportcode"];
		$destinationcountryname=$row["destinationcountryname"];
		$destinationcountrycode=$row["destinationcountrycode"];
		$destinationportname=$row["destinationportname"];
		$destinationportcode=$row["destinationportcode"];
		$rbiwaiverno=$row["rbiwaiverno"];
		$rbiwaiverdate=$row["rbiwaiverdate"];
		$seal=$row["seal"];
		$factorystuffed=$row["factorystuffed"];
		$natureofcargo=$row["natureofcargo"];
		$sample=$row["sample"];
		$totalpackages=$row["totalpackages"];
		$loosepackages=$row["loosepackages"];
		$packunit=$row["packunit"];
		$noofcontainers=$row["noofcontainers"];
		$grossweight=$row["grossweight"];
		$netweight=$row["netweight"];
		$wtunit=$row["wtunit"];
		$packfrom=$row["packfrom"];
		$packto=$row["packto"];
		$packtype=$row["packtype"];
		$containerno=$row["containerno"];
		$containersize=$row["containersize"];
		$excisesealno=$row["excisesealno"];
		$sealdate=$row["sealdate"];
		$noofpacketsstuffed=$row["noofpacketsstuffed"];
		$sealtype=$row["sealtype"];
		$deviceid=$row["deviceid"];
		$doctype=$row["doctype"];
		$docno=$row["docno"];
		$marksno=$row["marksno"];
		
		}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
		
<div class="row">
<div class="col-md-3">	
jobno<input type="text" name="jobno" readonly size="30" value="<?php echo $_POST["jobno"]?>">
</div>

<div class="col-md-3">
jobdate<input type="text" name="jobdate" readonly value="<?php echo $jobdate?>">
</div>

<div class="col-md-3">
Branch<input type="text" name="branch"readonly value="<?php echo $branch?>">
</div>
<div class="col-md-3">
fy<input type="text" name="fy"  readonly value="<?php echo $fy?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
exportername<input type="text" name="exportername" value="<?php echo $exportername?>">
</div>
<div class="col-md-4">
exporteraddress1<input type="text" name="exporteraddress1" value="<?php echo $exporteraddress1?>">
</div>
<div class="col-md-4">
exporteraddress2<input type="text" name="exporteraddress2" value="<?php echo $exporteraddress2?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
exportercity<input type="text" name="city" value="<?php echo $exportercity?>">
</div>
<div class="col-md-4">
exporter state<input type="text" name="state" value="<?php echo $exporterstate?>">
</div>
<div class="col-md-4">
exporterpin<input type="text" name="pin" value="<?php echo $exporterpin?>">
</div>

</div><br>
<div class="row">
<div class="col-md-4">
gstintype<input type="text" name="gstintype" value="<?php echo $gstintype?>">
</div>
<div class="col-md-4">
gstin<input type="text" name="gstin" value="<?php echo $gstin?>">
</div>
<div class="col-md-4">
pan<input type="text" name="pan" value="<?php echo $pan?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
gststate<input type="text" name="gststatename" size="30" value="<?php echo $gststatename?>">
</div>

<div class="col-md-3">
gststatecode<input type="text" name="gststatecode" value="<?php echo $gststatecode?>">
</div>

<div class="col-md-3">
Branchcode<input type="text" name="branchcode" value="<?php echo $branchcode?>">
</div>
<div class="col-md-3">
iec<input type="text" name="iec" value="<?php echo $iec?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
adcode<input type="text" name="adcode" value="<?php echo $adcode?>">
</div>
<div class="col-md-4">
forexcode<input type="text" name="forexcode" value="<?php echo $forexcode?>">
</div>
<div class="col-md-4">
ifsccode<input type="text" name="ifsccode" value="<?php echo $ifsccode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
exportertype<input type="text" name="exportertype" value="<?php echo $exportertype?>">
</div>
<div class="col-md-6">
exporterclass<input type="text" name="exporterclass" value="<?php echo $exporterclass?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
consignee<input type="text" name="consigneename" size="30" value="<?php echo $consigneename?>">
</div>

<div class="col-md-3">
consigneeaddress<input type="text" name="consigneeaddress" value="<?php echo $consigneeaddress?>">
</div>

<div class="col-md-3">
consigneecountry<input type="text" name="consigneecountryname" value="<?php echo $consigneecountryname?>">
</div>
<div class="col-md-3">
consigneecountrycode<input type="text" name="consigneecountrycode" value="<?php echo $consigneecountrycode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
chaname<input type="text" name="chaname" size="30" value="<?php echo $chaname?>">
</div>

<div class="col-md-3">
location<input type="text" name="locationname" value="<?php echo $locationname?>">
</div>

<div class="col-md-3">
chanumber<input type="text" name="chanumber" value="<?php echo $chanumber?>">
</div>
<div class="col-md-3">
stateorigin<input type="text" name="stateorigin" value="<?php echo $stateorigin?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
dischargecountryname<input type="text" name="dischargecountryname" size="12" value="<?php echo $dischargecountryname?>">
</div>

<div class="col-md-3">
dischargecountrycode<input type="text" name="dischargecountrycode" size="4" value="<?php echo $dischargecountrycode?>">
</div>

<div class="col-md-3">
dischargeportname<input type="text" name="dischargeportname" value="<?php echo $dischargeportname?>">
</div>
<div class="col-md-3">
dischargeportcode<input type="text" name="dischargeportcode" value="<?php echo $dischargeportcode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
destinationcountryname<input type="text" name="destinationcountryname" size="12" value="<?php echo $destinationcountryname?>">
</div>

<div class="col-md-3">
destinationcountrycode<input type="text" name="destinationcountrycode" size="4"value="<?php echo $destinationcountrycode?>">
</div>

<div class="col-md-3">
destinationportname<input type="text" name="destinationportname" value="<?php echo $destinationportname?>">
</div>
<div class="col-md-3">
destinationportcode<input type="text" name="destinationportcode" value="<?php echo $destinationportcode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
rbiwaiverno<input type="text" name="rbiwaiverno" value="<?php echo $rbiwaiverno?>">
</div>
<div class="col-md-4">
rbiwaiverdate<input type="text" name="rbiwaiverdate" value="<?php echo $rbiwaiverdate?>">
</div>
<div class="col-md-4">
Seal<input type="text" name="seal" value="<?php echo $seal?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
factorystuffed<input type="text" name="factorystuffed" value="<?php echo $factorystuffed?>">
</div>
<div class="col-md-6">
natureofcargo<input type="text" name="natureofcargo" value="<?php echo $natureofcargo?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
Sample<input type="text" name="sample" size="30" value="<?php echo $sample?>">
</div>

<div class="col-md-3">
totalpackages<input type="text" name="totalpackages" value="<?php echo $totalpackages?>">
</div>

<div class="col-md-3">
Pack Unit<input type="text" name="packunit" value="<?php echo $packunit?>">
</div>
<div class="col-md-3">
Loosepackages<input type="text" name="loosepackages" value="<?php echo$loosepackages?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
noofcontainers<input type="text" name="noofcontainers" size="10" value="<?php echo $noofcontainers?>">
</div>

<div class="col-md-3">
grossweight<input type="text" name="grossweight" value="<?php echo $grossweight?>">
</div>

<div class="col-md-3">
netweight<input type="text" name="netweight" value="<?php echo $netweight?>">
</div>
<div class="col-md-3">w
wtunit<input type="text" name="wtunit" value="<?php echo $wtunit?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
packfrom<input type="text" name="packfrom" value="<?php echo $packfrom?>">
</div>
<div class="col-md-4">
packto<input type="text" name="packto" value="<?php echo $packto?>">
</div>
<div class="col-md-4">
packtype<input type="text" name="packtype" value="<?php echo $packtype?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
containerno<input type="text" name="containerno" value="<?php echo $containerno?>">
</div>
<div class="col-md-6">
containersize<input type="text" name="containersize" value="<?php echo $containersize?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
excisesealno<input type="text" name="excisesealno" size="10" value="<?php echo $excisesealno?>">
</div>

<div class="col-md-3">
sealdate<input type="text" name="sealdate" value="<?php echo $sealdate?>">
</div>

<div class="col-md-3">
noofpacketstuffed<input type="text" name="noofpacketsstuffed"  value="<?php echo $noofpacketsstuffed?>">
</div>
<div class="col-md-3">
sealtype<input type="text" name="sealtype" value="<?php echo $sealtype?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">	
deviceid<input type="text" name="deviceid" size="10" value="<?php echo $deviceid?>">
</div>

<div class="col-md-3">
doctype<input type="text" name="doctype" value="<?php echo $doctype?>">
</div>

<div class="col-md-3">
docno<input type="text" name="docno" value="<?php echo $docno?>">
</div>
<div class="col-md-3">
marksno<input type="text" name="marksno" value="<?php echo $marksno?>">
</div>
</div><br>
<button type="submit" name="update" formaction="updateedisb1a.php">Update</button>
</form>
</body>
</head>
</html>