<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=exportair", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO esediitem(jobno,branch,fy,invoicesrno,itemno,ritc,goodsdescription,quantity,productrate,unit,currencyname,exchangerate,totalvaluefc,fobinr,dbksrno,dbkrate,dbkratespec,dbkamount,schemecode,schemedescription,pmvpercentage,pmv,totalpmv,endusecode,endusedescription,igstpaymentstatus,taxablevalue,igstrate,igstamount,reward,str,accessory,cess) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[itemno]','$_POST[ritc]','$_POST[goodsdescription]','$_POST[quantity]','$_POST[productrate]','$_POST[unit]','$_POST[currencyname]','$_POST[exchangerate]','$_POST[totalvaluefc]','$_POST[fobinr]','$_POST[dbksrno]','$_POST[dbkrate]','$_POST[dbkratespec]','$_POST[dbkamount]','$_POST[schemecode]','$_POST[schemedescription]','$_POST[pmvpercentage]','$_POST[pmv]','$_POST[totalpmv]','$_POST[endusecode]','$_POST[endusedescription]','$_POST[igstpaymentstatus]','$_POST[taxablevalue]','$_POST[igstrate]','$_POST[igstamount]','$_POST[reward]','$_POST[str]','$_POST[accessory]','$_POST[cess]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
    
    header("Location:eaediitem.php");
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>