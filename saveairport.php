<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO airportlist(portname,portcode,countryname,countrycode) values('$_POST[portname]','$_POST[portcode]','$_POST[countryname]','$_POST[countrycode]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: airportlist.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>