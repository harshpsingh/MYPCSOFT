<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=exportsea", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO esediinvoice(jobno,branch,fy,invoicesrno,invoiceno,invoicedate,invoicevalue,currencyname,exchangerate,paymentnature,paymentperiod,contractno,natureofcontract,finb,buyerconsignee,buyername,buyeraddress,freightrate,freightcurrency,freightamount,insurancerate,insurancecurrency,insuranceamount,commissionrate,commissioncurrency,commissionamount,discountrate,discountcurrency,discountamount,packchgsrate,packchgscurrency,packchgsamount,otherdeductionrate,otherdeductioncurrency,otherdeductionamount,fobfc,fob,whetherthirdparty,thirdpartyname,thirdpartyaddress1,thirdpartyaddress2,thirdpartycity,thirdpartypin,thirdpartycountrysubdivision,thirdpartycountry) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[invoicevalue]','$_POST[currencyname]','$_POST[exchangerate]','$_POST[paymentnature]','$_POST[paymentperiod]','$_POST[contractno]','$_POST[contractnature]','$_POST[finb]','$_POST[buyerconsignee]','$_POST[buyername]','$_POST[buyeraddress]','$_POST[freightrate]','$_POST[freightcurrency]','$_POST[freightamount]','$_POST[insurancerate]','$_POST[insurancecurrency]','$_POST[insuranceamount]','$_POST[commissionrate]','$_POST[commissioncurrency]','$_POST[commissionamount]','$_POST[discountrate]','$_POST[discountcurrency]','$_POST[discountamount]','$_POST[packchgsrate]','$_POST[packchgscurrency]','$_POST[packchgsamount]','$_POST[otherdeductionrate]','$_POST[otherdeductioncurrency]','$_POST[otherdeductionamount]','$_POST[fobfc]','$_POST[fob]','$_POST[whether]','$_POST[thirdpartyname]','$_POST[thirdpartyadd1]','$_POST[thirdpartyadd2]','$_POST[thirdpartycity]','$_POST[thirdpartypin]','$_POST[thirdpartycountrysubdivision]','$_POST[thirdpartycountry]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: esedidet.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;

?>