<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="exportair";
$con=mysqli_connect($servername,$username,$password,$dbname);
$sql1="Select * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
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
    $conn = new PDO("mysql:host=$servername;dbname=exportair", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	
     $sql = "INSERT INTO edisb1(jobno,jobdate,branch,fy,exportername,exporteraddress1,exporteraddress2,city,state,pin,gstintype,gstin,panno,gststate,gstcode,iec,branchcode,adcode,forexcode,ifsccode,exportertype,exporterclass,consigneename,consigneeaddress,consigneecountryname,consigneecountrycode,chaname,locationname,chanumber,stateorigin,dischargecountryname,dischargecountrycode,dischargeportname,dischargeportcode,destinationcountryname,destinationcountrycode,destinationportname,destinationportcode,rbiwaiverno,rbiwaiverdate,factorystuffed,natureofcargo,sample,totalpackages,packunit,loosepackages,noofcontainers,grossweight,netweight,wtunit,seal,packfrom,packto,packtype,containerno,containersize,excisesealno,sealdate,noofpacketsstuffed,sealtype,deviceid,doctype,docno,marksno) values('$_POST[jobno]','$_POST[jobdate]','$_POST[branch]','$_POST[fy]','$_POST[exportername]','$_POST[exporteraddress1]','$_POST[exporteraddress2]','$_POST[state]','$_POST[city]','$_POST[pin]','$_POST[gstintype]','$_POST[gstin]','$_POST[panno]','$_POST[gststate]','$_POST[gstcode]','$_POST[iec]','$_POST[branchcode]','$_POST[adcode]','$_POST[forexcode]','$_POST[ifsccode]','$_POST[exportertype]','$_POST[exporterclass]','$_POST[consigneename]','$_POST[consigneeaddress]','$_POST[consigneecountryname]','$_POST[consigneecountrycode]','$_POST[chaname]','$_POST[locationname]','$_POST[chanumber]','$_POST[stateorigin]','$_POST[dischargecountryname]','$_POST[dischargecountrycode]','$_POST[dischargeportname]','$_POST[dischargeportcode]','$_POST[destinationcountryname]','$_POST[destinationcountrycode]','$_POST[destinationportname]','$_POST[destinationportcode]','$_POST[rbiwaiverno]','$_POST[rbiwaiverdate]','$_POST[factorystuffed]','$_POST[natureofcargo]','$_POST[sample]','$_POST[totalpackages]','$_POST[packunit]','$_POST[loosepackages]','$_POST[noofconatainers]','$_POST[grossweight]','$_POST[netweight]','$_POST[wtunit]','$_POST[seal]','$_POST[packfrom]','$_POST[packto]','$_POST[packtype]','$_POST[containerno]','$_POST[containersize]','$_POST[excisesealno]','$_POST[sealdate]','$_POST[noofpacketsstuffed]','$_POST[sealtype]','$_POST[deviceid]','$_POST[doctype]','$_POST[docno]','$_POST[marksno]')";;
     
    
    // use exec() because no results are returned
    $conn->exec($sql);
	header("Location: eaedidet.php");
    //echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;}
?>