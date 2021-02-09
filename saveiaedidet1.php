<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="importair";
$con=mysqli_connect($servername,$username,$password,$dbname);
$sql1="Select * from iaedidet where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
$result=mysqli_query($con,$sql1);
$numrows=mysqli_num_rows($result);
if($numrows>0)
{
	echo "record already exist";
}
else
{
	$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=importair", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	
     $sql = "INSERT INTO iaedidet(jobno,jobdate,branch,fy,chaname,location,chanumber,importername,importeraddress1,importeraddress2,state,city,pin,iec,adcode,branchcode,panno,gstintype,gstin,gststatename,gststatecode,origincountry,origincountrycode,originport,originportcode,consigneecountry,consigneecountrycode,reportingport,reportingportcode,transportmode,betype,kachabe,highseasale,importertype,greenchannel,section48,firstcheck,paymode,publicsector,priorbe,igmno,igmdate,igminwarddate,blno,bldate,hblno,hbldate,noofpackages,unit,grossweight,wtunit,marksno,containerno,lclfcl,containersize,seal,truckno) values('$_POST[jobno]','$_POST[jobdate]','$_POST[branch]','$_POST[fy]','$_POST[chaname]','$_POST[locationname]','$_POST[chanumber]','$_POST[importername]','$_POST[importeraddress1]','$_POST[importeraddress2]','$_POST[state]','$_POST[city]','$_POST[pin]','$_POST[iec]','$_POST[adcode]','$_POST[branchcode]','$_POST[panno]','$_POST[gstintype]','$_POST[gstin]','$_POST[gststate]','$_POST[gstcode]','$_POST[origincountryname]','$_POST[origincountrycode]','$_POST[originportname]','$_POST[originportcode]','$_POST[consigneecountryname]','$_POST[consigneecountrycode]','$_POST[reportingportname]','$_POST[reportingportcode]','$_POST[transportmode]','$_POST[betype]','$_POST[kachabe]','$_POST[highseasale]','$_POST[importertype]','$_POST[greenchannel]','$_POST[section48]','$_POST[firstcheck]','$_POST[paymode]','$_POST[publicsector]','$_POST[priorbe]','$_POST[igmno]','$_POST[igmdate]','$_POST[igminwarddate]','$_POST[blno]','$_POST[bldate]','$_POST[hblno]','$_POST[hbldate]','$_POST[noofpackages]','$_POST[unit]','$_POST[grossweight]','$_POST[wtunit]','$_POST[marksno]','$_POST[containerno]','$_POST[lclfcl]','$_POST[containersize]','$_POST[sealno]','$_POST[truckno]')";;
     
    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: iaedidet.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;}
?>