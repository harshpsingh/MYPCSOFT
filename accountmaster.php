<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Account Master</title>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Accounts Master</h3>
<button><a href="Logout.php">logout</a></button>
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
		$smt = $conn->prepare('select * From accgroup');
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
		$smt1 = $conn->prepare('select * From accountmaster');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		?>
<form method="post">
<div class="row">
<div class="col-md-4">
Accountname<input type="text" name="accountname">
</div>
<div class="col-md-4">
Account Group<select name="accountgroup" id="accountgroup">


<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountgroup"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
Balance<input type="text" name="balance">
</div>
</div><br>
<button type="submit" name="saveacount" formaction="saveaccdetails.php">Save</button>

</form>
<iframe src="viewaccdetails.php" width="500" height="300" style="background-color:white;">Viewaccount</iframe>
<form method="post">
<div class="row">
<div class="col-md-6">
Accountname<select name="accountname" id="accountname">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Balance<input type="text" name="balance">
</div>
</div><br>
<button type="submit" name="saveacount" formaction="editaccdetails.php">edit</button>
</form>
</body>
</head>
</html>