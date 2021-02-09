<html>
<head>
</head>
<body>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportair";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE shipmentregister SET  docketno='$_POST[docketno]',docketdate ='$_POST[docketdate]',clearancedate='$_POST[clearancedate]' ,branch='$_POST[branch]',fy='$_POST[fy]',exportername='$_POST[exportername]',exporteraddress='$_POST[exporteraddress]',exporterinvoice='$_POST[exporterinvoice]',gststatename='$_POST[gststatename]',gststatecode='$_POST[gststatecode]',consigneename='$_POST[consigneename]',consigneeaddress='$_POST[consigneeaddress]',overseasagentname='$_POST[overseasagentname]',notify='$_POST[notify]',notifyaddress='$_POST[notifyaddress]',forwarder='$_POST[forwarder]',sagent='$_POST[sagent]',buyer='$_POST[buyer]',shipmenttype='$_POST[shipmenttype]',hawbblno='$_POST[hawbblno]',hawbbldate='$_POST[hawbbldate]',mawbblno='$_POST[mawbblno]',mawbbldate='$_POST[mawbbldate]',grnno='$_POST[grnno]',pono='$_POST[pono]',
shipmentterms='$_POST[shipmentterms]',cargotype='$_POST[cargotype]',noofpackages='$_POST[noofpackages]',units1='$_POST[units1]',grossweight='$_POST[grossweight]',units2='$_POST[units2]',netweight='$_POST[netweight]',units3='$_POST[units3]',goodsdescription='$_POST[goodsdescription]',marksandnos='$_POST[marksandnos]',origincountry='$_POST[origincountry]',originport='$_POST[originport]',destinationcountry='$_POST[destinationcountry]',destinationport='$_POST[destinationport]',length='$_POST[length]',width='$_POST[width]',height='$_POST[height]',pkgs='$_POST[pkgs]',dimunit='$_POST[dimunit]',bookingno='$_POST[bookingno]',referenceno='$_POST[referenceno]',clearanceat='$_POST[clearanceat]',placeofsupply='$_POST[placeofsupply]',chaname='$_POST[chaname]',sb='$_POST[sb]',remarks='$_POST[remarks]' where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

if ($conn->query($sql) === TRUE) {
	header("Location: easr.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>