<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Ledgers</title>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Ledgers</h3>
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
Account Name<select name="accountname" id="accountname">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
From date<input type="date" name="fromdate">
</div>
<div class="col-md-4">
To date<input type="date" name="todate">
</div>
</div><br>
<button type="submit" name="viewledger" formaction="viewledger.php">view Ledger</button>
</form>
</body>
</head>
</html>