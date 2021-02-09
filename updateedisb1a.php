<html>
<head>
<body>

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
$sql = "UPDATE edisb1 SET  jobno='$_POST[jobno]',jobdate ='$_POST[jobdate]',branch='$_POST[branch]',fy='$_POST[fy]',exportername='$_POST[exportername]',exporteraddress1='$_POST[exporteraddress1]',exporteraddress2='$_POST[exporteraddress2]',city='$_POST[city]',state='$_POST[state]',pin='$_POST[pin]',gstintype='$_POST[gstintype]',gstin='$_POST[gstin]',panno='$_POST[pan]',gststate='$_POST[gststatename]',gstcode='$_POST[gststatecode]',iec='$_POST[iec]',branchcode='$_POST[branchcode]',adcode='$_POST[adcode]',forexcode='$_POST[forexcode]',ifsccode='$_POST[ifsccode]',exportertype='$_POST[exportertype]',exporterclass='$_POST[exporterclass]',consigneename='$_POST[consigneename]',consigneeaddress='$_POST[consigneeaddress]',consigneecountryname='$_POST[consigneecountryname]',consigneecountrycode='$_POST[consigneecountrycode]',chaname='$_POST[chaname]',locationname='$_POST[locationname]',chanumber='$_POST[chanumber]',stateorigin='$_POST[stateorigin]',destinationcountryname='$_POST[destinationcountryname]',destinationcountrycode='$_POST[destinationcountrycode]',destinationportname='$_POST[destinationportname]',destinationportcode='$_POST[destinationportcode]',dischargecountryname='$_POST[dischargecountryname]',dischargeportname='$_POST[dischargeportname]',dischargeportcode='$_POST[dischargeportcode]',rbiwaiverno='$_POST[rbiwaiverno]',rbiwaiverdate='$_POST[rbiwaiverdate]',factorystuffed='$_POST[factorystuffed]',natureofcargo='$_POST[natureofcargo]',sample='$_POST[sample]',totalpackages='$_POST[totalpackages]',packunit='$_POST[packunit]',loosepackages='$_POST[loosepackages]',noofcontainers='$_POST[noofcontainers]',grossweight='$_POST[grossweight]',netweight='$_POST[netweight]',wtunit='$_POST[wtunit]',packfrom='$_POST[packfrom]',packto='$_POST[packto]',packtype='$_POST[packtype]',containerno='$_POST[containerno]',containersize='$_POST[containersize]',excisesealno='$_POST[excisesealno]',sealdate='$_POST[sealdate]',noofpacketsstuffed='$_POST[noofpacketsstuffed]',sealtype='$_POST[sealtype]',deviceid='$_POST[deviceid]',doctype='$_POST[doctype]',docno='$_POST[docno]',marksno='$_POST[marksno]' where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$conn->query($sql);



	


mysqli_close($conn);
?>
<form method="post">
jobno<input type="text" name="jobno" value="<?php echo $_POST['jobno']?>">
<button type="submit" formaction="updateesedi.php">submit</button>
</form>

</body>
</head>
</html>
   
