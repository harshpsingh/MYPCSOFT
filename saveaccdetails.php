<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO accountmaster(accountname,accountgroup,balance) values('$_POST[accountname]','$_POST[accountgroup]','$_POST[balance]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: accountmaster.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>