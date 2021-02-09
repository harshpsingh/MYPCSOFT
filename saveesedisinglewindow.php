<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=exportsea", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO esedisinglewindowinfo(jobno,branch,fy,invoicesrno,itemno,type,qualifier,swcode,swtext,measurement
	 ,unit) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[itemno]','$_POST[type]','$_POST[qualifier]','$_POST[swcode]','$_POST[swtext]','$_POST[measurement]','$_POST[unit]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	
    header("Location:esedidet.php");
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>