<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Journal Entry</title>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Day Book</h3>
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
		$smt = $conn->prepare('select * From accountmaster');
		$smt->execute();
		$data = $smt->fetchAll();
		?>
<form method="post">
<div class="row">
<div class="col-md-4">
Entry Date<input type="date" name="entrydate">
</div>
<div class="col-md-4">
 Debit Account Name<select name="debitaccount" id="debitaccount">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
 Credit Account Name<select name="creditaccount" id="creditaccount">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Amount<input type="text" name="amount">
</div>
<div class="col-md-6">
Narration<input type="text" name="narration">
</div><br>
<button type="submit" name="saventry" formaction="saveentry.php">Save</button>
</form>
</body>
</head>
</html>