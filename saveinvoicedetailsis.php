<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=importsea", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO isserviceinvoice(docketno,branch,fy,billno,billdate,invoiceno,invoicedate,category,commodity,narration) values('$_POST[docketno]','$_POST[branch]','$_POST[fy]','$_POST[billno]','$_POST[billdate]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[category]','$_POST[commodity]','$_POST[narration]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: generateinvoiceis.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>