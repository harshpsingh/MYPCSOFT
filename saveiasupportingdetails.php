<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=importair", $username, $password);
    // set the PDO error mode to exceptio
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql="insert into iaedisupporting (jobno,branch,fy,invoicesrno,itemno,statementfor,doctypecode,chanumber,ieccode,doctype,doccode,issuedpartyname,issuedpartyaddress,drn,place,issuedate,bnfpartyname,bnfpartyaddress)values('$_POST[jobno]','$_POST[branch]','$_POST[fy]','$_POST[invoicesrno]','$_POST[itemno]','$_POST[statementfor]','$_POST[doctypecode]','$_POST[chanumber]','$_POST[ieccode]','$_POST[doctype]','$_POST[doccode]','$_POST[issuedpartyname]','$_POST[issuedpartyaddress]','$_POST[drn]','$_POST[place]','$_POST[issuedate]','$_POST[bnfpartyname]','$_POST[bnfpartyaddress]')";
	
    // use exec() because no results are returned
    $conn->exec($sql);
	
    echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;
?>