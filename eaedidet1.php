<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<?php
session_start();
$currentdate=date('y-m-d');

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
		
function getaddress1(val) {
	$.ajax({
	type: "POST",
	url: "get_expaddress1.php",
	data:'exportername='+val,
	success: function(data){
		$("#exporteraddress1").html(data);
		
	}
	});
} 
function getaddress2(val) {
	$.ajax({
	type: "POST",
	url: "get_expaddress2.php",
	data:'exportername='+val,
	success: function(data){
		$("#exporteraddress2").html(data);
	}
	});
}
function getstate(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'exportername='+val,
	success: function(data){
		$("#state").html(data);
	}
	});
}

function getcity(val) {
	$.ajax({
	type: "POST",
	url: "get_city.php",
	data:'exportername='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}


function getpin(val) {
	$.ajax({
	type: "POST",
	url: "get_pin.php",
	data:'exportername='+val,
	success: function(data){
		$("#pin").html(data);
	}
	});
}
function getpan(val) {
	$.ajax({
	type: "POST",
	url: "get_pan.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#pan").html(data);
	}
	});
}
function getgstintype(val) {
	$.ajax({
	type: "POST",
	url: "get_gstintype.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#gstintype").html(data);
	}
	});
}
function getgstin(val) {
	$.ajax({
	type: "POST",
	url: "get_gstin.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#gstin").html(data);
	}
	});
}
function getgststate(val) {
	$.ajax({
	type: "POST",
	url: "get_gststate.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#gststate").html(data);
	}
	});
}
function getgstcode(val) {
	$.ajax({
	type: "POST",
	url: "get_gstcode1.php",
	data:'exportername='+val,
	success: function(data){
		$("#gstcode").html(data);
	}
	});
}
function getbranchcode(val) {
	$.ajax({
	type: "POST",
	url: "get_branchcode.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#branchcode").html(data);
	}
	});
}
function getadcode(val) {
	$.ajax({
	type: "POST",
	url: "get_adcode.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#adcode").html(data);
	}
	});
}

function getiec(val) {
	$.ajax({
	type: "POST",
	url: "get_iec.php",
	data:'exportername='+val,
	success: function(data){
	
		$("#iec").html(data);
	}
	});
}
function getconsigneeaddress(val) {
	$.ajax({
	type: "POST",
	url: "get_consigneeaddress.php",
	data:'consigneename='+val,
	success: function(data){
		$("#consigneeaddress").html(data);
	}
	});
}
function getconsigneecountry(val) {
	$.ajax({
	type: "POST",
	url: "get_consigneecountry1.php",
	data:'consigneename='+val,
	success: function(data){
		$("#consigneecountryname").html(data);
	}
	});
}


	function getcode(val) {
	$.ajax({
	type: "POST",
	url: "get_code.php",
	data:'consigneecountryname='+val,
	success: function(data){
		$("#consigneecountrycode").html(data);
	}
	});
}


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
function getportcode1(val) {
	$.ajax({
	type: "POST",
	url: "get_airportcode1.php",
	data:'dischargeportname='+val,
	success: function(data){
		$("#dischargeportcode").html(data);
	}
	});
}	
function getdischargeairportname(val) {
	$.ajax({
	type: "POST",
	url: "get_dischargeairportname.php",
	data:'dischargecountrycode='+val,
	success: function(data){
		$("#dischargeportname").html(data);
	}
	});
}
function getportcode1(val) {
	$.ajax({
	type: "POST",
	url: "get_airportcode1.php",
	data:'dischargeportname='+val,
	success: function(data){
		$("#dischargeportcode").html(data);
	}
	});
}	

function getcode1(val) {
	$.ajax({
	type: "POST",
	url: "get_code1.php",
	data:'dischargecountryname='+val,
	success: function(data){
		$("#dischargecountrycode").html(data);
	}
	});
}
	
function getcode2(val) {
	$.ajax({
	type: "POST",
	url: "get_code2.php",
	data:'destinationcountryname='+val,
	success: function(data){
		$("#destinationcountrycode").html(data);
	}
	});
}
		
