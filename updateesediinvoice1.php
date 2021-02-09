<html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
function getfobfc()
{
	var invoice=document.getElementById("invoicevalue");
	var freight=document.getElementById("freightamount");
	var insurance=document.getElementById("insuranceamount");
	document.getElementById("fobfc").value=invoice.value-freightamount.value-insuranceamount.value;
	
}
function getfob()
{
	var fobfc=document.getElementById("fobfc");
	var exch=document.getElementById("exchangerate");
	document.getElementById("fob").value=fobfc.value*exch.value;
	
}
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<?php
session_start();
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
$sql = "SELECT * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]' and invoicesrno='$_POST[invoicesrno]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$jobno=$_POST["jobno"];
		$branch=$row["branch"];
		$fy=$row["fy"];
		$invoicesrno=$row["invoicesrno"];
		$invoiceno=$row["invoiceno"];
		$invoicedate=$row["invoicedate"];
		$invoicevalue=$row["invoicevalue"];
		$currencyname=$row["currencyname"];
		$exchangerate=$row["exchangerate"];
		$paymentnature=$row["paymentnature"];
		$paymentperiod=$row["paymentperiod"];
		$contractno=$row["contractno"];
		$natureofcontract=$row["natureofcontract"];
		$finb=$row["finb"];
		$buyername=$row["buyername"];
		$buyeraddress=$row["buyeraddress"];
		$freightrate=$row["freightrate"];
		$freightcurrency=$row["freightcurrency"];
		$freightamount=$row["freightamount"];
		$insurancerate=$row["insurancerate"];
		$insurancecurrency=$row["insurancecurrency"];
		$insuranceamount=$row["insuranceamount"];
		$commissionrate=$row["commissionrate"];
		$commissioncurrency=$row["commissioncurrency"];
		$commissionamount=$row["commissionamount"];
		$discountrate=$row["discountrate"];
		$discountcurrency=$row["discountcurrency"];
		$discountamount=$row["discountamount"];
		$packchgsrate=$row["packchgsrate"];
		$packchgscurrency=$row["packchgscurrency"];
		$packchgsamount=$row["packchgsamount"];
		$otherdeductionrate=$row["otherdeductionrate"];
		$otherdeductioncurrency=$row["otherdeductioncurrency"];
		$otherdeductionamount=$row["otherdeductionamount"];
			
		}
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<title> Modify edi invoice Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>
<h1>modify edi invoice</h1>
<form method="post">
<div class="row">
<div class="col-md-4">
&nbsp jobno<input type="text" name="jobno" value="<?php echo $jobno?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" value="<?php echo $branch?>">
</div>
<div class="col-md-4">
fy<input type="text" name="fy" value="<?php echo $fy?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
invoicesrno<input type="text" name="invoicesrno" value="<?php echo $invoicesrno?>">
</div>
<div class="col-md-3">
invoiceno<input type="text" name="invoiceno" value="<?php echo $invoiceno?>">
</div>
<div class="col-md-3">
invoicedate<input type="text" name="invoicedate" value="<?php echo $invoicedate?>">
</div>
<div class="col-md-3">
invoicevalue<input type="text" name="invoicevalue" id="invoicevalue" value="<?php echo $invoicevalue?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
currencyname<input type="text" name="currencyname" value="<?php echo $currencyname?>">
</div>
<div class="col-md-3">
exchangerate<input type="text" name="exchangerate" id="exchangerate"value="<?php echo $exchangerate?>">
</div>
<div class="col-md-3">
paymentnature<input type="text" name="paymentnature" value="<?php echo $paymentnature?>">
</div>
<div class="col-md-3">
paymentperiod<input type="text" name="paymentperiod" value="<?php echo $paymentperiod?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 contractno<input type="text" name="contractno" value="<?php echo $contractno?>">
</div>
<div class="col-md-4">
natureofcontract<input type="text" name="natureofcontract" value="<?php echo $natureofcontract?>">
</div>
<div class="col-md-4">
finb<input type="text" name="finb" value="<?php echo $finb?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
buyername<input type="text" name="buyername" value="<?php echo $buyername?>">
</div>
<div class="col-md-6">
buyeraddress<input type="text" name="buyeraddress" value="<?php echo $buyeraddress?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 freightrate<input type="text" name="freightrate" id="freightrate" value="<?php echo $freightrate?>">
</div>
<div class="col-md-4">
freightcurrency<input type="text" name="freightcurrency" value="<?php echo $freightcurrency?>">
</div>
<div class="col-md-4">
freightamount<input type="text" name="freightamount" id ="freightamount"value="<?php echo $freightamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 Insurance rate<input type="text" name="insurancerate" value="<?php echo $insurancerate?>">
</div>
<div class="col-md-4">
insurance currency<input type="text" name="insurancecurrency" value="<?php echo $insurancecurrency?>">
</div>
<div class="col-md-4">
insurance amount<input type="text" name="insuranceamount"id="insuranceamount" value="<?php echo $insuranceamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 Commission rate<input type="text" name="commissionrate" value="<?php echo $commissionrate?>">
</div>
<div class="col-md-4">
Commission currency<input type="text" name="commissioncurrency" value="<?php echo $commissioncurrency?>">
</div>
<div class="col-md-4">
Commission amount<input type="text" name="commissionamount" value="<?php echo $commissionamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 discount rate<input type="text" name="discountrate" value="<?php echo $discountrate?>">
</div>
<div class="col-md-4">
discount currency<input type="text" name="discountcurrency" value="<?php echo $discountcurrency?>">
</div>
<div class="col-md-4">
discount amount<input type="text" name="discountamount" value="<?php echo $discountamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
packchgs rate<input type="text" name="packchgsrate" value="<?php echo $packchgsrate?>">
</div>
<div class="col-md-4">chgs
pack currency<input type="text" name="packchgscurrency" value="<?php echo $packchgscurrency?>">
</div>
<div class="col-md-4">
packchgs amount<input type="text" name="packchgsamount" value="<?php echo $packchgsamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
 otherdeduction rate<input type="text" name="otherdeductionrate" value="<?php echo $otherdeductionrate?>">
</div>
<div class="col-md-4">
otherdeduction currency<input type="text" name="otherdeductioncurrency" value="<?php echo $otherdeductioncurrency?>">
</div>
<div class="col-md-4">
otherdeduction  amount<input type="text" name="otherdeductionamount" value="<?php echo $otherdeductionamount?>">
</div>
</div><br>
<div class="row" style="position:relative; left:15;">
<div class="col-md-6">
<label>FOBFc</label><input type="text" name="fobfc" id="fobfc" onclick="getfobfc()">
</div>
<div class="col-md-6">
<label>Fob</label><input type="text" name="fob" id="fob" onclick="getfob()">
</div>
</div><br>
<button type="submit" name="updateediinvoice" formaction="updateesediinvoice1a.php">update invoice</button>
</form>
</body>
</head>
</html>
