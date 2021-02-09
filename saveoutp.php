<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO outstandingpayment(billdate,billno,partyname,docketno,blawbno,clientinvoice,dueamount,status,paidamount,paiddate) values('$_POST[billdate]','$_POST[billno]','$_POST[partyname]','$_POST[docketno]','$_POST[blawbno]','$_POST[clientinvoiceno]','$_POST[dueamount]','$_POST[status]','$_POST[paidamount]','$_POST[paiddate]')";

    $conn->exec($sql);
    // use exec() because no results are returned
    
    echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>