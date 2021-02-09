<html>
<head>
<title> Supplier</title>
<body>
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
<form method="post" name="form1" style="background-color:#99ffbb;">
Suppliername<input type="text" name="suppliername">
Address1<input type="text"  name="address1">
Address2<input type="text" name="address2"><br>
City<input type="text" name="city">
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
<button type="submit" name="add"  value="ADD" formaction="savesupplier.php">ADD</button>
</form>
<iframe src="viewsupplier.php" width="800"height="300">.</iframe>
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
		$smt2 = $conn->prepare('select * From supplier');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		?>
		
<form name="form2" method="post">
supplier name<select name="suppliername">
<option>---Select supplier---</option>
<?php foreach ($data2 as $row): ?>

    <option><?=$row["suppliername"]?></option>
<?php endforeach ?>
</select>
<button type="submit" name="modify" formaction="updatesupplier.php" >Modify</button>
<button type="submit" name="delete" formaction="deletesupplier.php">Delete</button>
</form>

</body>
</head>
</html>