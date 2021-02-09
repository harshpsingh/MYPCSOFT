<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>cash Receipts</title>
<button><a href="Logout.php">logout</a></button>
<button><a href="cashvouchers.php">Cash voucher</a></button>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">cash Receipts</h3>
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
		$smt = $conn->prepare('select * From accountmaster');
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
		$smt1 = $conn->prepare('select * From accountmaster where accountgroup="Cash-in-Hand"');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		$branch=$_SESSION["branch"];
		$fy=$_SESSION["fy"];
		if($branch=='New Delhi')
		{
			$br='DEL';
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
			$br=='UP';
		}
		$div=$_POST["division"];
		if($div=='Export Sea')
		{
			$dc='SE';
		}
		else if($div=='Import Sea')
		{
			$dc='SI';
		}
		else if($div=='Export Air')
		{
			$dc='AE';
		}
		else if($div=='Import Air')
		{
			$dc='AI';
		}
		 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountmaster";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="Select * from cashreceiptno where branch='$_SESSION[branch]' and division='$_POST[division]'";
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$vn=$rows['voucherno'];
}
		
		?>
<form method="post">

<input type="hidden" name="vn" value="<?php echo $vn?>">
<div class="row">
<div class="col-md-3">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-3">
Division<input type="text" name="division" readonly value="<?php echo $_POST['division'];?>">
</div>
<div class="col-md-3">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
date<input type="date" name="entrydate">
</div>
<div class="col-md-6">
Voucher no<input type="text" name="voucherno" value="<?php echo "CV/".$br."/".$dc."/".$vn?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Credit account<select name="creditaccount" >
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Credit amount<input type="text" name="creditamount">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Debit account<select name="debitaccount" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
debit amount<input type="text" name="debitamount">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Cheque no<input type="text" name="chequeno">
</div>
<div class="col-md-6">
Narration<input type="text" name="narration">
</div>
</div><br>
<button type="submit" name="savecashreceipt" formaction="savecashreceipt.php">Save</button>

</form>
<form method="post">
<div class="row">
<div class="col-md-4">
Divsion<input type="text" name="division" readonly value="<?php echo $_POST['division'];?>">
</div>
<div class="col-md-4">
From date<input type="date" name="fromdate">
</div>
<div class="col-md-4">
To date<input type="date" name="todate">
</div>
</div><br>
<button type="submit" name="view" formaction="viewcashreceipt.php">view</button>

</body>
</head>
</html>