<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
function getfinb()
{
if((document.getElementById("contractnature").value)=='FOB')
	{
		document.getElementById("finb").value='N';
	}
	else 
	document.getElementById("finb").value='';

}

 function getfc()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("fc").value= curr.value;
	
}
function getic()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("ic").value= curr.value;
	
}
function getcc()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("cc").value= curr.value;
	
}
function getdc()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("dc").value= curr.value;
	
}
function getpc()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("pc").value= curr.value;
	
}
function getoc()
{
	var curr=document.getElementById("currencyname");

	document.getElementById("oc").value= curr.value;
	
}
function getfobfc()
{
	var inv=document.getElementById("invoicevalue");
	var fa=document.getElementById("freightamount");
	var ia=document.getElementById("insuranceamount");
	var fn=document.getElementById("finb");
	if((fn.value)=="B")
	{
	document.getElementById("fobfc").value=inv.value-fa.value-ia.value;
	}
	else if((fn.value)=="F")
	{
		document.getElementById("fobfc").value=inv.value-fa.value;
	}
	else if((fn.value)=="I")
	{
		document.getElementById("fobfc").value=inv.value-ia.value;
	}
	else if((fn.value)=="N")
	{
		document.getElementById("fobfc").value= +inv.value+ +fa.value+ +ia.value;
	}
}
function getfob()
{
	var fobfc=document.getElementById("fobfc");
	var exch=document.getElementById("exchangerate");
	document.getElementById("fob").value=fobfc.value*exch.value;
	
}

function getexchrate(val) {
	$.ajax({
	type: "POST",
	url: "get_exchangerate.php",
	data:'currencyname='+val,
	success: function(data){
		$("#exchangerate").html(data);
	}
	});
}

function showthirdpartydet()
{
	if(document.getElementById("whether").value=="YES")
	{
		document.getElementById("tp1").style.visibility="visible";
		document.getElementById("tp2").style.visibility="visible";
	}
	else{
		document.getElementById("tp1").style.visibility="hidden";
		document.getElementById("tp2").style.visibility="hidden";
	}
}

</script>
<title>Edi invoice details</title>
<body style="background-color:#8284e8; color:#00000">
<button class="btn-success"><a href="logout.php" >Logout</a></button>
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
		?>
