<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO currencymaster(currencyname,exportexchange,importexchange) values('$_POST[currencyname]','$_POST[exportexchange]','$_POST[importexchange]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: currencymaster.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>