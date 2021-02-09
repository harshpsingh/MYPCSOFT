<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO exporter(exportername,address1,address2,pin,city,state,country,phone,fax,email,mobile,panno,tanno,gststatename,gststatecode,gstintype,gstin,iec,sez,adcode,forexcode,branchcode,bankaccount,ifsccode) values('$_POST[exportername]','$_POST[address1]','$_POST[address2]','$_POST[pin]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[phone]','$_POST[fax]','$_POST[email]','$_POST[mobile]','$_POST[panno]','$_POST[tanno]','$_POST[gststate]','$_POST[gstcode]','$_POST[gstintype]','$_POST[gstin]','$_POST[iec]','$_POST[sez]','$_POST[adcode]','$_POST[forexcode]','$_POST[branchcode]','$_POST[bankaccount]','$_POST[ifsccode]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: exporter.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>