<form method="post">
<?php
session_start();
?>
<div class="row" style="position:relative; left:20;">
<div class="col-md-3">
<label>jobno</label><input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>">
</div>
<div class="col-md-3">
<label>username</label><input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
<label>branch</label><input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-3">
<label>year</label><input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
<label>Currencyname</label><select name="currencyname" id="currencyname" onChange="getexchrate(this.value);" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["currencyname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
<label>exchangerate</label><Select name="exchangerate" id="exchangerate">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row" style="position:relative; left:5;">
<div class="col-md-3">
<label>Invoicesrno</label><input type="text" name="invoicesrno">
</div>
<div class="col-md-3">
<label>Invoiceno</label><input type="text" name="invoiceno">
</div>
<div class="col-md-3">
<label>Invoicedate</label><input type="date" name="invoicedate">
</div>
<div class="col-md-3">
<label>Invoicevalue</label><input type="text" name="invoicevalue" id="invoicevalue">
</div>
</div><br>
<div class="row" style="position:relative; left:5;">
<div class="col-md-6" >
<label>Payment nature</label><select name="paymentnature">
<option></option>
<option>LC</option>
<option>DP</option>
<option>AP</option>
<option>DA</option>
<option>NA</option>
</select>
</div>
<div class="col-md-6">
<label>Payment Period</label><input type="text" name="paymentperiod">
</div>
</div><br>
<div class="row"style="position:relative; left:5;">
<div class="col-md-6">
<label>Contractno</label><input type="text" name="contractno">
</div>
<div class="col-md-6">
<label>Nature of Contract</label><select name="contractnature" id="contractnature" onChange="getfinb()">
<option></option>
<option value="CF">CF</option>
<option value="CIF">CIF</option>
<option value="CI">CI</option>
<option value="FOB">FOB</option>
</select>
</div>
</div><br>
<div class="row" style="position:relative; left:5;">
<div class="col-md-3">
<label>FINB</label><input type="text" name="finb" id="finb"  style="position:relative; left:5;">
</div>
<div class="col-md-3">
<label>BUYER  AND CONSIGNEE SAME?</label><select name="buyerconsignee">
<option></option>
<option>YES</option>
<option>NO</option>
</select>
</div>
<div class="col-md-3">
<label>Buyer's name</label><input type="text" name="buyername">
</div>
<div class="col-md-3">
<label>Buyer's Address</label><input type="text" name="buyeraddress">
</div>
</div><br><br>
<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Freight Rate</label><input type="text" name="freightrate">
</div>
<div class="col-md-4">
 <label>Currency</label><input type="text" name="freightcurrency" id="fc" onclick="getfc()">
 </div>
 <div class="col-md-4">
<label>amount</label><input type="text" name="freightamount" id="freightamount">
</div>
</div><br>
<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Insurance Rate</label><input type="text" name="insurancerate">
</div>
<div class="col-md-4">
 <label>Currency</label><input type="text" name="insurancecurrency" id="ic" onclick="getic()">
 </div>
 <div class="col-md-4">
<label>amount</label><input type="text" name="insuranceamount" id="insuranceamount">
</div>
</div><br>

<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Commission Rate</label><input type="text" name="commissionrate">
</div>
<div class="col-md-4">
<label>Currency</label><input type="text" name="commissioncurrency" id="cc" onclick="getcc()">
</div>
<div class="col-md-4">
<label>amount</label><input type="text" name="commissionamount">
</div>
</div><br>
<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Discount rate</label><input type="text" name="discountrate">
</div>
<div class="col-md-4">
<label>Currency</label><input type="text" name="discountcurrency" id="dc" onclick="getdc()">
</div>
<div class="col-md-4">
<label>amount</label><input type="text" name="discountamount">
</div>
</div><br>
<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Packing chgs rate</label><input type="text" name="packchgsrate">
</div>
<div class="col-md-4">
<label> Currency</label><input type="text" name="packchgscurrency" id="pc" onclick="getpc()">
</div>
<div class="col-md-4">
<label>amount</label><input type="text" name="packchgsamount">
</div>
</div><br>
<div class="row" style="position:relative; left:45;">
<div class="col-md-4">
<label>Other Deduction Rate</label><input type="text" name="otherdeductionrate">
</div>
<div class="col-md-4">
<label>Currency</label><input type="text" name="otherdeductioncurrency" id="oc" onclick="getoc()">
</div>
<div class="col-md-4">
<label>amount</label><input type="text" name="otherdeductionamount">
</div>
</div><br>
<div class="row" style="position:relative; left:15;">
<div class="col-md-6">
<label>FOBFc</label><input type="text" name="fobfc" id="fobfc" onclick="getfobfc()">
</div>
<div class="col-md-6">
<label>Fob</label><input type="text" name="fob" id="fob" onclick="getfob()">
</div>
</div><br>

<div class="row">
<div class="col=md-12">
<label>Whether Third Party</label>
<select name="whether" id="whether" onchange="showthirdpartydet();">
	<option></option>
	<option>YES</option>
	<option>NO</option>
</select>
</div>
</div><br>
<div class="row" id="tp1" style="visibility: hidden;">
<div class="col-md-3" style="position: relative;left:40px;">
<label>third party name</label>
<input type="text" name="thirdpartyname" >
</div>
<div class="col-md-3">
<label>third party add1</label>
<input type="text" name="thirdpartyadd1">
</div>
<div class="col-md-3">
<label>third party add2</label>
<input type="text" name="thirdpartyadd2">
</div>
<div class="col-md-3">
<label>third party city</label>
<input type="text" name="thirdpartycity">
</div>
</div><br>
<div class="row" id="tp2" style="visibility: hidden;">
<div class="col-md-4" style="position: relative;left:50px;">
<label>third party pin</label>
<input type="text" name="thirdpartypin" >
</div>
<div class="col-md-4">
<label>county sub div</label>
<select name="thirdpartycountrysubdivision" id="thirdpartycountrysubdivision">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4" >
<label>third party country</label>
<select name="thirdpartycountry" id="thirdpartycountry">
<option></option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["countryname"]?></option>
<?php endforeach ?>
</select>
</div>

</div><br>


<button type="submit" name="saveediinvoice"  class="btn-success" formaction="saveediinvoiceea.php">save</button>

</form>
</body>
</head>
</html>