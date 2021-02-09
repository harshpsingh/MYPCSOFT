<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO shipline(shiplinename,address1,address2,state,city,pin,country,phone,fax,email,mobile,gststate,gstcode,gstin) values('$_POST[shiplinename]','$_POST[address1]','$_POST[address2]','$_POST[state]','$_POST[city]','$_POST[pin]','$_POST[country]','$_POST[phone]','$_POST[fax]','$_POST[email]','$_POST[mobile]','$_POST[gststate]','$_POST[gstcode]','$_POST[gstin]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: shipline.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>