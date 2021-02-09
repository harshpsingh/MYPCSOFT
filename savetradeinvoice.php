<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO tradevoucher(voucherno,voucherdate,invoiceno,invoicedate,branch,fy,division,docketno,partyname,payreceive,chargename,sac,unit,quantity,rate,amount,cgst,sgst,igst,narration) values('$_POST[voucherno]','$_POST[voucherdate]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[branch]','$_POST[fy]','$_POST[division]','$_POST[docketno]','$_POST[partyname]','$_POST[payreceive]','$_POST[chargename]','$_POST[sac]','$_POST[unit]','$_POST[quantity]','$_POST[rate]','$_POST[amount]','$_POST[cgstamount]','$_POST[sgstamount]','$_POST[igstamount]','$_POST[narration]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    header('location:tradeinvoice.php');
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>