<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO tradevoucher(voucherno,voucherdate,invoiceno,docketno,chequeno,narration,division) values('$_POST[voucherno]','$_POST[voucherdate]','$_POST[invoiceno]','$_POST[docketno]','$_POST[chequeno]','$_POST[narration]','$_POST[division]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    header('location:tradevoucher.php');
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>