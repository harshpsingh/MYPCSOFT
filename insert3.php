<?php
$servername = "localhost";
$username = "root";
$password = "";
$docketno=$_POST['docketno'];
$dbname="exportair";
session_start();

$con=mysqli_connect($servername,$username,$password,$dbname);
$sql1="Select exporterinvoice from shipmentregister where exportername='$_POST[exportername]' and exporterinvoice='$_POST[exporterinvoice]'  and fy='$_POST[fy]'";
$result=mysqli_query($con,$sql1);
$numrows=mysqli_num_rows($result);
if($numrows>0)
{
	echo "exporter invoice already exist";
}
else{

try{
    $conn = new PDO("mysql:host=$servername;dbname=exportair", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO shipmentregister(docketno,docketdate,clearancedate,branch,fy,exportername,exporteraddress,exporterinvoice,gststatename,gststatecode,consigneename,consigneeaddress,overseasagentname,forwarder,notify,notifyaddress,sagent,buyer,shipmenttype,hawbblno,hawbbldate,mawbblno,mawbbldate,grnno,pono,shipmentterms,cargotype,noofpackages,units1,grossweight,units2,netweight,units3,goodsdescription,marksandnos,origincountry,originport,destinationcountry,destinationport,length,width,height,pkgs,dimunit,bookingno,referenceno,clearanceat,placeofsupply,chaname,sb,remarks) values('$_POST[docketno]','$_POST[docketdate]','$_POST[clearancedate]','$_POST[branch]','$_POST[fy]','$_POST[exportername]','$_POST[address]','$_POST[exporterinvoice]','$_POST[gststatename]','$_POST[gststatecode]','$_POST[consigneename]','$_POST[caddress]','$_POST[overseasagentname]','$_POST[forwarder]','$_POST[notify]','$_POST[notifyaddress]','$_POST[sagent]','$_POST[buyer]','$_POST[shipmenttype]','$_POST[hawbblno]','$_POST[hawbbldate]','$_POST[mawbblno]','$_POST[mawbbldate]','$_POST[grnno]','$_POST[pono]','$_POST[shipmentterms]','$_POST[cargotype]','$_POST[pack]','$_POST[units1]','$_POST[gw]','$_POST[units2]','$_POST[nw]','$_POST[units3]','$_POST[goodsdescription]','$_POST[marksandnos]','$_POST[countryname]','$_POST[originport]','$_POST[destinationcountry]','$_POST[destinationport]','$_POST[length]','$_POST[width]','$_POST[height]','$_POST[pkgs]','$_POST[dimunit]','$_POST[book]','$_POST[ref]','$_POST[clearanceat]','$_POST[pos]','$_POST[chaname]','$_POST[sb]','$_POST[remarks]')";

    
    // use exec() because no results are returned
   $conn->exec($sql);
	$docketno=$_POST['docketno'];
	$dn=explode("/",$docketno);
	$dno=$dn[2];
	$dno=$dno+1;
	$sql1="Update branchdocket set docketno=$dno where branch='$_SESSION[branch]'";
	$conn->exec($sql1);
    echo "New record created successfully";
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn =null;}
?>