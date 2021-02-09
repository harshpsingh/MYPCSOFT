<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="importair";
session_start();


$con=mysqli_connect($servername,$username,$password,$dbname);
$sql1="Select importerinvoice from shipmentregister where importername='$_POST[importername]' and importerinvoice='$_POST[importerinvoice]'  and fy='$_POST[fy]'";
$result=mysqli_query($con,$sql1);
$numrows=mysqli_num_rows($result);
if($numrows>0)
{
	echo "importer invoice already exist";
}

try{
    $conn = new PDO("mysql:host=$servername;dbname=importair", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO shipmentregister(docketno,docketdate,clearancedate,branch,fy,importername,importeraddress,importerinvoice,gststatename,gststatecode,suppliername,supplieraddress,overseasagentname,forwarder,notify,notifyaddress,sagent,seller,type,shipmenttype,hawbnature,cargotype,mode,hawbblno,hawbbldate,mawbblno,mawbbldate,grnno,pono,dono,dodate,shipmentterms,placeofsupply,noofpackages,units1,grossweight,units2,netweight,units3,goodsdescription,marksandnos,origincountry,originport,destinationcountry,destinationport,clearanceat,terminal,firstcarrier,secondcarrier,eta,etd,igmno,igmdate,bookingno,referenceno,remarks) values('$_POST[docketno]','$_POST[docketdate]','$_POST[clearancedate]','$_POST[branch]','$_POST[fy]','$_POST[importername]','$_POST[address]','$_POST[importerinvoice]','$_POST[gststatename]','$_POST[gststatecode]','$_POST[suppliername]','$_POST[supplieraddress]','$_POST[overseasagentname]','$_POST[forwarder]','$_POST[notify]','$_POST[notifyaddress]','$_POST[sagent]','$_POST[seller]','$_POST[type]','$_POST[shipmenttype]','$_POST[hawbnature]','$_POST[cargotype]','$_POST[mode]','$_POST[hawbblno]','$_POST[hawbbldate]','$_POST[mawbblno]','$_POST[mawbbldate]','$_POST[grnno]','$_POST[pono]','$_POST[dono]','$_POST[dodate]','$_POST[shipmentterms]','$_POST[pos]','$_POST[pack]','$_POST[units1]','$_POST[gw]','$_POST[units2]','$_POST[nw]','$_POST[units3]','$_POST[goodsdescription]','$_POST[marksandnos]','$_POST[countryname]','$_POST[originport]','$_POST[destinationcountry]','$_POST[destinationport]','$_POST[clearanceat]','$_POST[terminal]','$_POST[firstcarrier]','$_POST[secondcarrier]','$_POST[eta]','$_POST[etd]','$_POST[igmno]','$_POST[igmdate]','$_POST[book]','$_POST[ref]','$_POST[remarks]')";

    
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

$conn =null;
?>