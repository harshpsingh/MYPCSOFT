<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>

function gethsncode(val) {
	$.ajax({
	type: "POST",
	url: "get_hsncode.php",
	data:'chargename='+val,
	success: function(data){
		$("#chargetype").html(data);
	}
	});
}
function getexchrate(val) {
	$.ajax({
	type: "POST",
	url: "get_exchangerate.php",
	data:'currencyname='+val,
	success: function(data){
		$("#exchangerate").html(data);
	}
	});
}
</script>
<title>Service invoice</title>
<body style="background-color:#ac57de">
<h1> SERVICE Invoice</h1>
<?php
session_start();
$_SESSION['docketno']=$_POST['docketno'];
?>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password="";

try {
    $conn = new PDO("mysql:host=$servername;dbname=exportair", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt = $conn->prepare('select * From invoicecharge');
		$smt->execute();
		$data = $smt->fetchAll();
		

try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt1 = $conn->prepare('select * From currencymaster');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		$branch=$_SESSION['branch'];
		$docketno=$_POST['docketno'];
		$fy=$_SESSION['fy'];
		if($branch=='New Delhi')
		{
			$br='DEL';
		}
		else if($branch=='Mumbai')
		{
			$br='MH';
		}
		else if($branch=='Ludhiana')
		{
			$br='LDH';
		}
		else if($branch=='Haryana')
		{
			$br='HR';
		}
		else if($branch=='Uttar Pradesh')
		{
			$br=='UP';
		}
		
		
		?>
		<div class="row">
<div class="four columns">

<label>docketno</label><input type="text" name="docketno" readonly  value="<?php echo $_POST['docketno']?>">
</div>
<div class="four columns">
<label>branch</label><input type="text" id="branch" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
<label>year</label><input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
<div class="four columns">
<label>Exportername</label>
<?php

$conn = new mysqli('localhost', 'root', '', 'exportair') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from shipmentregister where docketno='$_POST[docketno]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='exportername'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $exportername);
              
                  $exportername = $row['exportername']; 
                  echo '<option>'.$exportername.'</option>';
                 
}

    echo "</select>";?>
<?php $dn=explode("/",$docketno);
	$dno=$dn[2];
	?>
	</div>
	<div class="four columns">
<label>Billno</label><input type="text"id="billnum" name="billno"value="<?php echo $br."/AE/S".$dno."/".$fy?>" >
</div>
<div class="four columns">
<label>Bill date</label><input type="date" name="billdate">
</div>
</div><br>
<div class="row">
<div class="three columns">
<label>Invoiceno</label><input type="text" name="invoiceno">
</div>
<div class="three columns">
<label>Invoice date</label><input type="date" name="invoicedate">
</div>
<div class="three columns">
<label>Category</label><input type="text" name="category">
</div>
<div class="three columns">
<label>Narration</label><input type="text" name="narration">
</div>
</div>
<button type="submit" name="save1" class="button-primary" formaction="saveinvoicedetailsair.php" >Save1</button>
</form>
<iframe name="frame1" src="vieweainvoice.php" width="600" height="200" style="background-color:#ffffff;"></iframe>

<form name="invoicecharge" method="post">
<div class="row">
<div class="three columns">
<label>docketno</label><input type="text" name="docketno" value="<?php echo $_SESSION['docketno']?>" >
</div>
<div class="three columns">
<label>branch</label><input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="three columns">
<label>year</label><input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
<div class="three columns">
<label>chargename</label><select name="chargename" id="chargename" onChange="gethsncode(this.value)" >
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["chargename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="three columns">
<label>hsncode</label><select name="chargetype" id="chargetype">
</div>
<div class="three columns">
<option value="">Select</option>
</select>
</div>
<div class="three columns">
<label>Currencyname</label><select name="currencyname" id="currencyname" onChange="getexchrate(this.value)" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["currencyname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="three columns">
<label>exchange rate</label><select name="exchangerate" id="exchangerate">
<option value="">Select</option>
</select>
</div>
</div>
<div class="row">
<div class="three columns">
<label>Quantity</label><input type="text" name="quantity">
</div>
<div class="three columns">
<label>Rate</label><input type="text" name="rate">
</div>
<div class="three columns">
<label>Amount</label><input type="text" name="amount">
</div>
<div class="three columns">
<label>Discount</label><input type="text" name="discount">
</div>
</div>
<div class="row">
<div class="three columns">
<label>igst%</label><input type="text" name="igst">
</div>
<div class="three columns">
<label>cgst%</label><input type="text" name="cgst">
</div>
<div class="three columns">
<label>Sgst%</label><input type="text" name="sgst">
</div>
</div>
<button type="submit" name="save2"  class="button button-primary"formaction="saveinvoicechargesair.php">save2</button>
<button type="submit" name="print" class="button button-primary" formaction="printserviceinvoiceair.php">Print</button>
</form>
<iframe src="vieweainvoicechargedet.php" width="600" height="400"  style="background-color:#ffffff;"></iframe>
</body>
</head>
</html>
