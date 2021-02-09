<html>
<head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE esediinvoice SET  jobno='$_POST[jobno]',branch='$_POST[branch]',fy='$_POST[fy]',invoicesrno='$_POST[invoicesrno]',invoiceno='$_POST[invoiceno]',invoicedate='$_POST[invoicedate]',invoicevalue='$_POST[invoicevalue]',currencyname='$_POST[currencyname]',exchangerate='$_POST[exchangerate]',paymentnature='$_POST[paymentnature]',paymentperiod='$_POST[paymentperiod]',contractno='$_POST[contractno]',natureofcontract='$_POST[natureofcontract]',finb='$_POST[finb]',buyername='$_POST[buyername]',buyeraddress='$_POST[buyeraddress]',freightrate='$_POST[freightrate]',freightcurrency='$_POST[freightcurrency]',freightamount='$_POST[freightamount]',insurancerate='$_POST[insurancerate]',insurancecurrency='$_POST[insurancecurrency]',insuranceamount='$_POST[insuranceamount]',commissionrate='$_POST[commissionrate]',commissioncurrency='$_POST[commissioncurrency]',commissionamount='$_POST[commissionamount]',discountrate='$_POST[discountrate]',discountcurrency='$_POST[discountcurrency]',discountamount='$_POST[discountamount]',packchgsrate='$_POST[packchgsrate]',packchgscurrency='$_POST[packchgscurrency]',packchgsamount='$_POST[packchgsamount]',otherdeductionrate='$_POST[otherdeductionrate]',otherdeductioncurrency='$_POST[otherdeductioncurrency]',otherdeductionamount='$_POST[otherdeductionamount]',fobfc='$_POST[fobfc]',fob='$_POST[fob]' where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'and invoicesrno='$_POST[invoicesrno]'";

$conn->query($sql);



	


mysqli_close($conn);
?>
<form method="post">
jobno<input type="text" name="jobno" value="<?php echo $_POST['jobno']?>">
<button type="submit" formaction="updateesedi.php">submit</button>
</form>

</body>
</head>
</html>
   
