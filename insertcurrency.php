<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO currency(currencyname,importrate,exportrate,effectivefrom) values('$_POST[currencyname]','$_POST[importrate]','$_POST[exportrate]','$_POST[effectivefrom]')";
	$conn->exec($sql);
	header("Location: currencymaster.php");
   
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn=null;
?>