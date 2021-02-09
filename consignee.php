<html>
<head>
<title>Consignee</title>
<body>
<button><a href="Logout.php">logout</a></button>
<button><a href="adminpage.php">adminpage</a></button>
<h1> Consignee</h1>
<form method="post" style="background-color:#99ffbb;"  >
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
		$smt = $conn->prepare('select * From countrylist');
		$smt->execute();
		$data = $smt->fetchAll();
		?>
		
Consigneename<input type="text" name="consigneename">

Address1<input type="text" name="address1">
Address2<input type="text" name="address2">
city<input type="text" name="city">
Country<select name="country" id="country">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select><br>
Phone<input type="text" name="phone">
Fax<input type="text" name="fax">
Email<input type="text" name="email">
Mobile<input type="text" name="mobile"><br>
<button type="submit" name="add"  value="ADD" formaction="saveconsignee.php">ADD</button>
</form>
<iframe src="viewconsignee.php" width="800"height="300">.</iframe>
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
		$smt2 = $conn->prepare('select * From consignee');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		?>
		
<form name="form2" method="post">
Consignee name<select name="consigneename">
<option>---Select Consignee---</option>
<?php foreach ($data2 as $row): ?>

    <option><?=$row["consigneename"]?></option>
<?php endforeach ?>
</select>
<button type="submit" name="modify" formaction="updateconsignee.php" >Modify</button>
<button type="submit" name="delete" formaction="deleteconsignee.php">Delete</button>
</form>
<body>
</head>
</html>
