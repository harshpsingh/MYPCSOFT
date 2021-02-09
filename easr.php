<html>
<head>

<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>

	function getgstcode(val) {
	$.ajax({
	type: "POST",
	url: "get_gstcode.php",
	data:'gststatename='+val,
	success: function(data){
		$("#gstcode").html(data);
	}
	});
}


function getaddress(val) {
	$.ajax({
	type: "POST",
	url: "get_expaddress.php",
	data:'exportername='+val,
	success: function(data){
		$("#address").html(data);
	}
	});
}
function getaddress1(val) {
	$.ajax({
	type: "POST",
	url: "get_conaddress.php",
	data:'consigneename='+val,
	success: function(data){
		$("#caddress").html(data);
	}
	});
}

function getairport(val) {
	$.ajax({
	type: "POST",
	url: "get_airport.php",
	data:'countryname='+val,
	success: function(data){
		$("#originport").html(data);
	}
	});
}

function getairport1(val) {
	$.ajax({
	type: "POST",
	url: "get_airport1.php",
	data:'destinationcountry='+val,
	success: function(data){
		$("#destinationport").html(data);
	}
	});
}
function changetextbox()
{
	if(document.getElementById("st").value=="customclearence")
	{
		
		document.getElementById("hawbblno").readOnly='True'
		document.getElementById("mawbblno").readOnly='True'
		
		document.getElementById("hawbbldate").readOnly='True'
		document.getElementById("mawbbldate").readOnly='True'
	}
}


</script>
<style>
.button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }
		
		 .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }
</style>
<title> Shipment Register</title>
<body>
<button><a href="logout.php">Logout</a><br></button>
<h1> Export Air Shipment Register</h1>
<?php
session_start();
if(isset($_POST['branch'])&& ($_POST['fy']))
{
$branch=$_POST['branch'];
$fy=$_POST['fy'];
}
		$servername = "localhost";
$username = "root";
$password="";

try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt = $conn->prepare('select * From gst');
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
		$smt1= $conn->prepare('select * From exporter');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2= $conn->prepare('select * From consignee');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
			
try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt3= $conn->prepare('select * From shipline');
		$smt3->execute();
		$data3= $smt3->fetchAll();
		try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt4= $conn->prepare('select * From overseasagent');
		$smt4->execute();
		$data4= $smt4->fetchAll();
			
		try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt5= $conn->prepare('select * From countrylist');
		$smt5->execute();
		$data5= $smt5->fetchAll();
			
		try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt6= $conn->prepare('select * From indianport');
		$smt6->execute();
		$data6= $smt6->fetchAll();
		$branch=$_SESSION["branch"];
		$fy=$_SESSION["fy"];
		if($branch=='New Delhi')
		{
			$br='NDL';
		}
		else if($branch=='Mumbai')
		{
			$br='MUM';
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
			$br='UP';
		}
?>



<form method="post" class="pure-form" style="background-color:#E6E6FA">

<div id="sd">
<div class="row">
 <div class="four columns">
<label>username</label><input type="text" name="username" id="username"class="form-control" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="four columns">

<label>branch</label><input type="text" name="branch" id="branch"readonly style="position:relative;left:40;"class="form-control" value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
<label>year</label><input type="text" name="fy" id="fy" style="position:relative;left:48; class="form-control" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
 <div class="four columns">
<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("select * from branchdocket where branch='$_SESSION[branch]'");
    
   // echo "<html>";
   // echo "<body>";
   // echo "<select name='dno' type='hidden' class='form-control' id='docketno' >";

    while ($row = $result->fetch_assoc()) {

                
              
                  $dno = $row['docketno']; 
	
                
}?>
     <label for="docketno" id="ldn">docketno</label>

    <input type="text" name="docketno" readonly value="<?php echo $br."/AE/".$dno."/".$fy?>">
	</div>

	<?php
	$currentdate=date('y-m-d');
	?>
	<div class="four columns">
<label for="docketdate" id="ldd">Docket Date</label><input type="text" id="docketdate"name="docketdate"value="<?php echo $currentdate?>">
</div>
<div class="four columns">
<label for="clearancedate" id="lcd">Clearance Date</label><input type="date"id="clearancedate" name="clearancedate">
</div>
</div>
<div class="row">
 <div class="four columns">
<label>Exportername</label>
<select name="exportername" id="exportername"   onChange="getaddress(this.value);">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["exportername"]?></option>
<?php endforeach ?>
</select>
</div>
 <div class="four columns">
<label>Exporter address</label><select name="address" id="address" >
<option value="">Select</option>
</select>
</div>
 <div class="four columns"style="position:relative; left:10;">
<label>Exporter Invoice</label><input type="text" name="exporterinvoice">

</div>
</div>
<div class="row">
 <div class="six columns">
<label>Gststatename</label><Select name="gststatename" id ="gststatename" onChange="getgstcode(this.value);">
<option>Select State</option>
		<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
</div>
 <div class="six columns">

