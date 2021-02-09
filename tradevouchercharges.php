<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  
</head>

<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Trade Vouchers</h3>

<?php
session_start();
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
<div class="four columns">
<label>voucherno</label>
<input type ="text" name="voucherno" value="<?php echo $_POST['voucherno']?>">
	</div>
	<div class="four columns">
	<label>Docketno</label>
	<input type ="text" name="docketno" value="<?php echo $_POST['docketno']?>">
	</div>
	</div>
	
	<div class="row">
<div class="four columns">
	
	<label>accountname</label>
	<select name="accountname" >
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="four columns">
	<label>creditamount</label>
	<input type="text" name="creditamount">
	</div>
	<div class="four columns">
	<label>debitamount</label>
	<input type="text" name="debitamount">
	</div>
	</div>
	<button type="submit"  class="button-primary"name="savetradevouchercharge" formaction="savetradevouchercharge.php">save charge</button>
	<button type="submit"  class="button-primary"name="printtradevoucher" formaction="printtradevoucher.php">print</button>
</form>
<iframe name="frame1" src="viewtradevouchercharge.php" width="600" height="400"  style="background-color:#ffffff;"></iframe>
</body>
</head>
</html>