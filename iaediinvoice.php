<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
function getexchrate(val) {
	$.ajax({
	type: "POST",
	url: "get_exchratei.php",
	data:'currencyname='+val,
	success: function(data){
		$("#exchangerate").html(data);
	}
	});
}

function getaddress1(val) {
	$.ajax({
	type: "POST",
	url: "get_supplieraddress1.php",
	data:'suppliername='+val,
	success: function(data){
		$("#supplieraddress1").html(data);
	}
	});
}
function getaddress2(val) {
	$.ajax({
	type: "POST",
	url: "get_supplieraddress2.php",
	data:'supplieraddress1='+val,
	success: function(data){
		$("#supplieraddress2").html(data);
	}
	});
}
function getcity(val) {
	$.ajax({
	type: "POST",
	url: "get_suppliercity.php",
	data:'supplieraddress2='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}
function getcountry(val) {
	$.ajax({
	type: "POST",
	url: "get_suppliercountry.php",
	data:'city='+val,
	success: function(data){
		$("#country").html(data);
	}
	});
}
</script>
</head>
<button><a href="logout.php">Logout</a><br></button>
<?php
session_start();

if(isset($_POST['jobno'])){
$_SESSION['jobno']=$_POST['jobno'];
}
?>
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
		$smt1 = $conn->prepare('select * From currencymaster');
		$smt1->execute();
		$data1 = $smt1->fetchAll();
			
 try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt= $conn->prepare('select * From supplier');
		$smt->execute();
		$data= $smt->fetchAll();
		?>
<body>
<form method="post">
<table>
<tr>
<td>
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"></td>
<td>branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"></td>

<td>year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"></td></tr>
<tr>
<td>
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>"></td><br>
</table>
Invoicesrno<input type="text" name="invoicesrno">
Invoiceno<input type="text" name="invoiceno">
Invoicedate<input type="date" name="invoicedate">
Invoicevalue<input type="text" name="invoicevalue" id="invoicevalue"><br>
Currencyname<select name="currencyname" id="currencyname" onChange="getexchrate(this.value);" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["currencyname"]?></option>
<?php endforeach ?>
</select>
exchangerate<Select name="exchangerate" id="exchangerate">
<option value="">Select</option>
</select>
Termsofinvoice<select name="termsofinvoice">
<option></option>
<option>CF</option>
<option>CIF</option>
<option>CI</option>
<option>FOB</option>
</select><br>
LOC No<input type="text" name="locno">
Loc Date<input type="date" name="locdate"><br>
Suppliername<select name="suppliername" id="suppliername" onChange="getaddress1(this.value)">
<option> </option>
<?php foreach ($data as $row): ?>
    <option><?=$row["suppliername"]?></option>
<?php endforeach ?>
</select>
Supplier address1<select name="supplieraddress1" id="supplieraddress1" onChange="getaddress2(this.value)">
<option></option>
</select>
Supplier address2<select name="supplieraddress2" id="supplieraddress2" onChange="getcity(this.value)">
<option></option>
</select><br>
City<select name="city" id="city" onChange="getcountry(this.value)">
<option></option>
</select>
Country<select name="country" id="country">
<option></option>
</select>
B/S Related<select name="bsrelated" >
<option></option>
<option>Y</option>
<option>N</option>
</select><br>
Nature of transaction<select name="natureoftransaction">
<option></option>
<option>S</option>
<option>C</option>
<option>H</option>
<option>F</option>
<option>O</option>
<option>P</option>
<option>G</option>
</select>
Terms of Payment<select name="termsofpayment">
<option></option>
<option>LC</option>
<option>FC</option>
<option>DP</option>
<option>SD</option>
<option>OTH</option>
</select>
Valuation method<select name="valuationmethod">
<option></option>
<option>Rule4</option>
<option>Rule5</option>
<option>Rule6</option>
<option>Rule7</option>
<option>Rule7A</option>
<option>Rule8</option>
<option>Others</option>
</select><br>
Freight<input type="text" name="freight">
Insurance<input type="text" name="insurance">
Agency Comm<input type="text" name="agencycomm"><br>
Loading charges<input type="text" name="loadingcharges">
Misc Charges<input type="text" name="misccharges">
Discount<input type="text" name="discount">
HighSeaSale<input type="text" name="highseasale"><br>
<button type="submit" name="saveisediinvoice" formaction="saveediinvoiceia.php">save</button>



</form>
</body>
</html>
