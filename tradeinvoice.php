<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
if(isset($_POST['save']) and ($_POST['amount']!=""))
{
$_SESSION['voucherno']=$_POST['voucherno'];
$_SESSION['voucherdate']=$_POST['voucherdate'];
$_SESSION['invoiceno']=$_POST['invoiceno'];
$_SESSION['invoicedate']=$_POST['invoicedate'];
$_SESSION['partyname']=$_POST['partyname'];
$_SESSION['payreceive']=$_POST['payreceive'];
$_SESSION['docketno']=$_POST['docketno'];
$_SESSION['shipper']=$_POST['shipper'];



try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO tradevoucher(voucherno,voucherdate,invoiceno,invoicedate,branch,fy,division,docketno,partyname,payreceive,chargename,sac,unit,quantity,rate,amount,cgst,sgst,igst,narration) values('$_POST[voucherno]','$_POST[voucherdate]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[branch]','$_POST[fy]','$_POST[division]','$_POST[docketno]','$_POST[partyname]','$_POST[payreceive]','$_POST[chargename]','$_POST[sac]','$_POST[unit]','$_POST[quantity]','$_POST[rate]','$_POST[amount]','$_POST[cgstamount]','$_POST[sgstamount]','$_POST[igstamount]','$_POST[narration]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
   
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

	else{
	$_SESSION['voucherno']="";
	$_SESSION['invoiceno']="";
	$_SESSION['partyname']="";
	$_SESSION['payreceive']="";
	$_SESSION['docketno']="";
	$_SESSION['shipper']="";
}
if(isset($_POST['clear']))
{
	unset($_SESSION['voucherdate']);
	$_SESSION['invoiceno']="";
	unset($_SESSION['invoicedate']);
	$_SESSION['partyname']="";
	$_SESSION['docketno']="";
	$_SESSION['shipper']="";
}
	

?>
<script type="text/javascript">
function getamt()
{
var qty=document.getElementById("quantity").value;
var rate=document.getElementById("rate").value;
var amt= qty*rate;
document.getElementById("amount").value=amt;

}
function calccgst()
{
var amt=document.getElementById("amount").value;
var gstrate=document.getElementById("gstrate").value;
var cgstamt= (gstrate/200)*amt;
document.getElementById("cgstamount").value=cgstamt;

}
function calcsgst()
{
var amt1=document.getElementById("amount").value;
var gstrate=document.getElementById("gstrate").value;
var sgstamt= (gstrate/200)*amt1;
document.getElementById("sgstamount").value=sgstamt;

}	
function calcigst()
{
var amt=document.getElementById("amount").value;
var gstrate=document.getElementById("gstrate").value;
var igstamt= (gstrate/100)*amt;
document.getElementById("igstamount").value=igstamt;

}	
function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('sac');
					 
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
              
               var queryString = "?chargename=" + chargename ;
            
               //queryString +=  "&wpm=" + wpm + "&sex=" + sex;
               ajaxRequest.open("GET", "getsac.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function gstRate(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('gstrate');
					 
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
              
               var queryString = "?chargename=" + chargename ;
            
               //queryString +=  "&wpm=" + wpm + "&sex=" + sex;
               ajaxRequest.open("GET", "getgstrate.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function showshipper(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('shipper');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var docketno = document.getElementById('docketno').value;
			   var div = document.getElementById('division').value;
              
               var queryString = "?docketno=" + docketno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "show_shipper.php" + queryString, true);
               ajaxRequest.send(null); 
            }
</script>
  <title>Trade Invoice</title>
<button><a href="Logout.php">logout</a></button>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Trade Invoice</h3>
<?php


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
		if(isset($_POST["division"])){
		$_SESSION["division"]=$_POST["division"];
		}
		$div=$_SESSION["division"];
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
$sql="Select * from tradevoucherno where branch='$_SESSION[branch]' and division='$_SESSION[division]'";
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$vn=$rows['voucherno'];
}
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
		$smt = $conn->prepare('select * From accountmaster where accountgroup="Sundry Creditors S/L"');
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
		$smt1 = $conn->prepare('select * From gstcharge');
		$smt1->execute();
		$data1 = $smt1->fetchAll();

if ($div=='Export Sea')
		{
			$db='exportsea';
		}
		else if($div=='Import Sea')
		{
			$db='importsea';
		}
		else if($div=='Export Air')
		{
			$db='exportair';
		}
		else if($div=='Import Air')
		{
			$db='importair';
		}	
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2 = $conn->prepare('select * From shipmentregister where branch=:branch and fy=:fy' );
		$smt2->execute([':branch'=> $_SESSION['branch'],':fy'=> $_SESSION['fy']]);
		$data2 = $smt2->fetchAll();
			
try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt3 = $conn->prepare('select distinct invoiceno from tradevoucher');
		$smt3->execute();
		$data3 = $smt3->fetchAll();
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
Division<input type="text" name="division" id="division" readonly value="<?php echo $_SESSION['division'];?>">
</div>

<div class="col-md-3">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
Voucher no<input type="text" name="voucherno" value="<?php echo "TV/".$br."/".$dc."/".$vn?>">
<button type="submit" name="increment" formaction="nexttradeinvoice.php">next</button>
</div>

<div class="col-md-3">
voucher date<input type="date" name="voucherdate" value="<?php echo $_SESSION["voucherdate"]?>">
</div>
<div class="col-md-3">
Invoice no<input type="text" name="invoiceno" id="invoiceno" value="<?php echo $_SESSION["invoiceno"]?>">
</div>
<div class="col-md-3">
Invoice date<input type="date" name="invoicedate"value="<?php echo $_SESSION["invoicedate"]?>">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Party name
<select name="partyname" id="partyname">
<option value="<?php echo $_SESSION["partyname"]?>"><?php echo $_SESSION["partyname"]?> </option>
<option></option>
<?php foreach ($data as $row): ?>
    <option><?=$row["accountname"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Payable/receivable<Select name="payreceive" id="payreceive">
<option value="<?php echo $_SESSION["payreceive"]?>"><?php echo $_SESSION["payreceive"]?> </option>
<option></option>
<option>Payable<option>
<option>Receivable<option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
docket no<select name="docketno" id="docketno" onChange="showshipper(this.val);">
<option value="<?php echo $_SESSION["docketno"]?>"><?php echo $_SESSION["docketno"]?> </option>
<option>Select </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["docketno"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
Shipper<select name="shipper" id="shipper" >
<option value="<?php echo $_SESSION["shipper"]?>"><?php echo $_SESSION["shipper"]?> </option>
<option>Select </option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
charge name
<select name="chargename" id="chargename" onChange="ajaxFunction(this.val);gstRate(this.val);">
<option>Select </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["chargename"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
SAC
<select name="sac" id="sac">
<option value="">Select</option>
</select>
</div>
<div class="col-md-4">
GST Rate<select name="gstrate" id="gstrate">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-3">

Unit<input type="text" name="unit" value="UNITS">
</div>
<div class="col-md-3">
Qty<input type="text" name="quantity" id="quantity" onChange="getamt();">
</div>
<div class="col-md-3">
Rate<input type="text" name="rate" id="rate" onChange="getamt();"> 
</div>
<div class="col-md-3">
Amount<input type="text" name="amount" id="amount" value="">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
Cgst amount<input type="text" name="cgstamount" id="cgstamount" onclick="calccgst();" value="0">
</div>
<div class="col-md-4">
Sgst amount<input type="text" name="sgstamount" id="sgstamount" onclick="calcsgst();" value="0">
</div>
<div class="col-md-4">
Igst amount<input type="text" name="igstamount" id="igstamount" onclick="calcigst();" value="0">
</div>
</div><br>
<div class="row">
<div class="col-md-12">
Narration<input type="text" name="narration">
</div>
</div><br>
<button type="submit" name="save" class="btn-primary" formaction="">Save</button>
<button type="submit" name="clear" class="btn-primary" formaction="">Clear</button>
</form>
<form name="form2" method="post">
<div class="row">
<div class="col-md-4">
Invoiceno<select name="invoiceno" id="invoiceno" >
<option>Select </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["invoiceno"]?></option>
<?php endforeach ?>
</select>
</div>
</div><br>
<button type="submit" class="btn-secondary" formaction="viewtradeinvoicedet.php">View</button>

</form>
</body>
</head>
</html>