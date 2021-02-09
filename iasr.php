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
	url: "get_impaddress.php",
	data:'importername='+val,
	success: function(data){
		$("#address").html(data);
	}
	});
}
function getaddress1(val) {
	$.ajax({
	type: "POST",
	url: "get_supplieraddress.php",
	data:'suppliername='+val,
	success: function(data){
		$("#supplieraddress").html(data);
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
	url: "get_airport.php",
	data:'countryname='+val,
	success: function(data){
		$("#originport").html(data);
	}
	});
}



function getport3(val) {
	$.ajax({
	type: "POST",
	url: "get_airport1.php",
	data:'destinationcountry='+val,
	success: function(data){
		$("#destinationport").html(data);
	}
	});
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
<h1> 
Import air Shipment Register</h1>
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
		$smt1= $conn->prepare('select * From importer');
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
		$smt2= $conn->prepare('select * From supplier');
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

<div class="row">
<div class="four columns">
<label>username</label><input type="text" name="username" id="username" readonly value="<?php echo $_SESSION['username'];?>">

</div>
<div class="four columns">
<label>branch</label><input type="text" name="branch" id="branch"readonly  value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
<label>year</label><input type="text" name="fy" id="fy"   readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div> 
<div class="row">
<div class="four columns" >
<?php
$conn = new mysqli('localhost', 'root', '', 'importair') ;

    $result = $conn->query("select * from branchdocket where branch='$_SESSION[branch]'");
    
   // echo "<html>";
   // echo "<body>";
   // echo "<select name='dno' type='hidden' class='form-control' id='docketno' >";

    while ($row = $result->fetch_assoc()) {

                
              
                  $dno = $row['docketno']; 
	
                
}?>
     <label for="docketno" id="ldn">docketno</label>

    <input type="text" name="docketno" readonly value="<?php echo $br."/AI/".$dno."/".$fy?>">
</div>

	<?php
	$currentdate=date('y-m-d');
	?>
	<div class="four columns" >
<label for="docketdate" id="ldd">Docket Date</label><input type="text" id="docketdate"name="docketdate"value="<?php echo $currentdate?>">
</div>
<div class="four columns" >
<label for="clearancedate" id="lcd">Clearance Date</label><input type="date"id="clearancedate" name="clearancedate">
</div>
</div>
<div class="row">
<div class="four columns" >
<label>Importername</label>
<select name="importername" id="importername"   onChange="getaddress(this.value);">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["importername"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="four columns" >
<label>Importer address</label><select name="address" id="address" >
<option value="">Select</option>
</select>
</div>

<div class="four columns" >
<label>
Importerinvoice</label><input type="text"name="importerinvoice" >
</div>


</div>
<div  class="row">
<div class="six columns" >

<label>Gststatename</label><Select name="gststatename" id ="gststate" onChange="getgstcode(this.value);">
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
<div class="six columns" >
<label>Supplier name</label><select name="suppliername" id="suppliername" onChange="getaddress1(this.value);">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["suppliername"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns" >
<label>Supplier Address</label><select name="supplieraddress" id="supplieraddress">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>Overseas agent</label><select name="overseasagentname" id="overseasagentname" >
<option> </option>
<?php foreach ($data4 as $row): ?>
    <option><?=$row["overseasagentname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns" >
<label>Forwarder</label><input type="text" name="forwarder">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>Notify</label><input type="text" name="notify">
</div>
<div class="six columns" >
<label>Notify address</label><input type="text" name="notifyaddress">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>S. Agent</label><input type="text" name="sagent">
</div>
<div class="six columns" >
<label>Seller</label><input type="text" name="seller">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>type</label><select name="type" id="fy" value="type">
     
	<option>House</option>
	<option>Master</option>
    </select>
	</div>
<div class="six columns" >
	<label>shipment type</label><select name="shipmenttype" id="st" value="shipmenttype">
     <option></option>
     <option>Consol</option>
	 <option>Non Consol</option>
	 </select>
	 </div>
	 </div><br>
	 <div class="row">
<div class="four columns" >
	
    <label> Hawb Natue</label><Select name="hawbnature">
	 <option>Prepaid</option>
	 <option>Collect</option>
	 </select>
	 </div>
<div class="four columns" >
	 <label>Cargo type</label><select name="cargotype">
	 <option>General</option>
	 <option>Hazardous</option>
	 <option>Valuable</option>
	 <option>Perishable</option>
	 <option>Others</option>
	 </select>
	 </div>
<div class="four columns" >
	<label> Mode</label><Select name="mode">
	 <option>Direct</option>
	 <option>Nominated to us</option>
	 <option>To Others</option>
	 </select>
	</div>
	</div><br>
   

 
 
 <div>
 <h5>shipment details</h5>
 <div class="row">
<div class="six columns" >
<label>Hawbbl NO</label> <input type="text" id="hawbbblno" name="hawbblno">
</div>
<div class="six columns" >
<label>hawbbl DATE</label><input type="date" id ="hawbbldate" name ="hawbbldate">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>mawbbl NO</label> <input type="text" id="mawbblno" name="mawbblno">
</div>
<div class="six columns" >
<label>Mawbbl DATE</label><input type="date" id ="mawbbldate" name ="mawbbldate">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>GRN NO</label><input type="text" id="GRNNO" name="grnno">
</div>
<div class="six columns" >
<label>PO NO</label><input type="text" id="PONO" name="pono"> 
</div>
</div><br>
<div class="row">
<div class="six columns" >
 <label>do no</label><input type="text" id="dono" name="dono">
 </div>
<div class="six columns" >
 <label>do Date</label><input type="date" id ="dodate" name="dodate">
 </div>
 </div><br>
 <div class="row">
<div class="six columns" >
 <label>shipment terms</label><select name="shipmentterms" id="st" value="shipmentterms">
     <option></option>
     <option value="term1">term 1</option>
    <option value="term2">term 2</option> 
    </select>
	</div>
<div class="six columns" >
	<label>Place of Supply</label><input type="text" name="pos">
	</div>
	</div><br>
	</div>
<div id="gd">
<h5>goods detail</h5>
<div class="row">
<div class="six columns" >
<label>No. Of Packages</label><input type="text" id="pack" name="pack">
</div>
<div class="six columns" >
<label>units</label><input type="text" id="units1" name="units1">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>Gross Weight</label><input type="text" id="gw" name="gw">
</div>
<div class="six columns" >
<label>units</label><input type="text" id="units2" name="units2">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>net weight</label><input type="text" id="nw" name="nw">
</div>
<div class="six columns" >
<label>units</label><input type="text" id="units3" name="units3">
</div>
</div><br>
<div class="row">
<div class="twelve columns" >
<label>Goods Description</label><textarea name="goodsdescription" rows="20" cols="40"></textarea>
</div>
</div><br>
<div class="row">
<div class="twelve columns" >
<label>Marks and Nos</label><textarea name="marksandnos" rows="20" cols="40"></textarea>
</div>
</div>
</div><br>

 <div id="pod">
<h5>Port Details</h5>
<div class="row">
<div class="six columns" >
<label>origin Country</label><select name="countryname" id="countryname" onChange="getport(this.value);">
<option> </option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns" >
<label>origin port</label><select name="originport" id="originport">
<option value="">Select</option>
</select>
</div>
</div><br>


<div class="row">
<div class="six columns" >
<label>Destination Country</label><select name="destinationcountry" id="destinationcountry" onChange="getport3(this.value);">
<option></option>
<?php foreach ($data5 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns" >
<label>Destination Port</label><select name="destinationport" id="destinationport">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>clearence AT</label><select name="clearanceat" id="clearanceat">
<option></option>
<?php foreach ($data6 as $row): ?>
    <option><?=$row["portname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="six columns" >
<label>terminal</label><input type="text" name="terminal">
</div>
</div><br>
</div>
<div id="vd">
<h5>vessel Details</h5>
<div class="row">
<div class="six columns" >
 <label>First carrier</label><input type="text" name="firstcarrier">
 </div>
<div class="six columns" >
 <label> Second carrier</label><input type="text" name="secondcarrier">
 </div>
 </div><br>
<div class="row">
<div class="six columns" >
<label>ETA</label><input type="date" name="eta">
</div>
<div class="six columns" >
<label>ETD</label><input type="date" name="etd">
</div>
</div><br>
<div class="row">
<div class="six columns" >
<label>igmno</label><input type="text" name="igmno">
</div>
<div class="six columns" >
<label>igm date</label><input type="date" name="igmdate">
</div>
</div><br>


</div>
<div id="msc">
<h5>Booking</h5>
<div class="row">
<div class="four columns" >
<label>Bookingno</label><input type="text" name="book">
</div>
<div class="four columns" >
<label>referenceno</label><input type="text" name="ref">
</div>
<div class="four columns" >
<label>Remarks</label><input type="text" name="remarks">
</div>
</div><br>
</div>



<button type="submit" class="button-success pure-button" name="save"  formaction="insert4.php">Save</button>
</form>


		

</body>
</head>
</html>

