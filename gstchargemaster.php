<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Gst Charge Master</title>
<body style="background-color:#d4aed6;">
<?php

		$servername = "localhost";
$username = "root";
$password="";


try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt = $conn->prepare('select * From accountmaster where accountgroup="Directincome"');
		$smt->execute();
		$data = $smt->fetchAll();
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt1 = $conn->prepare('select * From accountmaster where accountgroup="Directexpense"');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
			
try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
		$smt2 = $conn->prepare('select * From accountmaster where accountgroup="GSTPayable"');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
	try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
		$smt3 = $conn->prepare('select * From accountmaster where accountgroup="GSTReceivable"');
		$smt3->execute();
		$data3 = $smt3->fetchAll();
		
		?>
<h3 style="text-align:center; color:red;">Gst Charge Master</h3>
<form method="post">
<div class="row">
<div class="col-md-3">
Charge Name<input type="text" name="chargename">
</div>
<div class="col-md-3">
Charge type<select name="chargetype" id="chargetype">
<option>Taxable</option>
<option>Reimbursable</option>
</select>
</div>
<div class="col-md-3">
S.A.C <input type="text" name="sac">
</div>
<div class="col-md-3">
Gst Rate<input type="text" name="gstrate">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Income Head<select name="incomehead" id="incomehead">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Expense Head<select name="expensehead" id="expensehead">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Cgst Head<select name="cgsthead" id="cgsthead">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Cgst income Head<select name="cgstincomehead" id="cgstincomehead">
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Sgst Head<select name="sgsthead" id="sgsthead">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Sgst income Head<select name="sgstincomehead" id="sgstincomehead">
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Igst Head<select name="igsthead" id="igsthead">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Igst income Head<select name="igstincomehead" id="igstincomehead">
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<button type="submit" class="btn-primary" formaction="savegstcharge.php">Save </button>
</form>
<iframe src="viewgstchargedet.php" width="1000" height="300" style="background-color:#ffffff;"></iframe>
</body>
</head>
</html>