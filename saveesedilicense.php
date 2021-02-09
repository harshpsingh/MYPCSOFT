<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=exportsea", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO esedilicensedet(jobno,branch,fy,invoicesrno,licensetype,registrationno,registrationdate,itemsno,slnoinc,slnoine,expitemdet,expquantity,impitemdet,quantity,unit,impind) values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[licensetype]','$_POST[registrationno]','$_POST[registrationdate]','$_POST[itemsno]','$_POST[slnoinc]','$_POST[slnoine]','$_POST[expitemdet]','$_POST[expquantity]','$_POST[impitemdet]','$_POST[quantity]','$_POST[unit]','$_POST[impind]')";

    
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