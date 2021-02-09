<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=exportsea", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO esedithirdparty(jobno,branch,fy,invoicesrno,itemno,ieccode,branchsrno,manufacturername,manufactureraddress1,manufactureraddress2,city,pin,gstintype,gstinno) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[itemno]','$_POST[ieccode]','$_POST[branchsrno]','$_POST[manufacturername]','$_POST[manufactureraddress1]','$_POST[manufactureraddress2]','$_POST[city]','$_POST[pin]','$_POST[gstintype]','$_POST[gstinno]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    header("Location:esedithirdparty.php");
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>