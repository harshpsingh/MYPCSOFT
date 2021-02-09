<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO login(username,password) values('$_POST[username]','$_POST[password]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: addusers.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>