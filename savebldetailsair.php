<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=exportair", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO hbldetails(docketno,branch,fy,freightamt,freightpayableat,shipmenttype,modeoftransport,transhipment,oceanthc,oceanfreight,destinationthc,inlandhaulage,destinationinlandhaulage,noofbl,placeofissue,dateofissue) values('$_POST[docketno]','$_POST[branch]','$_POST[fy]','$_POST[freightamt]','$_POST[freightpayableat]','$_POST[shipmenttype]','$_POST[modeoftransport]','$_POST[transhipment]','$_POST[oceanthc]','$_POST[oceanfreight]','$_POST[destinationthc]','$_POST[inlandhaulage]','$_POST[destinationinlandhaulage]','$_POST[noofbl]','$_POST[placeofissue]','$_POST[dateofissue]')";

    
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