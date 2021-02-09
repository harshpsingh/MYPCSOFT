<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=importsea", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO isediitem(jobno,branch,fy,invoicesrno,invoiceno,invoicedate,itemno,ritc,goodsdescription,quantity,unit,productrate,stdpref,manufacturer,origincountry,sourcecountryname,sourcecountrycode,transitcountryname,transitcountrycode,accessedvalue,endusecode,endusedescription,svbaccessed,svbduty,accessorystatus,custnotn,custsrno,excnotn,excsrno,bcdnotn,bcdsrno,cvdnotn,cvdsrno,addcvdnotn,addcvdsrno,swsnotn,swssrno,saptanotn,saptasrno,igstrate,igstamount) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[itemno]','$_POST[ritc]','$_POST[goodsdescription]','$_POST[quantity]','$_POST[unit]','$_POST[productrate]','$_POST[stdpref]','$_POST[manufacturer]','$_POST[origincountry]','$_POST[sourcecountryname]','$_POST[sourcecountrycode]','$_POST[transitcountryname]','$_POST[transitcountrycode]','$_POST[accessedvalue]','$_POST[endusecode]','$_POST[endusedescription]','$_POST[svbaccessed]','$_POST[svbduty]','$_POST[accessorystatus]','$_POST[custnotn]','$_POST[custsrno]','$_POST[excnotn]','$_POST[excsrno]','$_POST[bcdnotn]','$_POST[bcdsrno]','$_POST[cvdnotn]','$_POST[cvdsrno]','$_POST[addcvdnotn]','$_POST[addcvdsrno]','$_POST[swsnotn]','$_POST[swssrno]','$_POST[saptanotn]','$_POST[saptasrno]','$_POST[igstrate]','$_POST[igstamount]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>