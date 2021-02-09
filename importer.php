<html>
<head>
<a href="Logout.php">logout</a>

<title>Importer</title>
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
		
<form method="post"  style="background-color:#99ffbb;">

Importer name<input type="text" name="importername">

Address1<input type="text" name="address1">
Address2<input type="text" name="address2">
PIN<input type="text" name="pin"><br>
City<input type="text" name="city">
State<select name="state" id="state">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>

Country<input type="text" name="country">
Phone<input type="text" name="phone">
Fax<input type="text" name="fax">
Email<input type="text" name="email"><br>
Mobile<input type="text" name="mobile">
Pan no<input type="text" name="panno">
Tan no<input type="text" name="tanno">

Gst State Name<Select name="gststate" id ="gststate" onChange="getgstcode(this.value);">
<option>Select State</option>
		<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
Gst State Code<select name="gstcode" id="gstcode">
<option> Select code</option>
</select><br>

Gstin Type<select name="gstintype" id="gstintype">
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["gstintype"]?></option>
<?php endforeach ?>
</select>
Gstin<input type="text" name="gstin"><br>
IEC code<input type="text" name="iec">
sez<input type="text" name="sez">

AD Code<input type="text" name="adcode">
Forex code<input type="text" name="forexcode">
Branch code<input type="text" name="branchcode"><br>
Bank Account<input type="text" name="bankaccount">
IFsc code<input type="text" name="ifsccode"><br>






<button type="submit" name="add"  value="ADD" formaction="saveimporter.php">ADD</button>&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp

</form>
<iframe src="viewimporter.php" width="800"height="300">.</iframe>
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
		$smt2 = $conn->prepare('select * From importer');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		?>
		
<form name="form2" method="post">
importername<select name="importername">

<?php foreach ($data2 as $row): ?>
    <option><?=$row["importername"]?></option>
<?php endforeach ?>
</select>
<button type="submit" name="modify" formaction="updateimporter.php" >Modify</button>
<button type="submit" name="delete" formaction="deleteim
porter.php">Delete</button>
</body>
</form>

</head>
</html>
