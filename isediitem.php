<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>\
<script>
function getsourcecode(val) {
	$.ajax({
	type: "POST",
	url: "get_sourcecountryi.php",
	data:'sourcecountryname='+val,
	success: function(data){
		$("#sourcecountrycode").html(data);
	}
	});
}
function gettransitcode(val) {
	$.ajax({
	type: "POST",
	url: "get_transitcountryi.php",
	data:'transitcountryname='+val,
	success: function(data){
		$("#transitcountrycode").html(data);
	}
	});
}
function getendusedescription(val) {
	$.ajax({
	type: "POST",
	url: "get_endusedescription.php",
	data:'endusecode='+val,
	success: function(data){
		$("#endusedescription").html(data);
	}
	});
}
</script>
</head>
<button><a href="logout.php">Logout</a><br></button>
<body>
<form method="post">
<table>
<tr>
<td>
<?php
session_start();

if(isset($_POST['jobno'])){
$_SESSION['jobno']=$_POST['jobno'];
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
		$smt1 = $conn->prepare('select * From ritc');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
		try {
    $conn1 = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2= $conn1->prepare('select * From countrylist');
		$smt2->execute();
		$data2= $smt2->fetchAll();
		try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt3 = $conn->prepare('select * From enduse');
		$smt3->execute();
		$data3 = $smt3->fetchAll();
}
?>
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"></td>
<td>branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"></td>

<td>year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"></td></tr>
<tr>
<td>
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>"></td><br>
</table>
Invoicesrno<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoicesrno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoicesrno);
              
                  $invoicesrno = $row['invoicesrno']; 
                  echo '<option>'.$invoicesrno.'</option>';
                 
}

    echo "</select>";?>
	
	
nvoiceno<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoiceno' id='invoiceno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoiceno);
              
                  $invoiceno = $row['invoiceno']; 
                  echo '<option>'.$invoiceno.'</option>';
                 
}

    echo "</select>";?>
Invoice Date<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoicedate' id='invoicedate'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoicedate);
              
                  $invoicedate = $row['invoicedate']; 
                  echo '<option>'.$invoicedate.'</option>';
                 
}

    echo "</select>";?>
Itemno<input type="text" name="itemno">
Ritc<select name="ritc" id="ritc" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["ritc"]?></option>
<?php endforeach ?>
</select>
goodsDescription<input type="text" name="goodsdescription"><br>
Quantity<input type="text" name="quantity">
Unit<input type="text" name="unit">
Product Rate<input type="text" name="productrate"><br>
Std/Pref<Select name="stdpref">
<option></option>
<option>Std</option>
<option>Pref</option>
</select>
Manufacturer<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='manufacturer' id='manufacturer'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $manufacturer);
              
                  $manufacturer = $row['suppliername']; 
                  echo '<option>'.$manufacturer.'</option>';
                 
}

    echo "</select>";?>
	origin country<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='origincountry' id='origincountry'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $origincountry);
              
                  $origincountry= $row['country']; 
                  echo '<option>'.$origincountry.'</option>';
                 
}

    echo "</select>";?>
	Sourcecountryname<select name="sourcecountryname" id="sourcecountryname" onChange="getsourcecode(this.value);">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
SourceCountrycode<Select name="sourcecountrycode" id="sourcecountrycode">
<option><option>
</select><br>
Transitcountryname<select name="transitcountryname" id="transitcountryname" onChange="gettransitcode(this.value);">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
transitCountrycode<Select name="transitcountrycode" id="transitcountrycode">
<option><option>
</select><br>
AssesedValue<input type="text" name="accessedvalue">
End use code<select name="endusecode" id="endusecode" onChange="getendusedescription(this.value);" >
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["endusecode"]?></option>
<?php endforeach ?>
</select>
Enduse description<Select name="endusedescription" id="endusedescription">
<option value="">Select</option>
</select>
Svb load on accessed value<input type="text" name="svbaccessed">
Sbv load on duty<input type="text" name="svbduty">
Accessory status<input type="text"name="accessorystatus"><br>
Custom Notn<input type="text" name="custnotn">
Custom srno<input type="text" name="custsrno"><br>
Excise Notn<input type="text" name="excnotn">
Excise slno<input type="text" name="excsrno"<br>
BCD Notn<input type="text" name="bcdnotn">
BCD srno<input type="text" name="bcdsrno"<br>
CVD Notn<input type="text" name="cvdnotn">
CVD slno<input type="text" name="cvdsrno"<br>
Addlcvd Notn<input type="text" name="addcvdnotn">
 Addcvd CVD slno<input type="text" name="addcvdsrno"<br>
 SWS Notn<input type="text" name="swsnotn">
 SWS slno<input type="text" name="swssrno"<br>
 Sapta Notn<input type="text" name="saptanotn">
 Sapta slno<input type="text" name="saptasrno"<br>
IGst Rate<input type="text" name="igstrate">
Igst amount<input type="text" name="igstamount"><br>

<button type="submit" name="Saveitem" formaction="saveisediitemdetails.php">Saveitem</button>

</form>
</body>
</html>