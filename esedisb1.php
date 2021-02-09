<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>

	function getchanumber(val) {
	$.ajax({
	type: "POST",
	url: "get_chanumber.php",
	data:'locationname='+val,
	success: function(data){
		$("#chanumber").html(data);
	}
	});
}



</script>
<title>ES Edi register</title>
<body>
<button><a href="logout.php">Logout</a><br></button>
<?php
if(isset($_POST['branch'])&& ($_POST['fy']))
{
$branch=$_POST['branch'];
$fy=$_POST['fy'];
}
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
		$smt = $conn->prepare('select jobno From jobno');
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
		$smt1 = $conn->prepare('select locationname From chalocation');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		
		
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2 = $conn->prepare('select exportername From exporter');
		$smt2->execute();
		$data2 = $smt2->fetchAll();
		
				
try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt3 = $conn->prepare('select consigneename From consignee');
		$smt3->execute();
		$data3 = $smt3->fetchAll();
		
		
		?>
		<?php
session_start();

?>
<form method="post">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

Jobno<select name="jobno" id="jobno">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["jobno"]?></option>
<?php endforeach ?>
</select>

Job Date<input type="date" name="jobdate" id="jobdate" value="<?php echo $currentdate?>"><br>
Cha name<input type="text" name="chaname">
locationname<select name="locationname" id="locationname" onChange="getchanumber(this.value)";>
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["locationname"]?></option>
<?php endforeach ?>
</select>
chanumber<select name="chanumber" id="chanumber">
<option value="">Select</option>
</select><br>
exportername<select name="exportername" id="exportername";>
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["exportername"]?></option>
<?php endforeach ?>
</select>
Consigneename<select name="consigneename" id="consigneename";>
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["consigneename"]?></option>
<?php endforeach ?>
</select><br>

Exporter type<Select name="exportertype" >
<option></option>
<option>R</option>
<option>F</option>
</select>
Exporter class<Select name="exporterclass" >
<option></option>
<option>P</option>
<option>G</option>
</select>
RBI Waiverno<input type="text" name="rbiwn">
Rbi waiver date<input type="date" name="rbidate"><br>

Factory stuffed<Select name="factorystuffed" >
<option></option>
<option>YES</option>
<option>NO</option>
</select>
Nature of Cargo<Select name="natureofcargo" >
<option></option>
<option>C</option>
<option>CP</option>
<option>P</option>
<option>DB</option>
<option>LB</option>
</select>



<button type="submit" name="save"  value="save" formaction="saveedisb1.php">save</button>


</form>

</body>
</head>
</html>