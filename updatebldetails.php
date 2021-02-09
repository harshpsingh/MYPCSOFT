<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE hbldetails SET  docketno='$_POST[docketno]',freightamt ='$_POST[freightamt]',freightpayableat='$_POST[freightpayableat]',shipmenttype='$_POST[shipmenttype]',modeoftransport='$_POST[modeoftransport]',transhipment='$_POST[transhipment]',oceanthc='$_POST[oceanthc]',oceanfreight='$_POST[oceanfreight]',destinationthc='$_POST[destinationthc]',inlandhaulage='$_POST[inlandhaulage]',destinationinlandhaulage='$_POST[destinationinlandhaulage]',noofbl='$_POST[noofbl]',placeofissue='$_POST[placeofissue]',dateofissue='$_POST[dateofissue]' where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

if ($conn->query($sql) == TRUE) {

header("Location:bldetails.php");

}
else
{
	echo mysqli_error($conn);
}


	


mysqli_close($conn);
?>