<label>Gststatecode</label><select name="gststatecode" id="gstcode">
<option> Select code</option>
</select>
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Consignee name</label><select name="consigneename" id="consigneename" onChange="getaddress1(this.value);">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["consigneename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>Consignee Address</label><select name="caddress" id="caddress">
<option value="">Select</option>
</select>
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Overseas agent</label><select name="overseasagentname" id="overseasagentname" >
<option> </option>
<?php foreach ($data4 as $row): ?>
    <option><?=$row["overseasagentname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>Forwarder</label><input type="text" name="forwarder">
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Notify</label><input type="text" name="notify">
</div>
<div class="six columns">
<label>Notify address</label><input type="text" name="notifyaddress">
</div>
</div>
<div class="row">
 <div class="four columns">
<label>S. Agent</label><input type="text" name="sagent">
</div>
<div class="four columns">
<label>Buyer</label><input type="text" name="buyer">
</div>
<div class="four columns">
	<label>shipment type</label><select name="shipmenttype" id="st" value="shipmenttype" onChange="changetextbox();">
     <option></option>
     <option value="direct" name="Prepaid">Prepaid</option>
    <option value="to us" name="Collect">Collect</option> 
     <option value="customclearence" name="customclearence">customclearence</option>
   
    </select>
	</div>
	</div><br>
	
	
   

 
 <h5>shipment details</h5>
 <div class="row">
 <div class="six columns">
<label>
HawbNO </label><input type="text" id="hawbblno" name="hawbblno">
</div>


 <div class="six columns">
<label>HawbDATE</label><input type="date" id ="hawbbldate" name ="hawbbldate">
</div>
</div>

<div class="row">
 <div class="six columns">
<label>Mawb NO </label><input type="text" id="mawbblno" name="mawbblno">
</div>

 <div class="six columns">
<label>Mawb DATE</label><input type="date" id ="mawbbldate" name ="mawbbldate">
<label>
</div>
</div>
<div class="row">
 <div class="six columns">
<label>GRN NO</label><input type="text" id="GRNNO" name="grnno">

</div>
 <div class="six columns">
<label>PO NO</label><input type="text" id="PONO" name="pono">
</div>
</div>
<div class="row">
 <div class="six columns">
<label>shipment terms</label><select name="shipmentterms" id="sht" value="shipmentterms">
     <option></option>
     <option value="term1">term 1</option>
    <option value="term2">term 2</option> 
    </select>
	</div>
	 <div class="six columns">
	<label>cargo type</label><input type="text" name="cargotype">
	</div>
	</div>
<div id="gd">
<h5>goods detail</h5>
<div class="row">
 <div class="six columns">
<label>No. Of Packages</label><input type="text" id="pack" name="pack">
</div>
 <div class="six columns">
<label>units</label><input type="text" id="units1" name="units1">
</div>
</div><br>
<div class="row">
 <div class="six columns">
<label>Gross Weight</label><input type="text" id="gw" name="gw">
</div>
 <div class="six columns">
<label>units</label><input type="text" id="units2" name="units2">
</div>
</div><br>
<div class="row">
 <div class="six columns">
<label>net weight</label><input type="text" id="nw" name="nw">
</div>
 <div class="six columns">
<label>units</label><input type="text" id="units3" name="units3">
</div>
</div><br>
<div class="row">
<div class="twelve columns">
<label>Goods Description</label><textarea name="goodsdescription" rows="20" cols="60"></textarea>
</div>
</div><br>
<div class="row">
<div class="twelve columns">
<label>Marks and Nos</label><textarea name="marksandnos" rows="20" cols="60"></textarea>
</div>
</div><br>
 <div id="pod">
<h5>Port Details</h5>
<div class="row">
 <div class="six columns">
<label>origin Country</label><select name="countryname" id="countryname" onChange="getairport(this.value);">
<option> </option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
 <div class="six columns">
<label>origin port</label><select name="originport" id="originport">
<option value="">Select</option>
</select><br>

</div>
</div>

</select>
<div class="row">
 <div class="six columns">
<label>Destination Country</label><select name="destinationcountry" id="destinationcountry" onChange="getairport1(this.value);">
<option></option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
 <div class="six columns">
<label>Destination Port</label><select name="destinationport" id="destinationport">
<option value="">Select</option>
</select>
</div>
</div>
</div>
<div id="dd">
<h5>Dimension Details</h5>
<div class ="row">
<div class="four columns">
<label>Length</label><input type="text" name="length">
</div>
<div class="four columns">
<label>Width</label><input type="text" name="width">
</div>
<div class="four columns">
<label>Height</label><input type="text" name="height">
</div>
</div>
<div class ="row">
<div class="four columns">
<label>Pkgs</label><input type="text" name="pkgs">
</div>
<div class="four columns">
<label>Unit</label><Select name="dimunit">
<option></option>
<option>CMT</option>
<option>INH</option>
</select>
</div>
</div>
</div>



<div id="msc">
<h5>Booking</h5>
<div class ="row">
<div class="four columns">
<label>Bookingno</label><input type="text" name="book">
</div>
<div class="four columns">
<label>referenceno</label><input type="text" name="ref">
</div>
<div class="four columns">
<label>clearence AT</label><select name="clearanceat" id="clearanceat">
<option></option>
<?php foreach ($data6 as $row): ?>
    <option><?=$row["portname"]?></option>
<?php endforeach ?>
</select>
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Place of Supply</label><input type="text" name="pos">
</div>
<div class="six columns">
<label>cha name</label><input type="text" name="chaname">
</div>
</div>
<div class="row">
 <div class="six columns">
<label>sb</label><input type="text" name="sb">
</div>
<div class="six columns">
<label>Remarks</label><input type="text" name="remarks">
</div>
</div>
</div>
<button type="submit" name="save"  formaction="insert3.php">Save</button>
</form>


		

</body>
</head>
</html>

