<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="importsea";
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
    $conn = new PDO("mysql:host=$servername;dbname=importsea", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO shipmentregister(docketno,docketdate,clearancedate,branch,fy,importername,importeraddress,importerinvoice,gststatename,gststatecode,suppliername,supplieraddress,shiplinename,shiplineaddress,overseasagentname,forwarder,notify,notifyaddress,sagent,seller,type,shipmenttype,blno,bldate,hblno,hbldate,mblno,mbldate,grnno,pono,lrno,lrdate,shipmentterms,placeofsupply,noofpackages,units1,grossweight,units2,netweight,units3,goodsdescription,marksandnos,containertype,cbm,containersize,containerno,containerpickup,handover,package,weight,customseal,shipperseal,carrierseal,origincountry,originport,loadcountry,loadport,dischargecountry,dischargeport,destinationcountry,destinationport,clearanceat,terminal,firstvessel,secondvessel,voyage,rotationno,eta,etd,igmno,igmdate,igmgateway,igmgatewaydate,inwarddate,itemno,subitemno,shed,vesselcode,emptyyard,bookingno,referenceno,chaname,sb,remarks) values('$_POST[docketno]','$_POST[docketdate]','$_POST[clearancedate]','$_POST[branch]','$_POST[fy]','$_POST[importername]','$_POST[address]','$_POST[importerinvoice]','$_POST[gststatename]','$_POST[gststatecode]','$_POST[suppliername]','$_POST[supplieraddress]','$_POST[shiplinename]','$_POST[sladdress]','$_POST[overseasagentname]','$_POST[forwarder]','$_POST[notify]','$_POST[notifyaddress]','$_POST[sagent]','$_POST[seller]','$_POST[type]','$_POST[shipmenttype]','$_POST[blno]','$_POST[bldate]','$_POST[hblno]','$_POST[hbldate]','$_POST[mblno]','$_POST[mbldate]','$_POST[grnno]','$_POST[pono]','$_POST[lrno]','$_POST[lrdate]','$_POST[shipmentterms]','$_POST[pos]','$_POST[pack]','$_POST[units1]','$_POST[gw]','$_POST[units2]','$_POST[nw]','$_POST[units3]','$_POST[goodsdescription]','$_POST[marksandnos]','$_POST[containertype]','$_POST[cbm]','$_POST[containersize]','$_POST[containerno]','$_POST[containerpickup]','$_POST[handover]','$_POST[package]','$_POST[weight]','$_POST[customseal]','$_POST[shipperseal]','$_POST[carrierseal]','$_POST[countryname]','$_POST[originport]','$_POST[loadcountry]','$_POST[loadport]','$_POST[dischargecountry]','$_POST[dischargeport]','$_POST[destinationcountry]','$_POST[destinationport]','$_POST[clearanceat]','$_POST[terminal]','$_POST[firstvessel]','$_POST[secondvessel]','$_POST[voyage]','$_POST[rotationno]','$_POST[eta]','$_POST[etd]','$_POST[igmno]','$_POST[igmdate]','$_POST[igmgateway]','$_POST[igmgatewaydate]','$_POST[inwarddate]','$_POST[itemno]','$_POST[subitemno]','$_POST[shed]','$_POST[vesselcode]','$_POST[emptyyard]','$_POST[book]','$_POST[ref]','$_POST[chaname]','$_POST[sb]','$_POST[remarks]')";

    
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