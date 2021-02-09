<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<?php

$currentdate=date('Y-m-d');
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

try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2= $conn1->prepare('select * From chalocation');
		$smt2->execute();
		$data2= $smt2->fetchAll();
		
 try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt= $conn->prepare('select * From importer');
		$smt->execute();
		$data= $smt->fetchAll();
			try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt1= $conn1->prepare('select * From countrylist');
		$smt1->execute();
		$data1= $smt1->fetchAll();
		try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt3= $conn1->prepare('select * From gstintype');
		$smt3->execute();
		$data3= $smt3->fetchAll();
			
		try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt4= $conn1->prepare('select * From gst');
		$smt4->execute();
		$data4= $smt4->fetchAll();
   try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt5= $conn1->prepare('select * From portlist');
		$smt5->execute();
		$data5= $smt5->fetchAll();
   

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
		function getchanumber(val) {
	$.ajax({
	type: "POST",
	url: "get_chanumber.php",
	data:'locationname='+val,
	success: function(data){
		$("#chanumber").html(data);
	}
	});
}

function getaddress1(val) {
	$.ajax({
	type: "POST",
	url: "get_impaddress1.php",
	data:'importername='+val,
	success: function(data){
		$("#importeraddress1").html(data);
	}
	});
}
function getaddress2(val) {
	$.ajax({
	type: "POST",
	url: "get_impaddress2.php",
	data:'importername='+val,
	success: function(data){
		$("#importeraddress2").html(data);
	}
	});
}
function getstate(val) {
	$.ajax({
	type: "POST",
	url: "get_statei.php",
	data:'importername='+val,
	success: function(data){
		$("#state").html(data);
	}
	});
}
function getcity(val) {
	$.ajax({
	type: "POST",
	url: "get_cityi.php",
	data:'importername='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}

function getpin(val) {
	$.ajax({
	type: "POST",
	url: "get_pini.php",
	data:'importername='+val,
	success: function(data){
		$("#pin").html(data);
	}
	});
}
function getiec(val) {
	$.ajax({
	type: "POST",
	url: "get_ieci.php",
	data:'importername='+val,
	success: function(data){
		$("#iec").html(data);
	}
	});
}
function getadcode(val) {
	$.ajax({
	type: "POST",
	url: "get_adcodei.php",
	data:'importername='+val,
	success: function(data){
		$("#adcode").html(data);
	}
	});
}
function getbranchcode(val) {
	$.ajax({
	type: "POST",
	url: "get_branchcodei.php",
	data:'importername='+val,
	success: function(data){
		$("#branchcode").html(data);
	}
	});
}
function getpanno(val) {
	$.ajax({
	type: "POST",
	url: "get_pannoi.php",
	data:'importername='+val,
	success: function(data){
		$("#panno").html(data);
	}
	});
}
function getgstintype(val) {
	$.ajax({
	type: "POST",
	url: "get_gstintypei.php",
	data:'importername='+val,
	success: function(data){
		$("#gstintype").html(data);
	}
	});
}
function getgstin(val) {
	$.ajax({
	type: "POST",
	url: "get_gstini.php",
	data:'importername='+val,
	success: function(data){
		$("#gstin").html(data);
	}
	});
}
function getgststate(val) {
	$.ajax({
	type: "POST",
	url: "get_gststatei.php",
	data:'importername='+val,
	success: function(data){
		$("#gststate").html(data);
	}
	});
}
	function getcode(val) {
	$.ajax({
	type: "POST",
	url: "get_codei.php",
	data:'origincountryname='+val,
	success: function(data){
		$("#origincountrycode").html(data);
	}
	});
}
function getoriginport(val) {
	$.ajax({
	type: "POST",
	url: "get_originporti.php",
	data:'origincountrycode='+val,
	success: function(data){
		$("#originportname").html(data);
	}
	});
}
function getgstcode(val) {
	$.ajax({
	type: "POST",
	url: "get_gstcodei.php",
	data:'importername='+val,
	success: function(data){
		$("#gstcode").html(data);
	}
	});
}
function getportcode1(val) {
	$.ajax({
	type: "POST",
	url: "get_portcode1i.php",
	data:'originportname='+val,
	success: function(data){
		$("#originportcode").html(data);
	}
	});
}	
function getcode1(val) {
	$.ajax({
	type: "POST",
	url: "get_code1i.php",
	data:'consigneecountryname='+val,
	success: function(data){
		$("#consigneecountrycode").html(data);
	}
	});
}

function getportcode2(val) {
	$.ajax({
	type: "POST",
	url: "get_portcode2i.php",
	data:'reportingportname='+val,
	success: function(data){
		$("#reportingportcode").html(data);
	}
	});
}	
		</script>
		
<button><a href="logout.php">Logout</a><br></button>
<?php
session_start();

if(isset($_POST['jobno'])){
$_SESSION['jobno']=$_POST['jobno'];
}
?>
<body style="background-color:#4DAF7C;">
<form method="post">
<div class="row">
<div class="col-md-4">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-4">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>">
</div>
<div class="col-md-6">
Job Date<input type="text" name="jobdate" id="jobdate" readonly value="<?php echo $currentdate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
Chaname<input type="text" name="chaname" value="AMRIT SEAIR EXPRESS PVT LTD." readonly>
</div>
<div class="col-md-4">
Location<select name="locationname" id="locationname" onChange="getchanumber(this.value);">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["locationname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
Cha number<select name="chanumber" id="chanumber">
<option></option>
</select>
</div>
</div><br>
</select>
<div class="row">
<div class="col-md-4">
Importername<select name="importername" id="importername" onChange="getaddress1(this.value);getaddress2(this.value);getstate(this.value);getcity(this.value);getpin(this.value);getiec(this.value);getadcode(this.value);getbranchcode(this.value);getpanno(this.value);getgstintype(this.value);getgstin(this.value);getgststate(this.value);getgstcode(this.value);">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["importername"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
Importeraddress1<select name="importeraddress1" id="importeraddress1">
<option></option>
</select>
</div>
<div class="col-md-4">
Importeraddress2<select name="importeraddress2" id="importeraddress2" >
<option></option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
State<select name="state" id="state">
<option></option>
</select>
</div>
<div class="col-md-4">
City<select name="city" id="city">
<option></option>
</select>
</div>
<div class="col-md-4">
Pin<select name="pin" id="pin" >
<option></option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
Iec<select name="iec" id="iec">
<option></option>
</select>
</div>
<div class="col-md-4">
Adcode<select name="adcode" id="adcode">
<option></option>
</select>
</div>
<div class="col-md-4">
Branchcode<select name="branchcode" id="branchcode">
<option></option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
panno<select name="panno" id="panno">
<option></option>
</select>
</div>
<div class="col-md-4">
Gstintype<select name="gstintype" id="gstintype">
<option></option>
</select>
</div>
<div class="col-md-4">
gstin<select name="gstin" id="gstin">
<option></option>
</select>

</div>
</div><br>
<div class="row">
<div class="col-md-6">
gststatename<Select name="gststate" id ="gststate" >

<option> Select gst state</option>
</select>
</div>
<div class="col-md-6">
gststatecode<select name="gstcode" id="gstcode">
<option> Select code</option>
</select>
</div>
</div><br>
Origincountry<select name="origincountryname" id="origincountryname" onChange="getcode(this.value);">
<option></option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
OriginCountrycode<Select name="origincountrycode" id="origincountrycode"onChange="getoriginport(this.value);">
<option><option>
</select>
originport<select name="originportname" id="originportname" OnChange="getportcode1(this.value);">
<option><option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["portname"]?></option>
<?php endforeach ?>
</select>
originportcode<select name="originportcode" id="originportcode">
<option></option>
</select><br>
Consigneecountry<select name="consigneecountryname" id="consigneecountryname" onChange="getcode1(this.value);">
<option></option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
consigneeCountrycode<Select name="consigneecountrycode" id="consigneecountrycode">
<option><option>
</select>
Reportingport<select name="reportingportname" id="reportingportname" OnChange="getportcode2(this.value);">
<option><option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["portname"]?></option>
<?php endforeach ?>
</select>
reportingpportcode<select name="reportingportcode" id="reportingportcode">
<option></option>
</select><br>

Transportmode<select name="transportmode">
<option></option>
<option>A</option>
<option>S</option>
<option>L</option>
</select>
BE TYPE<select name="betype">
<option></option>
<option>H</option>
<option>W</option>
<option>X</option>
</select>
Kachha BE<select name="kachabe">
<option></option>
<option>Y</option>
<option>N</option>
</select>
High Sea Sale<select name="highseasale">
<option></option>
<option>Y</option>
<option>N</option>
</select>
Importer Type<select name="importertype">
<option></option>
<option>G</option>
<option>O</option>
<option>U</option>
<option>P</option>
</select>
Green Channel<select name="greenchannel">
<option></option>
<option>Y</option>
<option>N</option>
</select><br>
Section48<select name="section48">
<option></option>
<option>Y</option>
<option>N</option>
</select>
First Check<select name="firstcheck">
<option></option>
<option>Y</option>
<option>N</option>
</select>
Paymode<select name="paymode">
<option></option>
<option selected>T</option>
<option>CSH</option>
</select>
Public Sector<select name="publicsector">
<option></option>
<option>Y</option>
<option>N</option>
</select>
PriorBE<select name="priorbe">
<option></option>
<option>Y</option>
<option>N</option>
</select><br>
igmno<input type="text" name="igmno">
igm date<input type="date" name="igmdate">
igminwarddate<input type="date" name="igminwarddate"><br>
Blno<input type="text" name="blno">
Bl date<input type="date" name="bldate">
HBlno<input type="text" name="hblno">
HBl date<input type="date" name="hbldate"><br>
Total No of packagages<input type="text" name="noofpackages">
Unit <input type="text" name="unit">
Gross Weight<input type="text" name="grossweight" >
Unit<input type="text" name="wtunit"><br>
Marksno<input type="text" name="marksno"><br>
Containerno<input type="text" name="containerno">
LCl/FCl<select name="lclfcl">
<option></option>
<option>LCL</option>
<option>FCL</option>
</select>
Containersize<input type="text" name="containersize">
Sealno<input type="text" name="sealno">
Truckno<input type="text" name="truckno">
<button type="submit" name="savesb1" formaction="saveisedidet1.php">savesb1</button>

</form>
</body>
</html>
