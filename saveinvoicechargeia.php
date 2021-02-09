<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=importair", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO iainvoicecharge(docketno,branch,fy,chargename,hsncode,currencyname,exchangerate,quantity,rate,amount,discount,cgstrate,sgstrate,igstrate) values('$_POST[docketno]','$_POST[branch]','$_POST[fy]','$_POST[chargename]','$_POST[chargetype]','$_POST[currencyname]','$_POST[exchangerate]','$_POST[quantity]','$_POST[rate]','$_POST[amount]','$_POST[discount]','$_POST[cgst]','$_POST[sgst]','$_POST[igst]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: generateinvoiceairi.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>