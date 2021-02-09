<html>
<head>
</head>
<body>
<form method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importair";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE shipmentregister SET  docketno='$_POST[docketno]',docketdate ='$_POST[docketdate]',clearancedate='$_POST[clearancedate]' ,branch='$_POST[branch]',fy='$_POST[fy]',importername='$_POST[importername]',importeraddress='$_POST[importeraddress]',importerinvoice='$_POST[importerinvoice]',gststatename='$_POST[gststatename]',gststatecode='$_POST[gststatecode]',suppliername='$_POST[suppliername]',supplieraddress='$_POST[supplieraddress]',overseasagentname='$_POST[overseasagentname]',notify='$_POST[notify]',notifyaddress='$_POST[notifyaddress]',forwarder='$_POST[forwarder]',sagent='$_POST[sagent]',seller='$_POST[seller]',type='$_POST[type]',shipmenttype='$_POST[shipmenttype]',hawbnature='$_POST[hawbnature]',cargotype='$_POST[cargotype]',mode='$_POST[mode]',hawbblno='$_POST[hawbblno]',hawbbldate='$_POST[hawbbldate]',mawbblno='$_POST[mawbblno]',mawbbldate='$_POST[mawbbldate]',grnno='$_POST[grnno]',pono='$_POST[pono]',dono='$_POST[dono]',dodate='$_POST
[dodate]',shipmentterms='$_POST[shipmentterms]',placeofsupply='$_POST[pos]',noofpackages='$_POST[noofpackages]',units1='$_POST[units1]',grossweight='$_POST[grossweight]',units2='$_POST[units2]',netweight='$_POST[netweight]',units3='$_POST[units3]',goodsdescription='$_POST[goodsdescription]',marksandnos='$_POST[marksandnos]',origincountry='$_POST[origincountry]',originport='$_POST[originport]',destinationcountry='$_POST[destinationcountry]',destinationport='$_POST[destinationport]',clearanceat='$_POST[clearanceat]',terminal='$_POST[terminal]',firstcarrier='$_POST[firstcarrier]',secondcarrier='$_POST[secondcarrier]',eta='$_POST[eta]',etd='$_POST[etd]',igmno='$_POST[igmno]',igmdate='$_POST[igmdate]',bookingno='$_POST[bookingno]',referenceno='$_POST[referenceno]',remarks='$_POST[remarks]' where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

if ($conn->query($sql) === TRUE) {
	header("Location: iasr.php");
   
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>