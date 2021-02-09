<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO supplier(suppliername,address1,address2,city,country,phone,fax,email,mobile) values('$_POST[suppliername]','$_POST[address1]','$_POST[address2]','$_POST[city]','$_POST[country]','$_POST[phone]','$_POST[fax]','$_POST[email]','$_POST[mobile]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: supplier.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>