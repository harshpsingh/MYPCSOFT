<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">

<title>Exporter</title>
<head>
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

		
</script>		

<body >
<a href="adminpage.php">adminpage</a>
<?php
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
		$smt1 = $conn->prepare('select * From gstintype');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		?>
		
<form method="post" style="background-color:#99ffbb;" >
<div class="row">
<div class="four columns">
<label>Exportername</label><input type="text" name="exportername">
</div>
<div class="four columns">
<label>Address1</label><input type="text" name="address1">
</div>
<div class="four columns">
<label>Address2</label><input type="text" name="address2">
</div>
</div>
<div class="row">
<div class="three columns">
<label>PIN</label><input type="text" name="pin">
</div>
<div class="three columns">
<label>City</label><input type="text" name="city">
</div>
<div class="three columns">
<label>State</label><select name="state" id="state">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="three columns">
<label>Country</label><input type="text" name="country">
</div>
</div>
<div class="row">
<div class="three columns">
<label>Phone</label><input type="text" name="phone">
</div>
<div class="three columns">
<label>Fax</label><input type="text" name="fax">
</div>
<div class="three columns">
<label>Email</label><input type="text" name="email">
</div>
<div class="three columns">
<label>Mobile</label><input type="text" name="mobile">
</div>
</div>
<div class="row">
<div class="three columns">
<label>Panno</label><input type="text" name="panno">
</div>
<div class="three columns">
<label>Tan no</label><input type="text" name="tanno">
</div>
<div class="three columns">
<label>Gst State Name</label><Select name="gststate" id ="gststate" onChange="getgstcode(this.value);">
<option>Select State</option>
		<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="three columns">
<label>Gst State Code</label><select name="gstcode" id="gstcode">
<option> Select code</option>
</select>
</div>
</div>
<div class="row">
<div class="three columns">
<label>Gstin type</label><select name="gstintype" id="gstintype">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["gstintype"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="three columns">
<label>gstin</label><input type="text" name="gstin">
</div>
<div class="three columns">
<label>IEC code</label><input type="text" name="iec">
</div>
<div class="three columns">
<label>sez</label><input type="text" name="sez">
</div>
</div>
<div class="row">
<div class="three columns">
<label>AD Code</label><input type="text" name="adcode">
</div>
<div class="three columns">
<label>Forex code</label><input type="text" name="forexcode">
</div>
<div class="three columns">
<label>Branch code</label><input type="text" name="branchcode">
</div>
<div class="three columns">
<label>Bank Account</label><input type="text" name="bankaccount">
</div>
</div>
<div class="row">
<div class="three columns">
<label>IFSC code</label><input type="text" name="ifsccode"><br>
</div>
</div>





<button type="submit" name="add" class="button-primary" value="ADD" formaction="saveexporter.php">ADD</button>&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp

</form>
<iframe src="viewexporter.php" width="800"height="300">.</iframe>
<?php
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
		$smt2 = $conn->prepare('select * From exporter');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		?>
		
<form name="form2" method="post">
<div class="row">
<div class="three columns">
<label>exportername</label><select name="exportername">

<?php foreach ($data2 as $row): ?>
    <option><?=$row["exportername"]?></option>
<?php endforeach ?>
</select>
</div>
</div>
<button type="submit" name="modify" formaction="updateexporter.php" >Modify</button>
<button type="submit" name="delete" formaction="deleteexporter.php">Delete</button>
</body>
</form>

</head>
</html>
