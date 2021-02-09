<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=importsea", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO iaediinvoice(jobno,branch,fy,invoicesrno,invoiceno,invoicedate,invoicevalue,currencyname,exchangerate,termsofinvoice,locno,locdate,suppliername,supplieraddress1,supplieraddress2,city,country,bsrelated,natureoftransaction,termsofpayment,valuationmethod,freight,insurance,agencycomm,loadingcharges,misccharges,discount,highseasale) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[invoicevalue]','$_POST[currencyname]','$_POST[exchangerate]','$_POST[termsofinvoice]','$_POST[locno]','$_POST[locdate]','$_POST[suppliername]','$_POST[supplieraddress1]','$_POST[supplieraddress2]','$_POST[city]','$_POST[country]','$_POST[bsrelated]','$_POST[natureoftransaction]','$_POST[termsofpayment]','$_POST[valuationmethod]','$_POST[freight]','$_POST[insurance]','$_POST[agencycomm]','$_POST[loadingcharges]','$_POST[misccharges]','$_POST[discount]','$_POST[highseasale]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: queryediis.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