function getdestinationairportname(val) {
	$.ajax({
	type: "POST",
	url: "get_destinationairportname.php",
	data:'destinationcountrycode='+val,
	success: function(data){
		$("#destinationportname").html(data);
	}
	});
}

</script>
<title> Query</title>
<body>
<button><a href="logout.php">Logout</a><br></button>
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
 try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt= $conn->prepare('select * From exporter');
		$smt->execute();
		$data= $smt->fetchAll();
		

 try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smtc= $conn->prepare('select * From consignee');
		$smtc->execute();
		$datac= $smtc->fetchAll();
		
	
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
		$smt2= $conn1->prepare('select * From chalocation');
		$smt2->execute();
		$data2= $smt2->fetchAll();
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
<?php


if(isset($_POST['jobno'])){
$_SESSION['jobno']=$_POST['jobno'];
}
?>
<form method="post" style="background-color:#4DAF7C;">

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
Job Date<input type="text" name="jobdate" id="jobdate" readonly value="<?php echo $currentdate?>"><br>
</div>
</div><br>

<div class="row">
<div class="col-md-4">
Exportername<select name="exportername" id="exportername" onChange="getaddress1(this.value);getaddress2(this.value); getstate(this.value);getcity(this.value);getpin(this.value);getpan(this.value);getgstintype(this.value);getgstin(this.value);getgststate(this.value);getgstcode(this.value);getbranchcode(this.value);getadcode(this.value);getiec(this.value);">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["exportername"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
exporter address1<select name="exporteraddress1" id="exporteraddress1">
<option></option>
</select>
</div>
<div class="col-md-4">
 exporter address2<select name="exporteraddress2" id="exporteraddress2">
<option></option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
State<select name="state" id="state" >
<option></option>
</select>
</div>
<div class="col-md-4">
City<select name="city" id="city" >
<option></option>
</select>
</div>
<div class="col-md-4">
Pin<select name="pin" id="pin">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-4">
panno<select name="pan" id="pan">
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
</div>
<div class="row">
<div class="col-md-6">
gststatename<select name="gststate" id="gststate">
<option></option>
</select>
</div>
<div class="col-md-6">
gststatecode<select name="gstcode" id="gstcode">
<option> Select code</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-4">
iec<select name="iec" id="iec">
<option></option>
</select>
</div>
<div class="col-md-4">
Branch code<select name="branchcode" id="branchcode">
<option></option>
</select>
</div>
<div class="col-md-4">
adcode<select name="adcode" id="adcode">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Forexcode<input type="text" name="forexcode">
</div>
<div class="col-md-6">
Ifsccode<input type="text" name="ifsccode">
</div>
</div>
<div class="row">
<div class="col-md-6">
Exporter type<Select name="exportertype" >
<option></option>
<option>Merchant</option>
<option>Manufacturer</option>
</select>
</div>
<div class="col-md-6">
Exporter class<Select name="exporterclass" >
<option></option>
<option>P</option>
<option>G</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-3">
Consigeename<select name="consigneename" id="consigneename" onChange="getconsigneeaddress(this.value);getconsigneecountry(this.value);">
<option> </option>
<?php foreach ($datac as $row): ?>
    <option><?=$row["consigneename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6" style="position:relative; top:20; left:20;">
consigneeaddress<select name="consigneeaddress" id="consigneeaddress" >
<option> Select</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Consigneecountry<select name="consigneecountryname" id="consigneecountryname" onChange="getcode(this.value);">
<option></option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
ConsigneeCountrycode<Select name="consigneecountrycode" id="consigneecountrycode">
<option><option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-3">
Chaname<input type="text" name="chaname">
</div>
<div class="col-md-3">
Port of Loading<select name="locationname" id="locationname" onChange="getchanumber(this.value);">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["locationname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-3">
Cha number<select name="chanumber" id="chanumber">
<option></option>
</select>
</div>
<div class="col-md-3">
State(org)<select name="stateorigin">
<option>Select State</option>
		<?php foreach ($data4 as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Dischargecountry<select name="dischargecountryname" id="dischargecountryname" onChange="getcode1(this.value);">
<option></option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Dischargecountrycode<select name="dischargecountrycode" id="dischargecountrycode" onChange="getdischargeairportname(this.value);">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Dischargeport<select name="dischargeportname" id="dischargeportname" OnChange="getportcode1(this.value);">
<option><option>

</select>
</div>
<div class="col-md-6">
Dischargeportcode<select name="dischargeportcode" id="dischargeportcode">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Destinationcountry<select name="destinationcountryname" id="destinationcountryname" onChange="getcode2(this.value);">
<option></option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-3">
Destinationcountrycode<select name="destinationcountrycode" id="destinationcountrycode" onChange="getdestinationairportname(this.value);">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
Destinationport<select name="destinationportname" id="destinationportname" OnChange="getportcode2(this.value);">
<option><option>

</select>
</div>
<div class="col-md-6">
Destinationportcode<select name="destinationportcode" id="destinationportcode">
<option></option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
RBI Waiverno<input type="text" name="rbiwaiverno">
</div>
<div class="col-md-6">
Rbi waiver date<input type="date" name="rbiwaiverdate">
</div>
</div>
<div class="row">
<div class="col-md-4">
Factory stuffed<Select name="factorystuffed" >
<option></option>
<option>YES</option>p
<option>NO</option>
</select>
</div>
<div class="col-md-4">
Nature of Cargo<Select name="natureofcargo" >
<option></option>
<option>C</option>
<option>CP</option>
<option>P</option>
<option>DB</option>
<option>LB</option>
</select>
</div>
<div class="col-md-4">
Sample accompanied<Select name="sample" >
<option></option>
<option>YES</option>p
<option>NO</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-3">
Total Packages<input type="text" name="totalpackages">
</div>
<div class="col-md-6">
Unit<input type="text" name="packunit">
</div>
</div>
<div class="row">
<div class="col-md-6">
Loose packages<input type="text" name="loosepackages">
</div>
<div class="col-md-6">
No of containers<input type="text" name="noofcontainers">
</div>
</div>
<div class="row">
<div class="col-md-4">
Gross weight<input type="text" name="grossweight">
</div>
<div class="col-md-4">
Netweight<input type="text" name="netweight">
</div>
<div class="col-md-4">
Unit<input type="text" name="wtunit">
</div>
</div>
<div class="row">
<div class="col-md-3">
Seal<input type="text" name="seal">
</div>
<div class="col-md-3">
packing from<input type="text" name="packfrom">
</div>
<div class="col-md-3">
Pack to<input type="text" name="packto">
</div>
<div class="col-md-3">
packtype<input type="text" name="packtype">
</div>
</div>
<div class="row">
<div class="col-md-6">
Containerno<input type="text" name="containerno" maxlength="11" minlength="11">
</div>
<div class="col-md-6">
Containersize<input type="text" name="containersize">
</div>
</div>
<div class="row">
<div class="col-md-6">
Excise Sealno<input type="text" name="excisesealno">
<div class="col-md-6">
Seal date<input type="date" name="sealdate">
</div>
</div>
<div class="row">
<div class="col-md-6">
noofpacketsstuffed<input type="text" name="noofpacketsstufffed">
</div>
<div class="col-md-6">
Seal type<input type="text" name="sealtype">
</div>
</div>
<div class="row">
<div class="col-md-3">
Deviceid<input type="text" name="deviceid">
</div>
<div class="col-md-3">
Doctype<input type="text" name="doctype">
</div>
<div class="col-md-3">
Docno<input type="text" name="docno">
</div>
<div class="col-md-3">


Marksno<input type="text" name="marksno" value="I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS)."><br>

</div>
</div>
<button type="submit" name="savesb1" formaction="saveedisb1.php">savesb1</button>
</form>
</body>
</head>
</html>