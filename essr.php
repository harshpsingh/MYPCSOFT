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
	data:'gststate='+val,
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
function getaddress2(val) {
	$.ajax({
	type: "POST",
	url: "get_sladdress.php",
	data:'shiplinename='+val,
	success: function(data){
		$("#sladdress").html(data);
	}
	});
}
function getport(val) {
	$.ajax({
	type: "POST",
	url: "get_port.php",
	data:'countryname='+val,
	success: function(data){
		$("#originport").html(data);
	}
	});
}
function getport1(val) {
	$.ajax({
	type: "POST",
	url: "get_port1.php",
	data:'loadcountry='+val,
	success: function(data){
		$("#loadport").html(data);
	}
	});
}
function getport2(val) {
	$.ajax({
	type: "POST",
	url: "get_port2.php",
	data:'dischargecountry='+val,
	success: function(data){
		$("#dischargeport").html(data);
	}
	});
}
function getport3(val) {
	$.ajax({
	type: "POST",
	url: "get_port3.php",
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
		document.getElementById("blno").readOnly='True'
		document.getElementById("hblno").readOnly='True'
		document.getElementById("mblno").readOnly='True'
		document.getElementById("bldate").readOnly='True'
		document.getElementById("hbldate").readOnly='True'
		document.getElementById("mbldate").readOnly='True'
	}
	
	
	
}
function changetextbox1()
{
	
	if((document.getElementById("type").value=="NVOCC")||(document.getElementById("type").value=="FREIGHTFORWADER"))
	{
		document.getElementById("hblno").required='True';
		document.getElementById("mblno").required='True';
		
	}
	
	
}
function cocshow()
{
	if(document.getElementById("coc").value=="Yes")
	{
		document.getElementById("cocdate").style.visibility="visible"
	}
}
function embassyshow()
{
	if(document.getElementById("embassy").value=="Yes")
	{
		document.getElementById("embassydate").style.visibility="visible"
	}
}
function mblfun()
{
	var hbl=document.getElementById("hblno");
	var mbl=document.getElementById("mblno");
	
	
	if((hbl.value!="") && (mbl.value=="")) 
	{
		alert("mbl required");
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
<h1> Export Sea Shipment Register</h1>
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
$branch=$_SESSION['branch'];

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



<form method="post"  style="background-color:#E6E6FA">

<div id="sd">
 <div class="row">
 <div class="four columns">
<label for ="username">username</label><input type="text" name="username" id="username"class="form-control" readonly value="<?php echo $_SESSION['username'];?>">

</div>
<div class="four columns">
<label for ="branch">Branch</label>
<input type="text" name="branch" id="branch"readonly; value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
<label for ="year">Year</label>
<input type="text" name="fy" id="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
 <div class="four columns">
 <?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from branchdocket where branch='$_SESSION[branch]'");
    
   // echo "<html>";
   // echo "<body>";
   // echo "<select name='dno' type='hidden' class='form-control' id='docketno' >";

    while ($row = $result->fetch_assoc()) {

                
              
                  $dno = $row['docketno']; 
	
                
}?>
     <label for="docketno" id="ldn">docketno</label>

    <input type="text" name="docketno" readonly value="<?php echo $br."/SE/".$dno."/".$fy?>">
	
	<?php
	$currentdate=date('y-m-d');
	
	?>
	</div> 
	 <div class="four columns">
<label for="docketdate" id="ldd">Docket Date</label><input type="text" readonly id="docketdate"name="docketdate"value="<?php echo $currentdate?>">
</div>
 <div class="four columns">
<label for="clearancedate" id="lcd">Clearance Date</label><input type="date"id="clearancedate" name="clearancedate">
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Exporter Name</label>
<select name="exportername" id="exportername" required  onChange="getaddress(this.value);">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["exportername"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label for="address">Exporter Address</label><select name="address" required id="address" style="width:600;">
<option value="">Select</option>
</select><br>
</div>
</div>


<div class="row">
 <div class="four columns">

<label>Exporter invoice</label><input type="text" required name="exporterinvoice" id="exporterinvoice">
</div>
<div class="four columns">
<label>Gst State Name</label><Select name="gststate" id ="gststate" onChange="getgstcode(this.value);">
<option>Select State</option>
		<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="four columns">
<label>Gst State Code</label><select name="gstcode" id="gstcode">
<option> Select code</option>
</select>
</div>
</div>

<div class="row">
 <div class="six columns">

<label>
Consignee name</label><select name="consigneename" id="consigneename" onChange="getaddress1(this.value);">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["consigneename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label for="caddress" id="lca">Consignee Address</label><select name="caddress" id="caddress" style="width:600;">
<option value="">Select</option>
</select>
</div>
</div>
<div class="row">
 <div class="six columns">
<label>Shipline name</label><select name="shiplinename" id="shiplinename" onChange="getaddress2(this.value);">
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["shiplinename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>Shipline Address</label><select name="sladdress" id="sladdress">
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
 <div class="six columns">
<label>S. Agent</label><input type="text" name="sagent">
</div>
<div class="six columns">
<label>Buyer</label><input type="text" name="buyer">
</div>
</div>
<div class="row">
 <div class="six columns">
<label>type</label><select name="type" id="type" value="type" onChange="changetextbox1();">
     <option></option>
     <option value="FRIEGHTFORWADER" name="FREIGHTFORWADER">FREIGHTFORWADER</option>
    <option value="NVOCC" name="NVOCC">NVOCC</option> <br>
	
     <option value="DIRECT" name="DIRECT">DIRECT</option>
    <option value="CONSOL" name="consol" >consol</option> <br>
    </select>
	</div>
	<div class="six columns">
	<label>shipment type</label><select name="shipmenttype" id="st" value="shipmenttype" onChange="changetextbox();">
     <option></option>
     <option value="direct" name="direct">direct</option>
    <option value="to us" name="to us">to us</option> 
	<option value="toothers" name="toothers">to others</option> 
	
     <option value="customclearence" name="customclearence">customclearence</option>
   
    </select>
	</div>
	</div>
	
	
   

 
 </div>
 <div>
 <h5>shipment details</h5>
 <div class="row">
 <div class="six columns">
<label> 
B.L NO</label> <input type="text" id="blno" name="blno" value="">

</div>

<div class="six columns">
<label>B. l DATE</label><input type="date" id ="bldate" name ="bldate" value="">

</div>
</div> 
<div class="row">
<div class="six columns">
<label>H.B.L NO </label><input type="text" id="hblno" name="hblno" value="" onfocusout="mblfun()">

</div>
<div class="six columns">
<label>H.B.l DATE</label><input type="date" id ="hbldate" name ="hbldate" >

</div>
</div>
<div class="row">
<div class="six columns">
<label>M.B.L NO </label><input type="text" id="mblno" name="mblno" value="">

</div>
<div class="six columns">
<label>M.B.l DATE</label><input type="date" id ="mbldate" name ="mbldate">

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

<label>
 lr no</label><input type="text" id="lrno" name="lrno">
 </div>
 <div class="six columns">
 <label>lr no Date</label><input type="date" id ="lrdate" name="lrdate">
 </div>
 </div>
 <div class="row">
 <div class="six columns">
 <label>
 shipment 
 terms</label><select name="shipmentterms" id="st" value="shipmentterms"><br>
     <option></option>
     <option value="term1">EXW</option>
    <option value="term2">FCA </option> 
	 <option value="term3">CPT </option> 
	  <option value="term4">CIP </option> 
	   <option value="term5">DAT  </option> 
	    <option value="term6">AP </option> 
		<option value="term7">DDP</option>
    <option value="term8">FAS </option> 
	 <option value="term9">FOB </option> 
	  <option value="term10">CFR </option> 
	   <option value="term11">CIF  </option> 
		
  </select>
  </div>
  <div class="six columns">
<label>	Place of Supply</label><input type="text" name="pos">
	</div>
	</div>
<div id="gd">
<h5>goods detail</h5>

<div class="row">
 <div class="six columns">

<label>No. Of Packages </label>
<input type="text" id="pack" name="pack">
</div>


<div class="six columns">
<label>units</label><input type="text" id="units1" name="units1"></label>
</div>
</div>

<div class="row">

<div class="six columns">
<label>Gross Weight</label><input type="text" id="gw" name="gw"></label>
</div>
<div class="six columns">
<label>units</label><input type="text" id="units2" name="units2"></label>
</div>
</div>
<div class="row">
<div class="six columns">
<label>net weight</label><input type="text" id="nw" name="nw"></label>
</div>
<div class="six columns">
<label>units</label><input type="text" id="units3" name="units3"></label>
</div>
</div>
<div class="row">
<div class="twelve columns">
<label>Goods Description</label><textarea name="goodsdescription" rows="20" cols="60"></textarea></label>
</div>
</div>
<div class="row">
<div class="twelve columns">
<label>Marks and No</label><textarea name="marksandnos" rows="20" cols="60"></textarea></label>
</div>
</div>
</div>

<div id="cd">
<h5>Container Details</h5>
<div class="row">
 <div class="three columns">
<label>Container type</label><select name="containertype"  value="containertype">
     <option></option>
     <option value="LCL" name="LCL">LCL</option>
    <option value="Bulk" name="">Bulk</option> 
	<option value="FCL" name="FCL">FCL</option> 
       </select>
	   </div>
 <div class="three columns">
 <label>CBM</label><input  type="text" name="cbm">
 </div>
 <div class="three columns">
<label>Container Size</label><select name="containersize">

<option>20 ST DRY</option>
<option>40 ST DRY</option>
<option>20 High Cube</option>
<option>40 High Cube</option>
<option>20 Reefer</option>
<option>40 Reefer</option>
</select>
</div>
<div class="three columns">
<label> Container number</label><input minlength="11"  maxlength="11" type="text" name="containerno"  required>
 <div class="three columns">
 </div>
 </div>
 <div class="row">
 <div class="three columns">
 <label>Container Pickup</label><input type="date" name="containerpickup">
 </div>
 <div class="three columns">
 <label>Handover</label><input type="date" name="handover">
 </div>
 <div class="three columns">
 <label>Package</label><input type="text" name="package">
 </div>
  <div class="three columns">
 <label>Weight</label><input type="text" name="weight">
 </div>
 </div>
  <div class="row">
 <div class="four columns">
 <label>Custom Seal</label><input type="text" name="customseal">
 </div>
 <div class="four columns">
 <label>Shipper Seal</label><input type="text" name="shipperseal">
 </div>
 <div class="four columns">
<label> Carrier Seal</label><input type="text" name="carrierseal">
</div>
</div>
 
 </div>
 <div id="pod">
<h5>Port Details</h5>
<div class="row">
 <div class="six columns">
<label>origin Country</label><select name="countryname" id="countryname" onChange="getport(this.value);">
<option> </option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>origin port</label><select name="originport" id="originport">
<option value="">Select</option>
</select>
</div>
</div>
<div class="row">
<div class="six columns">
<label>Load  Country</label><select name="loadcountry" id="loadcountry" onChange="getport1(this.value);">
<option></option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>Load port</label><select name="loadport" id="loadport">
<option value="">Select</option>
</select>
</div>
</div>
<div class="row">
<div class="six columns">

<label>Discharge country</label><select name="dischargecountry" id="dischargecountry" onChange="getport2(this.value);">
<option></option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>Discharge port</label><select name="dischargeport" id="dischargeport">
<option value="">Select</option>

</select>
</div>
</div>
<div class="row">
<div class="six columns">
<label>Destination Country</label><select name="destinationcountry" id="destinationcountry" onChange="getport3(this.value);">
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
<div class="row">
<div class="six columns">
<label>clearence AT</label><select name="clearanceat" id="clearanceat">
<option></option>
<?php foreach ($data6 as $row): ?>
    <option><?=$row["portname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns">
<label>terminal</label><input type="text" name="terminal">
</div>
</div>
</div>
<div id="vd">
<h5>vessel Details</h5>
<div class="row">
<div class="six columns">
<label>vessel</label><input type="text" name="vessel">
</div>
<div class="six columns">
<label>voyage</label><input type="text" name="voyage">
</div>
</div>
<div class="row">
<div class="six columns">
<label>ETA</label><input type="date" name="eta">
</div>
<div class="six columns">
<label>ETD</label><input type="date" name="etd">
</div>
</div>
<div class="row">
<div class="four columns">
<label>stuffing date</label><input type="date" name="stuffingdate">
</div>
<div class="four columns">
<label>carting date</label><input type="date" name="cartingdate">
</div>
<div class="four columns">
<label>shed</label><input type="text" name="shed">
</div>
</div>
</div>
<div id="rail">
<h5> railing</h5>
<label>trainno</label><input type="text" name="trainno">
<label>wagonno</label><input type="text" name="wagonno">
<label>etarail</label><input type="date" name="etarail">
<label>etdrail</label><input type="date" name="etdrail"><br>

</div>
<div id="msc">
<h5>Booking</h5>
<label>Bookingno</label><input type="text" name="book">
<label>referenceno</label><input type="text" name="ref"><br>
<label>cha name</label><input type="text" name="chaname">
<label>sb</label><input type="text" name="sb"><br>
<label>Remarks</label><input type="text" name="remarks"><br>

</div>
<label>Coc required</label>
<select name="coc" id="coc" onChange="cocshow();" >
<option></option>
<option>Yes</option>
</select>
<div id="cocdate" style="visibility:hidden;">
<label>coc date</label><input type="date"  name="cocdate">
</div>
<label>Embassy required</label>
<select name="embassy" id="embassy" onChange="embassyshow();" >
<option></option>
<option>Yes</option>
</select>
<div id="embassydate" style="visibility:hidden;">
<label>embassy date</label><input type="date"  name="embassydate">
</div>
<button type="submit" class="button-success pure-button" name="save"  formaction="insert1.php">Save</button>
</form>


</body>
</head>
</html>

