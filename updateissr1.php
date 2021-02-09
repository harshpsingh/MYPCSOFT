<html>
<head>
</head>
<body>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importsea";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE shipmentregister SET  docketno='$_POST[docketno]',docketdate ='$_POST[docketdate]',clearancedate='$_POST[clearancedate]' ,branch='$_POST[branch]',fy='$_POST[fy]',importername='$_POST[importername]',importeraddress='$_POST[importeraddress]',importerinvoice='$_POST[importerinvoice]',gststatename='$_POST[gststatename]',gststatecode='$_POST[gststatecode]',suppliername='$_POST[suppliername]',supplieraddress='$_POST[supplieraddress]',shiplinename='$_POST[shiplinename]',shiplineaddress='$_POST[shiplineaddress]',overseasagentname='$_POST[overseasagentname]',notify='$_POST[notify]',notifyaddress='$_POST[notifyaddress]',forwarder='$_POST[forwarder]',sagent='$_POST[sagent]',seller='$_POST[seller]',type='$_POST[type]',shipmenttype='$_POST[shipmenttype]',blno='$_POST[blno]',bldate='$_POST[bldate]',hblno='$_POST[hblno]',hbldate='$_POST[hbldate]',mblno='$_POST[mblno]',mbldate='$_POST[mbldate]',grnno='$_POST[grnno]',pono='$_POST[pono]',lrno='$_POST[lrno]',lrdate='$_POST
[lrdate]',shipmentterms='$_POST[shipmentterms]',placeofsupply='$_POST[pos]',noofpackages='$_POST[noofpackages]',units1='$_POST[units1]',grossweight='$_POST[grossweight]',units2='$_POST[units2]',netweight='$_POST[netweight]',units3='$_POST[units3]',goodsdescription='$_POST[goodsdescription]',marksandnos='$_POST[marksandnos]',containertype='$_POST[containertype]',cbm='$_POST[cbm]',containersize='$_POST[containersize]',containerno='$_POST[containerno]',containerpickup='$_POST[containerpickup]',handover='$_POST[handover]',package='$_POST[package]',weight='$_POST[weight]',customseal='$_POST[customseal]',shipperseal='$_POST[shipperseal]',carrierseal='$_POST[carrierseal]',origincountry='$_POST[origincountry]',originport='$_POST[originport]',loadcountry='$_POST[loadcountry]',loadport='$_POST[loadport]',dischargecountry='$_POST[dischargecountry]',dischargeport='$_POST[dischargeport]',destinationcountry='$_POST[destinationcountry]',destinationport='$_POST[destinationport]',clearanceat='$_POST[clearanceat]',terminal='$_POST[terminal]',firstvessel='$_POST[firstvessel]',secondvessel='$_POST[secondvessel]',voyage='$_POST[voyage]',rotationno='$_POST[rotationno]',eta='$_POST[eta]',etd='$_POST[etd]',igmno='$_POST[igmno]',igmdate='$_POST[igmdate]',igmgateway='$_POST[igmgateway]',igmgatewaydate='$_POST[igmgatewaydate]',inwarddate='$_POST[inwarddate]',itemno='$_POST[itemno]',subitemno='$_POST[subitemno]',shed='$_POST[shed]',vesselcode='$_POST[vesselcode]',emptyyard='$_POST[emptyyard]',bookingno='$_POST[bookingno]',referenceno='$_POST[referenceno]',chaname='$_POST[chaname]',sb='$_POST[sb]',remarks='$_POST[remarks]' where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

if ($conn->query($sql) === TRUE) {
	header("Location: issr.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>