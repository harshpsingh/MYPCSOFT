<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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

<title>Shipline</title>
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
		?>
<button><a href="Logout.php">logout</a></button>
<button><a href="adminpage.php">adminpage</a></button>
<h1> Shipline</h1>
<form method="post" style="background-color:#99ffbb;">
Shiplinename<input type="text" name="shiplinename">

Address1<input type="text" name="address1">
Address2<input type="text" name="address2">
State<select name="state" id="state">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>

city<input type="text" name="city"><br>
Pin<input type="text" name="pin">
Country<input type="text" name="country"><br>
Phone<input type="text" name="phone">
Fax<input type="text" name="fax">
Email<input type="text" name="email">
Mobile<input type="text" name="mobile"><br>
Gst State<Select name="gststate" id ="gststate" onChange="getgstcode(this.value);">
<option>Select State</option>
		<?php foreach ($data as $row): ?>
    <option><?=$row["gststate"]?></option>
<?php endforeach ?>
</select>
Gst code<select name="gstcode" id="gstcode">
<option> Select code</option>
</select>

Gstin no<input type="text" name="gstin" ><br>
<button type="submit" name="add"  value="ADD" formaction="saveshipline.php">ADD</button>
</form>
<iframe src="viewshipline.php" width="800"height="300">.</iframe>
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
		$smt2 = $conn->prepare('select * From shipline');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		?>
		
<form name="form2" method="post">
Shipline  name<select name="shiplinename">
<option>---Select Shipline---</option>
<?php foreach ($data2 as $row): ?>

    <option><?=$row["shiplinename"]?></option>
<?php endforeach ?>
</select>
<button type="submit" name="modify" formaction="updateshipline.php" >Modify</button>
<button type="submit" name="delete" formaction="deleteshipline.php">Delete</button>
</form>
<body>
</head>
</html>
