<html>
<head>
<script>
function gettotalvaluefc()
{
	var productrate=document.getElementById("productrate");
	var quantity=document.getElementById("quantity");
	document.getElementById("totalvaluefc").value=productrate.value*quantity.value;
	
}
function getpmv()
{
	var pmvperc=document.getElementById("pmvpercentage");
	var exchrate=document.getElementById("exchangerate");
	var productrate=document.getElementById("productrate");
	document.getElementById("pmv").value=((exchangerate.value)*(productrate.value)*(pmvperc.value)/100);
	
	
	
	
}


function gettotalpmv()
{
	var pmv=document.getElementById("pmv");
	var qty=document.getElementById("quantity");
	document.getElementById("totalpmv").value=pmv.value*qty.value;
	
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
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
$sql = "SELECT * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]' and invoicesrno='$_POST[invoicesrno]'and itemno='$_POST[itemno]' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$jobno=$_POST["jobno"];
		$branch=$row["branch"];
		$fy=$row["fy"];
		$invoicesrno=$row["invoicesrno"];
		
		$itemno=$row["itemno"];
		$ritc=$row["ritc"];
		$goodsdescription=$row["goodsdescription"];
		$quantity=$row["quantity"];
		$unit=$row["unit"];
		$productrate=$row["productrate"];
		$currencyname=$row["currencyname"];
        $exchangerate=$row["exchangerate"];
		
		$fobinr=$row["fobinr"];	
         $dbksrno=$row["dbksrno"];
        $dbkrate=$row["dbkrate"];
		$dbkratespec=$row["dbkratespec"];
		$dbkamount=$row["dbkamount"];	
        $schemecode=$row["schemecode"];
		$schemedescription=$row["schemedescription"];
         $pmvpercentage=$row["pmvpercentage"];	
        $endusecode=$row["endusecode"];	
        $endusedescription=$row["endusedescription"];
		$igstpaymentstatus=$row["igstpaymentstatus"];
         $taxablevalue=$row["taxablevalue"];
         $igstrate=$row["igstrate"];
         $igstamount=$row["igstamount"];	
        $reward=$row["reward"];	
        $str=$row["str"];
		$accessory=$row["accessory"];
         $cess=$row["cess"];		 
		}
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<title> Modify edi item Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>
<h1>modify edi item</h1>
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
&nbsp invoicesrno<input type="text" name="invoicesrno" value="<?php echo $invoicesrno?>">
</div>

</div><br>
<div class="row">
<div class="col-md-3">
&nbsp itemno<input type="text" name="itemno" value="<?php echo $itemno?>">
</div>
<div class="col-md-3">
ritc
<input type="text" name="ritc" value="<?php echo $ritc?>">


</div>
<div class="col-md-3">
goodsdescription<input type="text" name="goodsdescription" value="<?php echo $goodsdescription?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp quantity<input type="text" name="quantity" id="quantity" value="<?php echo $quantity?>">
</div>
<div class="col-md-3">
unit<input type="text" name="unit" id="unit" value="<?php echo $unit?>">
</div>
<div class="col-md-3">
productrate<input type="text" name="productrate" id="productrate" value="<?php echo $productrate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp currencyname<input type="text" name="currencyname" value="<?php echo $currencyname?>">
</div>
<div class="col-md-3">
exchangerate<input type="text" name="exchangerate" id="exchangerate" value="<?php echo $exchangerate?>">
</div>
<div class="col-md-3">
totalvaluefc<input type="text" name="totalvaluefc" id="totalvaluefc" onclick="gettotalvaluefc()">
</div>
<div class="col-md-3">
fobinr<input type="text" name="fobinr" id="fobinr" value="<?php echo $fobinr?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp dbksrno<input type="text" name="dbksrno" value="<?php echo $dbksrno?>">
</div>
<div class="col-md-3">
dbkrate<input type="text" name="dbkrate" value="<?php echo $dbkrate?>">
</div>
<div class="col-md-3">
dbkratespec<input type="text" name="dbkratespec" value="<?php echo $dbkratespec?>">
</div>
<div class="col-md-3">
dbkamount<input type="text" name="dbkamount" value="<?php echo $dbkamount?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
&nbsp schemecode<input type="text" name="schemecode" value="<?php echo $schemecode?>">
</div>
<div class="col-md-6">
 schemedescription<input type="text" name="schemedescription" value="<?php echo $schemedescription?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
&nbsp pmvpercentage<input type="text" name="pmvpercentage" id="pmvpercentage" value="<?php echo $pmvpercentage?>">
</div>
<div class="col-md-4">
pmv<input type="text" name="pmv" id="pmv" onclick="getpmv()" >
</div>
<div class="col-md-4">
totalpmv<input type="text" name="totalpmv" id="totalpmv" onclick="gettotalpmv()">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp endusecode<input type="text" name="endusecode" value="<?php echo $endusecode?>">
</div>
<div class="col-md-3">
endusedescription<input type="text" name="endusedescription" id="endusedescription" value="<?php echo $endusedescription?>">
</div>
<div class="col-md-3">
igstpaymentstatus<input type="text" name="igstpaymentstatus"  value="<?php echo $igstpaymentstatus?>">
</div>
<div class="col-md-3">
taxablevalue<input type="text" name="taxablevalue"  value="<?php echo $taxablevalue?>">
</div>
</div><br>
<div class="row">
<div class="col-md-2">
&nbsp igstrate<input type="text" name="igstrate" value="<?php echo $igstrate?>">
</div>
<div class="col-md-2">
igstamount<input type="text" name="igstamount" value="<?php echo $igstamount?>">
</div>
<div class="col-md-2">
reward<input type="text" name="reward" value="<?php echo $reward?>">
</div>
<div class="col-md-2" style="position:relative; top:20;">
 str<input type="text" name="str" value="<?php echo $str?>">
</div>
<div class="col-md-2">
accessory<input type="text" name="accessory" value="<?php echo $accessory?>">
</div>
<div class="col-md-2">
cess<input type="text" name="cess" value="<?php echo $cess?>">
</div>
</div><br>
<button type="submit" name="updateediinvoice" formaction="updateesediitem1a.php">update item</button>
</form>
</body>
</head>
</html>