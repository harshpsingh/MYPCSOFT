<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Cheque Book Management</title>
<a href="Logout.php">logout</a>
<body>
<?php
Session_start();
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
		$smt1 = $conn->prepare('select * From accountmaster where accountgroup="bankaccounts"');
		$smt1->execute();
		$data1 = $smt1->fetchAll();

?>
<h2>Cheque Book Management</h2>
<form method="post">
Bank name<select name="bankaccount" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-3">
Partyname<input type="text" name="partyname">
</div>
<div class="col-md-3">
Pay to<input type="text" name="payto">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
issueddate<input type="date" name="issuedate">
</div>
<div class="col-md-3">
Received date<input type="date" name="receiveddate">
</div>
<div class="col-md-3">
chequeno<input type="text" name="chequeno">
</div>
<div class="col-md-3">
Amount<input type="text" name="amount">
</div>
</div><br>
Status<select name="status">
<option></option>
<option>Issued</option>
<option>Not issued</option>
<option> PDC</option>
<option>Cancelled</option>
</select>
<button type="submit" name="addcheque" formaction="addcheque.php">Add Cheque</button>
</form>
<div class="row">

<form method="post">
<div class="col-md-3">
Bank name<select name="bankaccount" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-3">
From date<input type="date" name="fromdate">
</div>
<div class="col-md-3">
To date<input type="date" name="todate">
</div>
</div><br>
<button type="submit" name="viewcheque" formaction="viewchequedetails.php">View</button>
<button type="submit" name="exportcheque" formaction="exportcheque.php">export</button>
</form>
</body>
</head>
</html>