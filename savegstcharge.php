<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO gstcharge(chargename,chargetype,sac,gstrate,incomehead,expensehead,cgsthead,cgstincomehead,sgsthead,sgstincomehead,igsthead,igstincomehead) values('$_POST[chargename]','$_POST[chargetype]','$_POST[sac]','$_POST[gstrate]','$_POST[incomehead]','$_POST[expensehead]','$_POST[cgsthead]','$_POST[cgstincomehead]','$_POST[sgsthead]','$_POST[sgstincomehead]','$_POST[igsthead]','$_POST[igstincomehead]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    header('Location:gstchargemaster.php');
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>